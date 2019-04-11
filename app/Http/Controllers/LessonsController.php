<?php

namespace App\Http\Controllers;

use Auth;

use App\Courses;
use App\Lessons;
use App\User;
use App\Files;
use App\Category;
use ZipArchive;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Requests\LessonRequest;
use App\Http\Requests\LessonUpdateRequest;
use App\Http\Requests\DeleteRequest;
use App\Http\Requests\FilesRequest;
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

class LessonsController extends Controller
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
        $lesson = Lessons::where('status', 'active')->get();
        $category = Category::all();
        $author = User::whereIn('user_type', ['advance', 'admin'])->get();

        return view('pages.lessons.index', compact('course', 'lesson', 'author','category'));
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
    public function store(LessonRequest $request)
    {
        if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin' || Auth::user()->user_type == 'admin') {
            $userId = Auth::user()->id;
            $author = Auth::user()->first_name . ' ' . Auth::user()->last_name;
            $courseName = Courses::where('id', $request->course_id)->value('course_title');

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalName();
            $path = storage_path('app/public/image/' . $filename);
            Image::make($image->getRealPath())->resize(1600, 900)->save($path);

            $lesson = Lessons::create([
                'user_id' => $userId,
                'course_id' => request('course_id'),
                'author' => $author,
                'course' => $courseName,
                'image' => $filename,
                'lesson_title' => request('lesson_title'),
                'description' => request('description'),
                'status' => 'pending',

            ]);

            $file = $request->file('file');
            if (count($file) > 0){
                foreach ($file as $files){
                    $originalName = $files->getClientOriginalName();
                    $fileLoc =  $files->storeAs('public/upload', $originalName);
                    $mimeType = Storage::mimeType($fileLoc);
                    $fileUpload = Files::create([
                        'course_id' => request('course_id'),
                        'lesson_id' => $lesson->id,
                        'name' => $originalName,
                        'mime' =>  $mimeType,
                        'original_filename' => $originalName,
                    ]);
                }
            }

            $user = Auth::user();
            $content = $lesson;
            $mailCategory = 'lesson';
            Mail::to('jordankgunther@gmail.com')->send(new Pending($user, $content, $mailCategory));
            Mail::to($user)->send(new Created($user, $content, $mailCategory));
    
            return redirect()->back()->with('message', 'Success! Lesson '.$request->lesson_title.' has been created!');
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function storeFiles(FilesRequest $request)
    {
        if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin' || Auth::user()->user_type == 'admin') {
            $userId = Auth::user()->id;
            $author = Auth::user()->first_name . ' ' . Auth::user()->last_name;

            $image = $request->file('image');
            $filename = time() . '.' . $image->getClientOriginalName();
            $path = storage_path('app/public/image/' . $filename);
            Image::make($image->getRealPath())->resize(1600, 900)->save($path);

            $lesson = Lessons::create([
                'user_id' => $userId,
                'course_id' => request('course_id'),
                'author' => $author,
                'course' => 'independent',
                'image' => $filename,
                'lesson_title' => request('lesson_title'),
                'description' => request('description'),
                'status' => 'pending',

            ]);

            $file = $request->file('file');
            if (count($file) > 0){
                foreach ($file as $files){
                    $originalName = $files->getClientOriginalName();
                    $fileLoc =  $files->storeAs('public/upload', $originalName);
                    $mimeType = Storage::mimeType($fileLoc);
                    $fileUpload = Files::create([
                        'course_id' => request('course_id'),
                        'lesson_id' => $lesson->id,
                        'name' => $originalName,
                        'mime' =>  $mimeType,
                        'original_filename' => $originalName,
                    ]);
                }
            }

            $user = Auth::user();
            $content = $lesson;
            $mailCategory = 'lesson';
            Mail::to('jordankgunther@gmail.com')->send(new Pending($user, $content, $mailCategory));
            Mail::to($user)->send(new Created($user, $content, $mailCategory));
    
            return redirect()->back()->with('message', 'Success! File '.$request->lesson_title.' has been created!');
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function show(Lessons $lessons)
    {
        if (Auth::user()->id == $lessons->user_id || Auth::user()->user_type == 'admin')
        {
        $user = User::where('id', $lessons->user_id)->get();
        $course = Courses::where('id', $lessons->course_id)->get();
        $file = Files::where('lesson_id', $lessons->id)->get();
        $category = Category::all();

        return view('pages.lessons.details', compact('course','user','lessons','category', 'file'));

        } else if ($lessons->status === 'active'){
            $user = User::where('id', $lessons->user_id)->get();
            $course = Courses::where('id', $lessons->course_id)->where('status', 'active')->get();
            if(count($course) > 0){
                $file = Files::where('lesson_id', $lessons->id)->get();
                $category = Category::all();
    
                return view('pages.lessons.details', compact('course','user','lessons','category', 'file'));

            }
            return redirect('/courses');

        } else {
            return redirect('/courses');
        }
    }

    /**
     * Download the specified resource.
     *
     * @param  \App\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function getDownload(Lessons $id)
    {
        $files = Files::where('lesson_id', $id->id)->get();

        $zip = new ZipArchive();
        $zip_name = time().".zip"; // Zip name
        $zip->open($zip_name,  ZipArchive::CREATE);
        foreach ($files as $file) {
            $path = storage_path("app/public/upload/".$file->name);
            if(file_exists($path)){
            $zip->addFromString(basename($path),  file_get_contents($path));
            }
        }
        $zip->close();

        return response()->download($zip_name);

    }

    public function download(Files $id)
    {
        $zip = new ZipArchive();
        $zip_name = time().".zip"; // Zip name
        $zip->open($zip_name,  ZipArchive::CREATE);

            $path = storage_path("app/public/upload/".$id->name);
            if(file_exists($path)){
            $zip->addFromString(basename($path),  file_get_contents($path));
            
        }
        $zip->close();

        return response()->download($zip_name);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function edit(Lessons $lessons)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function updateUser(LessonUpdateRequest $request, Lessons $lessons)
    {
        if (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin' || Auth::user()->user_type == 'admin') {
            if (Auth::user()->id == $request->user_id)
            {
                $user = User::where('id', $request->user_id)->get();
                $users = User::where('id', $lessons->user_id)->get();
                $author = $user[0]->first_name . ' ' . $user[0]->last_name;
                $courseName = Courses::where('id', $request->course_id)->value('course_title');
    
                Courses::where('id', $lessons->course_id)
                ->update(['user_id' => request('user_id'),'author' => $author]);

                $image = $request->file('image');
                if ($image === null )
                {
                    $filename = $lessons->image;
                } else {
                    $filename = time() . '.' . $image->getClientOriginalName();
                    $path = storage_path('app/public/image/' . $filename);
                    Image::make($image->getRealPath())->resize(1600, 900)->save($path);
                }

                $lessons->user_id = $request->user_id;
                $lessons->course_id = $request->course_id;
                $lessons->author = $author;
                $lessons->course = $courseName;
                $lessons->image = $filename;
                $lessons->lesson_title = $request->lesson_title;
                $lessons->description = $request->description;
                $lessons->status = 'pending';
                $lessons->save();

                $file = $request->file('file');
                if (count($file) > 0){
                    foreach ($file as $files){
                        $originalName = $files->getClientOriginalName();
                        $fileLoc =  $files->storeAs('public/upload', $originalName);
                        $mimeType = Storage::mimeType($fileLoc);
                        $fileUpload = Files::create([
                            'course_id' => request('course_id'),
                            'lesson_id' => $lessons->id,
                            'name' => $originalName,
                            'mime' =>  $mimeType,
                            'original_filename' => $originalName,
                        ]);
                    }
                }

                if($request->status === 'active'){
                    $approve = 'lesson';
                    $name = $lessons->lesson_title;
                    Mail::to($users)->send(new Approve($name, $approve));
                } else if($request->status === 'rejected'){
                    $mailCategory = 'lesson';
                    $reject = 'File: ' . $lessons->lesson_title . ',';
                    $name = $users[0]->first_name;
                    $messageInput = 'Please contact the IASIG Team if you have any questions.';
                    Mail::to($users)->send(new Rejected($name, $reject, $messageInput, $mailCategory));
                } else if($request->status === 'pending'){
                    $content = $lessons;
                    $mailCategory = 'lesson';
                    Mail::to('jordankgunther@gmail.com')->send(new Pending($user[0], $content, $mailCategory));
                    Mail::to($user)->send(new PendingSwitch($user, $content, $mailCategory));
                }
    
                return redirect()->back()->with('message', 'Success! Lesson '.$request->lesson_title.' has been updated!');
            }
            return redirect('/courses');
        }
    }

    public function updateAdmin(LessonUpdateRequest $request, Lessons $lessons)
    {
        if (Auth::user()->user_type == 'admin')
        {
            $user = User::where('id', $request->user_id)->get();
            $users = User::where('id', $lessons->user_id)->get();
            $author = $user[0]->first_name . ' ' . $user[0]->last_name;
            $courseName = Courses::where('id', $request->course_id)->value('course_title');

            Courses::where('id', $lessons->course_id)
            ->update(['user_id' => request('user_id'),'author' => $author]);

            $image = $request->file('image');
            if ($image === null )
            {
                $filename = $lessons->image;
            } else {
                $filename = time() . '.' . $image->getClientOriginalName();
                $path = storage_path('app/public/image/' . $filename);
                Image::make($image->getRealPath())->resize(1600, 900)->save($path);
            }

            $lessons->user_id = $request->user_id;
            $lessons->course_id = $request->course_id;
            $lessons->author = $author;
            $lessons->course = $courseName;
            $lessons->image = $filename;
            $lessons->lesson_title = $request->lesson_title;
            $lessons->description = $request->description;
            $lessons->status = $request->status;
            $lessons->save();

            $file = $request->file('file');
            if (count($file) > 0){
                foreach ($file as $files){
                    $originalName = $files->getClientOriginalName();
                    $fileLoc =  $files->storeAs('public/upload', $originalName);
                    $mimeType = Storage::mimeType($fileLoc);
                    $fileUpload = Files::create([
                        'course_id' => request('course_id'),
                        'lesson_id' => $lessons->id,
                        'name' => $originalName,
                        'mime' =>  $mimeType,
                        'original_filename' => $originalName,
                    ]);
                }
            }
            

            if($request->status === 'active'){
                $approve = 'lesson';
                $name = $lessons->lesson_title;
                Mail::to($users)->send(new Approve($name, $approve));
            } else if($request->status === 'rejected'){
                $mailCategory = 'lesson';
                $reject = 'File: ' . $lessons->lesson_title . ',';
                $name = $users[0]->first_name;
                $messageInput = 'Please contact the IASIG Team if you have any questions.';
                Mail::to($users)->send(new Rejected($name, $reject, $messageInput, $mailCategory));
            } else if($request->status === 'pending'){
                $content = $lessons;
                $mailCategory = 'lesson';
                Mail::to('jordankgunther@gmail.com')->send(new Pending($user[0], $content, $mailCategory));
                Mail::to($user)->send(new PendingSwitch($user, $content, $mailCategory));
            }

            return redirect()->back()->with('message', 'Success! Lesson '.$request->lesson_title.' has been updated!');
        }
        else
        {
            return redirect('/courses');
        }

    }

    public function approve(Lessons $lessons)
    {
        if (Auth::user()->user_type == 'admin') {
            $lessons->status = 'active';
            $lessons->save();

            $users = User::where('id', $lessons->user_id)->get();
            $approve = 'lesson';
            $name = $lessons->lesson_title;
            Mail::to($users)->send(new Approve($name, $approve));

            return redirect()->back()->with('message', 'Success! Lesson '.$lessons->lesson_title.' has been approved!');
        }
        else
        {
            return redirect('/courses');
        }

    }

    public function reject(DeleteRequest $request, Lessons $lessons)
    {
        if (Auth::user()->user_type == 'admin') {
            $lessons->status = 'rejected';
            $lessons->save();

            $mailCategory = 'lesson';
            $users = User::where('id', $lessons->user_id)->get();
            $reject = 'File: ' . $lessons->lesson_title . ',';
            $name = $users[0]->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Rejected($name, $reject, $messageInput, $mailCategory));

            return redirect()->back()->with('message', 'Success! Lesson '.$lessons->lesson_title.' has been rejected!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Lessons  $lessons
     * @return \Illuminate\Http\Response
     */
    public function destroy(DeleteRequest $request, Lessons $lessons)
    {
        if (Auth::user()->user_type == 'admin')
        {
            $lessons->delete();

            $users = User::where('id', $lessons->user_id)->get();
            $delete = 'File: ' . $lessons->lesson_title . ',';
            $name = $users[0]->first_name;
            $messageInput = $request->description;
            Mail::to($users)->send(new Deleted($name, $delete, $messageInput));

            return redirect()->back()->with('message', 'Success! Lesson '.$lessons->lesson_title.' has been deleted!');
        } 
        elseif (Auth::user()->user_type == 'advance' || Auth::user()->user_type == 'request_advance_admin') 
        {
            if (Auth::user()->id == $lessons->user_id)
            {
                $lessons->delete();

                $users = User::where('id', $lessons->user_id)->get();
                $delete = 'File: ' . $lessons->lesson_title . ',';
                $name = $users[0]->first_name;
                $messageInput = $request->description;
                Mail::to($users)->send(new Deleted($name, $delete, $messageInput));

                return redirect()->back()->with('message', 'Success! Lesson '.$lessons->lesson_title.' has been deleted!');
            }
            return redirect('/courses');
        } 
        else
        {
            return redirect('/courses');
        }
    }
}
