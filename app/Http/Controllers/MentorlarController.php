<?php

namespace App\Http\Controllers;

use App\Models\mentorlar;
use Illuminate\Http\Request;

class MentorlarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mentor = mentorlar::all();
        return view('admin.mentor.index',compact('mentor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.mentor.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {   
        $request = $this->validation($request);
        $store = mentorlar::create($request()->input());
        if($store){
            return redirect()->route('admin.mentor.index');
        }
        return redirect()->back();
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\mentorlar  $mentorlar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mentor = mentorlar::all()->where('id',$id);
        return view('admin.mentor.edit',compact('mentor'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\mentorlar  $mentorlar
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $uploaded = mentorlar::find($id);
        $uploaded = $uploaded->update($request->input());

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\mentorlar  $mentorlar
     * @return \Illuminate\Http\Response
     */
    public function destroy(mentorlar $mentorlar)
    {
        //
    }
    public function validation($request){
        $request=$request->validate([
            'name'=>'string|min:3|max:50',
            'desc'=>'string|min:10|max:255',
            'phone'=>'string|min:7|max:12'
        ]);
        return $request;
    } 
}
