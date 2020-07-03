<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Input;
use App\postuler;
use Illuminate\Http\Request;

class PostulerController extends Controller
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
    public function create(){

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
         $postuler=new POSTULER();
         POSTULER::create([
           'nom'=>$request->nom,
           'prenom'=>$request->prenom,
           'niveau'=>$request->niveau,
           'phone'=>$request->phone,
           'email'=>$request->email,
           'filliere'=>$request->filliere,
           'diplome'=>$request->diplome,
         ]);
         return view('index.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function show(postuler $postuler)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function edit($filliere){
        $diplome="null";
        return view('postule',compact('filliere','diplome'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, postuler $postuler)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\postuler  $postuler
     * @return \Illuminate\Http\Response
     */
    public function destroy(postuler $postuler)
    {
        //
    }
}
