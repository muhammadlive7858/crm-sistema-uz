<?php

namespace App\Http\Controllers;

use App\Models\kurslar;
use App\Models\mentorlar;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class KurslarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kurs = kurslar::all();
        return view('admin/kurs/index',compact('kurs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($request)
    {   
        $mentor = mentorlar::all();
        return view('admin.kurs.create',compact('mentor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        
        $request = $this->validation($request);
        kurslar::create([
            'name'=>$request('name'),
            'mentor_id'=>$request('mentor_id'),
            'desc'=>$request('desc'),
            'vaqt'=>$request('vaqt')
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\kurslar  $kurslar
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {   
        $uploaded = kurslar::all()->where('id',$id);
        return view('admin/kurs/edit',compact('$uploaded'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\kurslar  $kurslar
     * @return \Illuminate\Http\Response
     */
    public function update($id,$request)
    {
        $request = $this->validation($request);
        $uploaded = kurslar::find($id);
        $uploaded->update(
            $request->input()
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\kurslar  $kurslar
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $delete = kurslar::find($id);
        $delete->delete();
        return redirect()->route('admin.kurs.index');
    }

    public function validation($request){
        $request->validate([
            'name'=>'string|min:3|max:25',
            'mentor_id'=>'integer',
            'desc'=>'string|min:10|max:255'
        ]);
        return $request;
    }
}
