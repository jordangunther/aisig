<?php

namespace App\Http\Controllers;

use Auth;

use App\Courses;
use App\Lessons;
use App\User;
use App\Files;
use App\Category;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use App\Http\Requests\DeleteRequest;
use App\Http\Requests\UserUpdateRequest;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Mail;
use App\Mail\AdvanceRequest;
use App\Mail\AdminRequest;
use App\Mail\Approve;
use App\Mail\Rejected;
use App\Mail\Deleted;

class UsersController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function updateAdmin(UserUpdateRequest $request, User $users)
    {
        if (Auth::user()->user_type == 'admin') {
            $author = $request->first_name . ' ' . $request->last_name;

            Courses::where('user_id', $users->id)
            ->update(['author' => $author]);

            $image = $request->file('user_image');
            if ($image === null )
            {
                $filename = $users->user_image;
            } else {
                $filename = time() . '.' . $image->getClientOriginalName();
                $path = storage_path('app/public/image/' . $filename);
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
            }

            $users->email = $request->email;
            $users->password = $users->password;
            $users->user_type = $request->user_type;
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->user_image = $filename;
            $users->background_image = $request->background_image;
            $users->description = $request->description;
            $users->save();

            if ($request->user_type === 'request_advance'){
                Mail::to('jordankgunther@gmail.com')->send(new AdvanceRequest($users));
            }
            if ($request->user_type === 'request_basic_admin' || $request->user_type === 'request_advance_admin'){
                Mail::to('jordankgunther@gmail.com')->send(new AdminRequest($users));
            }
            if ($request->user_type === 'basic'){
                $approve = 'basic';
                $name = $users->first_name;
                Mail::to($users)->send(new Approve($name, $approve));
            }
            if ($request->user_type === 'advance'){
                $approve = 'advance';
                $name = $users->first_name;
                Mail::to($users)->send(new Approve($name, $approve));
            }
            if ($request->user_type === 'admin'){
                $approve = 'admin';
                $name = $users->first_name;
                Mail::to($users)->send(new Approve($name, $approve));
            }

            return redirect()->back()->with('message', 'Success! User '.$request->first_name . ' ' . $request->last_name . ' has been updated!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    public function updateUser(UserUpdateRequest $request, User $users)
    {
        if (Auth::user()->id == $users->id)
        {
            $author = $request->first_name . ' ' . $request->last_name;

            Courses::where('user_id', $users->id)
            ->update(['author' => $author]);

            $image = $request->file('user_image');
            if ($image === null )
            {
                $filename = $users->user_image;
            } else {
                $filename = time() . '.' . $image->getClientOriginalName();
                $path = storage_path('app/public/image/' . $filename);
                Image::make($image->getRealPath())->resize(200, 200)->save($path);
            }

            $users->email = $request->email;
            $users->password = $users->password;
            $users->user_type = $request->user_type;
            $users->first_name = $request->first_name;
            $users->last_name = $request->last_name;
            $users->user_image = $filename;
            $users->background_image = $request->background_image;
            $users->description = $request->description;
            $users->save();

            if ($request->user_type === 'request_advance'){
                Mail::to('jordankgunther@gmail.com')->send(new AdvanceRequest($users));
            }
            if ($request->user_type === 'request_basic_admin' || $request->user_type === 'request_advance_admin'){
                Mail::to('jordankgunther@gmail.com')->send(new AdminRequest($users));
            }

            return redirect()->back()->with('message', 'Success! User '.$request->first_name . ' ' . $request->last_name . ' has been updated!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    public function approveAdvance(User $users)
    {
        if (Auth::user()->user_type == 'admin') {
            $users->user_type = 'advance';
            $users->save();

            $approve = 'advance';
            $name = $users->first_name;
            Mail::to($users)->send(new Approve($name, $approve));
    
            return redirect()->back()->with('message', 'Success! User '.$users->first_name . ' ' . $users->last_name . ' has been approved!');
        }
        else
        {
            return redirect('/courses');
        }

    }

    public function approveAdmin(User $users)
    {
        if (Auth::user()->user_type == 'admin') {
            $users->user_type = 'admin';
            $users->save();

            $approve = 'admin';
            $name = $users->first_name;
            Mail::to($users)->send(new Approve($name, $approve));
    
            return redirect()->back()->with('message', 'Success! User '.$users->first_name . ' ' . $users->last_name . ' has been approved!');
        }
        else
        {
            return redirect('/courses');
        }

    }

    public function reject(DeleteRequest $request, User $users)
    {
        if (Auth::user()->user_type == 'admin') {
            $users->user_type = 'basic';
            $users->save();

            $mailCategory = 'user';
            $reject = 'User Request';
            $name = $users->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Rejected($name, $reject, $messageInput, $mailCategory));
    
            return redirect()->back()->with('message', 'Success! User '.$users->first_name . ' ' . $users->last_name . ' has been denied access!');
        }
        else
        {
            return redirect('/courses');
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteRequest $request, User $users)
    {
        if (Auth::user()->user_type == 'admin') {
            $courses = Courses::where('user_id', $users->id)
            ->delete();
            $lessons = Lessons::where('user_id', $users->id)
            ->delete();
    
            $users->delete();

            $delete = 'User';
            $name = $users->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Deleted($name, $delete, $messageInput));
    
            return redirect()->back()->with('message', 'Success! User '.$users->first_name . ' ' . $users->last_name . ' has been deleted!');
        }
        else
        {
            return redirect('/courses');
        }
    }
}
