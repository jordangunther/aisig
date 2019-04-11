<?php

namespace App\Http\Controllers;

use Auth;

use App\Courses;
use App\Lessons;
use App\User;
use App\Files;
use App\Category;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Requests\CourseUpdateRequest;
use App\Http\Requests\LessonRequest;
use App\Http\Requests\SearchRequest;
use App\Http\Requests\DeleteRequest;
use Intervention\Image\ImageManagerStatic as Image;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Mail;
use App\Mail\Approve;
use App\Mail\Rejected;
use App\Mail\Deleted;
use App\Mail\Pending;
use App\Mail\Created;
use App\Mail\PendingSwitch;

class CoursesController extends Controller
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
        $course = Courses::where('status', 'active')->get();
        $category = Category::all();
        $author = User::whereIn('user_type', ['advance', 'admin'])->get();

        return view('pages.courses.index', compact('course', 'author','category'));
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
    public function store(UploadRequest $request)
    {
        if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin' || Auth::user()->user_type == 'admin') {
            $author = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $category = Category::where('id', $request->category)->value('name');

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalName();
            $path = storage_path('app/public/image/' . $filename);
            Image::make($image->getRealPath())->resize(1600, 900)->save($path);

            $course = Courses::create([
                'user_id' => Auth::user()->id,
                'category_id' => request('category'),
                'image' => $filename,
                'course_title' => request('course_title'),
                'author' => $author,
                'category' => $category,
                'status' => 'pending',
                'description' => request('description'),
            ]);

            $user = Auth::user();
            $content = $course;
            $mailCategory = 'course';
            Mail::to('jordankgunther@gmail.com')->send(new Pending($user, $content, $mailCategory));
            Mail::to($user)->send(new Created($user, $content, $mailCategory));

            return redirect()->back()->with('message', 'Success! Course '.$request->course_title.' has been Created!');
        } 
        else
        {
            return redirect('/courses');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function show(Courses $courses)
    {
        $id = $courses->user_id;
        $courseID = $courses->id;
        $author = User::where('id', $id)->get();
        $lessons = Lessons::where('course_id', $courseID)->where('status', 'active')->get();
        $category = Category::all();

        return view('pages.courses.details', compact('courses','author','lessons','category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function showMine()
    {
        if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'admin' || Auth::user()->user_type == 'request_advance_admin') {
            $id = Auth::user()->id;
            $course = Courses::where('user_id', $id)->get();
            $lesson = Lessons::where('user_id', $id)->get();
            $filesTemp = Files::all();
            $files = array();
            foreach($lesson as $lessons){
                foreach($filesTemp as $file){
                    if($lessons->id === $file->lesson_id){
                        array_push($files,$file);
                    }
                }
            }
            $user = User::all();
            $category = Category::all();
            
            return view('pages.mycontent.index', compact('course', 'user', 'lesson','category', 'files'));
        }
        else{
            return redirect('/courses');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function category($category)
    {
        $course = Courses::where('category', $category)->get();
        $user = User::all();

        return view('pages.category.index', compact('course', 'user','category'));
        

    }

    /**
     * Search a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function search(SearchRequest $request)
    {
        $searchTerm = $request->search;
        $course = Courses::where(function ($query) {
            $query->where('status', '=', 'active');
        })->where(function ($query) use ($searchTerm) {
            $query->where('course_title', 'LIKE', '%'.$searchTerm.'%')->orWhere('description', 'LIKE', '%'.$searchTerm.'%')->orWhere('category', 'LIKE', '%'.$searchTerm.'%');
        })->get();
        $lesson = Lessons::where(function ($query) {
            $query->where('status', '=', 'active');
        })->where(function ($query) use ($searchTerm) {
            $query->where('lesson_title', 'LIKE', '%'.$searchTerm.'%')->orWhere('description', 'LIKE', '%'.$searchTerm.'%')->orWhere('course', 'LIKE', '%'.$searchTerm.'%');
        })->get();
        $files = Files::where('name', 'LIKE', '%'.$searchTerm.'%')->get();
        $author = User::where(function ($query) {
            $query->where('user_type', '=', 'advance')->orWhere('user_type', '=', 'request_advance_admin')->orWhere('user_type', '=', 'admin');
        })->where(function ($query) use ($searchTerm) {
            $query->where('first_name', 'LIKE', '%'.$searchTerm.'%')->orWhere('last_name', 'LIKE', '%'.$searchTerm.'%')->orWhere('description', 'LIKE', '%'.$searchTerm.'%');
        })->get();
        return view('pages.search.index', compact('course', 'searchTerm', 'lesson', 'files', 'author'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function authors()
    {
        $course = Courses::all();
        $author = User::whereIn('user_type', ['advance', 'admin', 'request_advance_admin'])->get();

        return view('pages.authors.index', compact('course', 'author'));
        

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function author($user_id)
    {
        $course = Courses::where('user_id', $user_id)->where('status', 'active')->get();
        $author = User::where('id', $user_id)->get();

        return view('pages.authors.details', compact('course', 'author'));
        

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $courses)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function updateUser(CourseUpdateRequest $request, Courses $courses)
    {
        if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin' || Auth::user()->user_type == 'admin') {
            if (Auth::user()->id == $request->user_id)
            {
                $user = User::where('id', $request->user_id)->get();
                $users = User::where('id', $courses->user_id)->get();
                $author = $user[0]->first_name . ' ' . $user[0]->last_name;
                $category = Category::where('id', $request->category)->value('name');

                Lessons::where('course_id', $courses->id)
                ->update(['user_id' => request('user_id')]);

                $image = $request->file('image');
                if ($image === null )
                {
                    $filename = $courses->image;
                } else {
                    $filename = time() . '.' . $image->getClientOriginalName();
                    $path = storage_path('app/public/image/' . $filename);
                    Image::make($image->getRealPath())->resize(1600, 900)->save($path);
                }

                $courses->user_id = $request->user_id;
                $courses->category_id = $request->category;
                $courses->image = $filename;
                $courses->course_title = $request->course_title;
                $courses->author = $author;
                $courses->category = $category;
                $courses->status = 'pending';
                $courses->description = $request->description;
                $courses->save();

                $content = $courses;
                $mailCategory = 'course';
                Mail::to('jordankgunther@gmail.com')->send(new Pending($user[0], $content, $mailCategory));
                Mail::to($user)->send(new PendingSwitch($user, $content, $mailCategory));

                return redirect()->back()->with('message', 'Success! Course '.$request->course_title.' has been updated!');
            }
            return redirect('/courses');
        }
        else
        {
            return redirect('/courses');
        } 
    }

    public function updateAdmin(CourseUpdateRequest $request, Courses $courses)
    {
        if (Auth::user()->user_type == 'admin') {
            $user = User::where('id', $request->user_id)->get();
            $users = User::where('id', $courses->user_id)->get();
            $author = $user[0]->first_name . ' ' . $user[0]->last_name;
            $category = Category::where('id', $request->category)->value('name');

            Lessons::where('course_id', $courses->id)
            ->update(['user_id' => request('user_id')]);

            $image = $request->file('image');
            if ($image === null )
            {
                $filename = $courses->image;
            } else {
                $filename = time() . '.' . $image->getClientOriginalName();
                $path = storage_path('app/public/image/' . $filename);
                Image::make($image->getRealPath())->resize(1600, 900)->save($path);
            }

            $courses->user_id = $request->user_id;
            $courses->category_id = $request->category;
            $courses->image = $filename;
            $courses->course_title = $request->course_title;
            $courses->author = $author;
            $courses->category = $category;
            $courses->status = $request->status;
            $courses->description = $request->description;
            $courses->save();

            if($request->status === 'active'){
                $approve = 'course';
                $name = $courses->course_title;
                Mail::to($users)->send(new Approve($name, $approve));
            } else if($request->status === 'rejected'){
                $mailCategory = 'course';
                $reject = 'Course: ' . $courses->course_title . ',';
                $name = $users[0]->first_name;
                $messageInput = 'Please contact the IASIG Team if you have any questions.';
                Mail::to($users)->send(new Rejected($name, $reject, $messageInput, $mailCategory));
            } else if($request->status === 'pending'){
                $content = $courses;
                $mailCategory = 'course';
                Mail::to('jordankgunther@gmail.com')->send(new Pending($user[0], $content, $mailCategory));
                Mail::to($user)->send(new PendingSwitch($user, $content, $mailCategory));
            }

            return redirect()->back()->with('message', 'Success! Course '.$request->course_title.' has been updated!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    public function approve(Courses $courses)
    {
        if (Auth::user()->user_type == 'admin') {
            $courses->status = 'active';
            $courses->save();

            $users = User::where('id', $courses->user_id)->get();
            $approve = 'course';
            $name = $courses->course_title;
            Mail::to($users)->send(new Approve($name, $approve));

            return redirect()->back()->with('message', 'Success! Lesson '.$courses->course_title.' has been approved!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    public function reject(DeleteRequest $request, Courses $courses)
    {
        if (Auth::user()->user_type == 'admin') {
            $courses->status = 'rejected';
            $courses->save();

            $mailCategory = 'course';
            $users = User::where('id', $courses->user_id)->get();
            $reject = 'Course: ' . $courses->course_title . ',';
            $name = $users[0]->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Rejected($name, $reject, $messageInput, $mailCategory));

            return redirect()->back()->with('message', 'Success! Lesson '.$courses->course_title.' has been rejected!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Courses  $courses
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteRequest $request, Courses $courses)
    {
        if (Auth::user()->user_type == 'admin') {
            $courses->delete();

            $users = User::where('id', $courses->user_id)->get();
            $delete = 'Course: ' . $courses->course_title . ',';
            $name = $users[0]->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Deleted($name, $delete, $messageInput));

            return redirect()->back()->with('message', 'Success! Course '.$courses->course_title.' has been deleted!');
        }
        else if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin') {
            if (Auth::user()->id == $courses->user_id)
            {
            $courses->delete();

            $users = User::where('id', $courses->user_id)->get();
            $delete = 'Course: ' . $courses->course_title . ',';
            $name = $users[0]->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Deleted($name, $delete, $messageInput));

            return redirect()->back()->with('message', 'Success! Course '.$courses->course_title.' has been deleted!');
            }
            return redirect('/courses');
        }
        else{
            return redirect('/courses');
        }
    }
}
