<?php

namespace App\Http\Controllers;

use Auth;

use App\Category;
use App\Courses;
use App\Lessons;
use App\User;
use App\Files;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
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
        $category = Category::all();
        
        return view('pages.category.index', compact('category'));
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
    public function store(CategoryRequest $request)
    {
        if (Auth::user()->user_type == 'admin') {
            $category = Category::create([
                'name' => request('name'),
            ]);
    
            return redirect()->back()->with('message', 'Success! Category '.$request->name.' has been created!');
        }
        else
        {
            return redirect('/courses');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        $categoryName = $category->name;
        $course = Courses::where('category', $categoryName)->where('status', 'active')->get();
        $user = User::all();

        return view('pages.category.details', compact('course', 'user','category'));
    }

    public function showFiles(Category $category)
    {
        $categoryName = $category->name;
        $course = Courses::where('status', 'active')->get();
        $lesson = Lessons::where('status', 'active')->get();
        $user = User::all();

        return view('pages.category.fileDetails', compact('course', 'lesson', 'user','category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, Category $category)
    {
        if (Auth::user()->user_type == 'admin') {
            Courses::where('category', $category->name)
          ->update(['category' => request('name')]);

            $category->name = $request->name;

            $category->save();

            return redirect()->back()->with('message', 'Success! Category '.$request->name.' has been updated!');
        }
        else
        {
            return redirect('/courses');
        }
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        if (Auth::user()->user_type == 'admin') {
            $category->delete();

            return redirect()->back()->with('message', 'Success! Category '.$category->name.' has been deleted!');
        }
        else
        {
            return redirect('/courses');
        }
        
    }
}
