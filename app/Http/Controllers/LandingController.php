<?php

namespace App\Http\Controllers;

use App\Landing;
use App\Category;
use App\Courses;
use App\Lessons;
use App\User;
use App\Files;
use Illuminate\Http\Request;
use App\Http\Requests\ContactRequest;

use Illuminate\Support\Facades\Mail;
use App\Mail\Contact;

class LandingController extends Controller
{
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

        return view('index', compact('course', 'author','category'));
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
    public function store(ContactRequest $request)
    {
        $email = $request->email;
        $type = 'admin';
        $messageInput = $request->message;
        Mail::to('jordankgunther@gmail.com')->send(new Contact($email, $type, $messageInput));
        $type = 'user';
        Mail::to($email)->send(new Contact($email, $type, $messageInput));

        return redirect()->back()->with('message', 'Success! Message has been sent!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function show(Landing $landing)
    {
        $category = Category::all();
        return view('pages.about.index', compact('category'));
    }
    public function sample()
    {
        $course = Courses::where('status', 'active')->get();
        $category = Category::all();
        $author = User::whereIn('user_type', ['advance', 'admin'])->get();

        return view('sample', compact('course', 'author','category'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function contact(Landing $landing)
    {
        $category = Category::all();

        return view('pages.contact.index', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function edit(Landing $landing)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function update(ContactRequest $request)
    {
        $email = $request->email;
        $type = 'admin';
        $messageInput = $request->message;
        Mail::to('jordankgunther@gmail.com')->send(new Contact($email, $type, $messageInput));
        $type = 'user';
        Mail::to($email)->send(new Contact($email, $type, $messageInput));

        return view('pages.contact.success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Landing  $landing
     * @return \Illuminate\Http\Response
     */
    public function destroy(Landing $landing)
    {
        //
    }
}
