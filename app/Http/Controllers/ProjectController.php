<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Project;
use App\Model;
use App\Http\Requests;
use App\Http\Requests\ProjectRequest;
use View;
use App\Http\Controllers\Controller;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::all();
        return View::make('project.index')
                    ->with('title',"All Projects")
                    ->with('projects', $projects);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return View::make('project.create')
                ->with('title',"Add Your Project");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ProjectRequest $request)
    {
        // $this->validate($request, [
        //     'name' => 'required',
        //     'url' => 'url',
        // ]);

        $project = new Project();
        $project->name = $request->name;
        $project->url = $request->url;
        $project->description = $request->description;
        $project->user_id = \Auth::user()->id;
        $project->save();
        return redirect()->route('project.index')->with('success','Project Successfully Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return User::all();
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
