<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Projects;
use App\Models\UrlsList;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $validator = \Validator::make($request->all(),[
            'name'=>'required',
            'homepage'=>'required',
            'urlsList'=>'required',
        ],[
            'reason.required'=>'Enter project name',
            'homepage.required'=>'Enter project homepage',
            'urlsList.required'=>'Enter project urls list',
        ]);

       if( !$validator->passes() ){
           return response()->json(['status'=>0,'msg'=>$validator->errors()->toArray()]);
       }else{
            
            $project = new Projects();
            $project->user_id = Auth::id();
            $project->name = $request->input('name');
            $project->homepage = $request->input('homepage');
            $projectState = $project->save();
            
            $urlsList = explode("\n",$request->input('urlsList'));
            $urlsListState = false;
            foreach($urlsList as $url){
                    $urlF = new UrlsList();
                    $urlF->project_id = $project->id;
                    $urlF->url = $url;
                    if($urlF->save()){
                        $urlsListState = true;
                    }else{
                        $urlsListState = false;
                    }
                    
            }

            if($projectState && $urlsListState){
                return response()->json(['status'=>1,'msg'=>'Project created successfully']);
            }else{
                return response()->json(['status'=>0,'msg'=>'There was an error while creating a new project']);
            }
       }
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
