<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Movie;

class MovieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Movie::all();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return Movie::create();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $m = new Movie($request->all());
        if($m->save()){
            return ['status'=>0,'message'=>'success','movie'=>$m];
        }else{
            return ['status'=>2,'message'=>'error','movie'=>$m];
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
        return Movie::find($id);
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
        $m = Movie::find($request->input('id'));
        $m->name = $request->input('name',$m->name);
        $m->genre = $request->input('genre',$m->genre);
        $m->duration = $request->input('duration',$m->duration);
        $m->earnings = $request->input('earnings',$m->earnings);
        $m->description = $request->input('description',$m->description);
        
        if($m->save()){
            return ['status'=>0,'message'=>'success','movie'=>$m];
        }else{
            return ['status'=>2,'message'=>'error','movie'=>$m];
        }
    }

    public function delete(Request $request)
    {
        if(Movie::find($request->input('id'))->delete()){
            return ['status'=>0,'message'=>'success'];
        }else{
            return ['status'=>2,'message'=>'error'];
        }
    }

    public function all(){
        return Movie::all();
    }

    public function byName($name){
        return Movie::where('name','LIKE',"%$name%")->get();
    }
}
