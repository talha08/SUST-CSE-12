<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\WebEngRequest;
use App\Http\Requests;
use App\Model\WebEng;
use App\Http\Controllers\Controller;

class WebengController extends Controller
{



    public function index()
    {
        $webs = WebEng::all();
        return View('web.index')
            ->with('title',"Team Member List")
            ->with('webs', $webs);
    }
    
    


    public function create()
    {
        return view('web.create')
            ->with('title',"Insert Your Team Information");
    }





    public function store(WebEngRequest $request)
    {
        $data = $request->all();
        $web = new WebEng();
        $web->name1= $data['name1'];
        $web->name2 = $data['name2'];
        $web->reg1 = $data['reg1'];
        $web->reg2 = $data['reg2'];
        $web->save();
        return redirect()->route('web.show')->with('success','Your Team Information Inserted Successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('web.show')
            ->with('title',"Team Registration for Web Engineering Project");
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $web = WebEng::findOrFail($id);
        return view('web.edit')
            ->with('title',"Edit Notice")
            ->with('web', $web);
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
        $web = WebEng::find($id);
        $web->head= $data['head'];
        $web->body = $data['body'];
        $web->name = $data['name'];
        $web->save();
        return redirect()->route('web.index')->with('success','Notice Successfully Updated');
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
            WebEng::destroy($id);
            return redirect()->route('web.index')->with('success','Notice Deleted Successfully');
        } catch(Exception $ex) {
            return redirect()->route('web.index')->with('error','Something went wrong');
        }
    }
}
