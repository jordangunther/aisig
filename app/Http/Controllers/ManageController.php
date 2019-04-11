<?php

namespace App\Http\Controllers;

use Auth;

use App\Manage;
use App\Courses;
use App\Lessons;
use App\User;
use App\Files;
use App\Category;

use Illuminate\Http\Request;
use App\Http\Requests\UploadRequest;
use App\Http\Requests\LessonRequest;
use App\Http\Requests\SearchRequest;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class ManageController extends Controller
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
    public function courses()
    {
        if (Auth::user()->user_type == 'admin') {
            $course = Courses::all();
            $user = User::all();
            $category = Category::all();
        
            return view('pages.manage.courses', compact('course','user','category'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function pendingCourses()
    {
        if (Auth::user()->user_type == 'admin') {
            $course = Courses::where('status', 'pending')->get();
            $user = User::all();
            $category = Category::all();
        
            return view('pages.manage.pendingCourses', compact('course','user','category'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function lessons()
    {
        if (Auth::user()->user_type == 'admin') {
            $lesson = Lessons::all();
            $course = Courses::all();
            $user = User::all();
        
            return view('pages.manage.lessons', compact('lesson','course','user'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function pendingLessons()
    {
        if (Auth::user()->user_type == 'admin') {
            $lesson = Lessons::where('status', 'pending')->get();
            $course = Courses::all();
            $user = User::all();
        
            return view('pages.manage.pendingLessons', compact('lesson','course','user'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function users()
    {
        if (Auth::user()->user_type == 'admin') {
            $user = User::all();
        
            return view('pages.manage.users', compact('user'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function pendingAdvance()
    {
        if (Auth::user()->user_type == 'admin') {
            $user = User::where('user_type', 'request_advance')->get();
        
            return view('pages.manage.pendingAdvanced', compact('user'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    public function pendingAdmin()
    {
        if (Auth::user()->user_type == 'admin') {
            $user = User::where('user_type', 'request_advance_admin')->orWhere('user_type', 'request_basic_admin')->get();
        
            return view('pages.manage.pendingAdmin', compact('user'));
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    /**
     * Search a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function searchCourses(SearchRequest $request)
    {
        if (Auth::user()->user_type == 'admin') {
            $searchTerm = $request->search;
            $course = Courses::where('course_title', 'LIKE', '%'.$searchTerm.'%')->orWhere('category', 'LIKE', '%'.$searchTerm.'%')->orWhere('status', 'LIKE', '%'.$searchTerm.'%')->orWhere('author', 'LIKE', '%'.$searchTerm.'%')->get();
            $user = User::all();
            $category = Category::all();
        
            return view('pages.manage.searchCourses', compact('course','user','category','searchTerm'));
        }
        else
        {
            return redirect('/courses');
        }
    }

    public function searchLessons(SearchRequest $request)
    {
        if (Auth::user()->user_type == 'admin') {
            $searchTerm = $request->search;
            $lesson = Lessons::where('lesson_title', 'LIKE', '%'.$searchTerm.'%')->orWhere('course', 'LIKE', '%'.$searchTerm.'%')->orWhere('status', 'LIKE', '%'.$searchTerm.'%')->orWhere('author', 'LIKE', '%'.$searchTerm.'%')->get();
            $user = User::all();
            $course = Courses::all();
            $category = Category::all();
        
            return view('pages.manage.searchLessons', compact('lesson','user','category','course','searchTerm'));
        }
        else
        {
            return redirect('/courses');
        }
    }

    public function searchUsers(SearchRequest $request)
    {
        if (Auth::user()->user_type == 'admin') {
            $searchTerm = $request->search;
            $user = User::where('email', 'LIKE', '%'.$searchTerm.'%')->orWhere('user_type', 'LIKE', '%'.$searchTerm.'%')->orWhere('first_name', 'LIKE', '%'.$searchTerm.'%')->orWhere('last_name', 'LIKE', '%'.$searchTerm.'%')->get();
        
            return view('pages.manage.searchUsers', compact('user','searchTerm'));
        }
        else
        {
            return redirect('/courses');
        }
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
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function show(User $users)
    {
        if (Auth::user()->id == $users->id) {
            $users = User::where('id', $users->id)->get();

            return view('pages.manage.accountSettings', compact('users'));

        }
        else
        {
            return redirect('/courses');
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function edit(Manage $manage)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Manage $manage)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Manage  $manage
     * @return \Illuminate\Http\Response
     */
    public function destroy(Manage $manage)
    {
        //
    }
}
