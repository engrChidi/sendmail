<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('training/hom');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('training/hom');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$fname="";
        if($request->hasfile('filename'))
        {
            $file = $request->file('filename');
            $fname=time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $fname);
        }
        */
        $passport= new \App\training();
        $passport->Name=$request->get('name');
        $passport->Email=$request->get('email');
        $passport->Phone=$request->get('phone');
        $passport->Gender=$request->get('gender');
        $passport->State=$request->get('state');
        $passport->LGA="kk";
        $passport->Town="kk";
        $passport->Course=$request->get('course');
        $passport->Comment="kk";
        $passport->Passport="kk";
        $passport->save();

        return redirect('training')->with('success', 'Registration Completed. Admin will contact you soon');
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
