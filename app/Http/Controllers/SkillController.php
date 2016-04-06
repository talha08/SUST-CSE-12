<?php

namespace App\Http\Controllers;


use App\Skill;
use Illuminate\Http\Request;
use App\Http\Requests;
use View;
use App\Http\Controllers\Controller;
use Redirect;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $skill = Skill::all();

        return View::make('skill.index', compact('skill'))->with('title',"Skill");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('skill.create')->with('title',"Add Your Skill");
    }

    /**
     * Dispatch a job to its appropriate handler.
     *
     * @param  mixed $job
     * @return mixed
     */


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $skill = new Skill();
        $skill->skills = $request->skills;
        $skill->experience = $request->experience;
        $skill->user_id = \Auth::user()->id;
        $skill->save();
        return Redirect::route('skill.index')->with('success','Skill Successfully Added to Your Profile');
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
        $skill = Skill::findOrFail($id);

        return View::make('skill.edit', compact('skill'))->with('title',"Edit Your Skill");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $skill =Skill::findOrFail($id);
        $skill->skills = $request->skills;
        $skill->experience = $request->experience;
        $skill->save();
        return Redirect::route('skill.index')->with('success','Skill Successfully Added to Your Profile');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Skill::destroy($id);

        return Redirect::route('skill.index')->with('success',"Skill Successfully deleted");
    }
}
