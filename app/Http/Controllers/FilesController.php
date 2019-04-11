<?php

namespace App\Http\Controllers;

use App\Files;
use Illuminate\Http\Request;
use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Response;
use DB;

class FilesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $files = Files::all();
  		return view('files.file', compact('files'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function download($file)
    {
      return response()->download(storage_path("app/upload/{$file}"));
        // view("files.download", compact('$download'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function store(Request $request)
     {
        //possibly rename controller or model because of it's resemblence of the keyword file
        $files = Files::all();
        if($request->hasFile('file') && $request->file('file')->isValid()){
            //storing the input field with the name "file" in $file.
            $file = $request->file('file');
            //using laravel method to get filename from the inputfield, in case we add a feature to allow the user to provide the name
            $originalName = $file->getClientOriginalName();
            //storing file in public/upload saving as $originalName
            $fileLoc =  $request->file->storeAs('/upload/', $originalName);
            //getting mimetype from the file stored with the class storage using method mimetype of the file above
            $mimeType = Storage::mimeType($fileLoc);
            //creating a new file entry
            $entry = new Files();
            //storing mimetype of file
            $entry->mime = $mimeType;
            //storing filename of file
            $entry->original_filename =  $originalName;
            //storing name as ogname, but may change to allow users to name file
            $entry->name = $originalName;
            //saving and making entry to the DB
            $entry->save();
        }else{
            //if statement checks if file is a file and is valid, otherwise no file to upload
            return "Failed to upload";
        }
        return back(); compact('files');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function show(Files $files)
    {
        //
        return "showing files"; compact('$files');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function edit(Files $files)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Files $files)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Files  $files
     * @return \Illuminate\Http\Response
     */
    public function destroy(Files $files)
    {
        //
    }
}
