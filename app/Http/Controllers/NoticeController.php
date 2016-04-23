<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Notice;
use App\Http\Requests;
use View;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $notices = Notice::all();
        return View('notice.index')
                    ->with('title',"All Notices")
                    ->with('notices', $notices);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('notice.create')
                ->with('title',"Add Notice");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();
        $notice = new Notice();
        $notice->head= $data['head'];
        $notice->body = $data['body'];
        $notice->name = $data['name'];
        $notice->save();
        return redirect()->route('notice.index')->with('success','Notice Successfully Added');
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
        return View::make('notice.edit')
                ->with('title',"Edit Notice");
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
        $notice = Notice::find($id);
        $notice->head= $data['head'];
        $notice->body = $data['body'];
        $notice->name = $data['name'];
        $notice->save();
        return redirect()->route('notice.index')->with('success','Notice Successfully Added');
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
