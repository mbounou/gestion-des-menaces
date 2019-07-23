<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\FileRequest;
use App\File;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Storage;

class UploadFileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){
         $this->middleware('auth');
     }


    public function index()
    {
        return view('upload_file');
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
    public function store(FileRequest $request)
    {
        dd(asset('storage/1563555697fichierLog.log'));
        $data = $request->all();
        $uploadedFile = $request->file('file_name');
        $filename = time().$uploadedFile->getClientOriginalName();
        $path = Storage::disk('files')->getAdapter()->getPathPrefix();
        
        Storage::disk('files')->putFileAs(
            null,
            $uploadedFile,
            $filename
        );

        $upload = new File();
        $upload->file_name = $path."".$filename;
        $upload->user_id = Auth::user()->id;
        $upload->save();

        return view('menaces.index');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
