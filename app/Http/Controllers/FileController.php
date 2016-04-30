<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\FileLink;
use App\Http\Requests;
use App\Http\Requests\FileRequest;
use App\Http\Controllers\Controller;

class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $files = FileLink::all();
        return View('file.index')
                    ->with('title',"All files")
                    ->with('files', $files);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create')
                ->with('title',"Upload/Add File");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(FileRequest $request)
    {
        $data = $request->all();
        $file_link = $request->input['file_link'];
        if ($file_link == null ) {
            $fileP = $request->file('thisfile');
            $destination = public_path().'/uploads/files';
            $filename = time().'_'.$data['file_name'].'.'.$fileP->getClientOriginalExtension();
            $fileP->move($destination, $filename);
            $file_link = '/uploads/files/'.$filename;
        }
        $file = new FileLink();
        $file->file_type= $data['file_type'];
        $file->file_name = $data['file_name'];
        $file->file_link = $file_link;
        $file->save();
        return redirect()->route('file.index')->with('success','File Successfully Added');
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
        $file = FileLink::findOrFail($id);
        return view('file.edit')
                ->with('title',"Edit a File")
                ->with('file', $file);
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
        $data = $request->all();
        $file_link = $request->input['file_link'];
        if ($file_link == null ) {
            $fileP = $request->file('thisfile');
            $destination = public_path().'/uploads/files';
            $filename = time().'_'.$data['file_name'].'.'.$fileP->getClientOriginalExtension();
            $fileP->move($destination, $filename);
            $file_link = '/uploads/files/'.$filename;
        }
        $file = FileLink::findOrFail($id);
        $file->file_type= $data['file_type'];
        $file->file_name = $data['file_name'];
        $file->file_link = $file_link;
        $file->save();
        return redirect()->route('file.index')->with('success','File Successfully Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            FileLink::destroy($id);
            return redirect()->route('file.index')->with('success','File Successfully Erased');
        } catch(Exception $ex) {
            return redirect()->route('file.index')->with('success','Something went wrong');
        }
    }
}
