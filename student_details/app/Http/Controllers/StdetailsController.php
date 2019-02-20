<?php

namespace App\Http\Controllers;

use App\Stdetails;
use Illuminate\Http\Request;

class StdetailsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $details=Stdetails::all();
        return view('students.index1',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('students.stud');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $st=new Stdetails([
            'name'=>$request->get('name'),
            'rollno'=>$request->get('rollno'),
            'class'=>$request->get('class'),
             'college'=>$request->get('college')
        ]);
        $st->save();
        return redirect('/ab/create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Stdetails  $stdetails
     * @return \Illuminate\Http\Response
     */
    public function show(Stdetails $stdetails)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Stdetails  $stdetails
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       $details=Stdetails::find($id);
        return view('students.editdetails',compact('details'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Stdetails  $stdetails
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
         $details= Stdetails::find($id);
                $details->name=$request->get('name');
                $details->rollno=$request->get('rollno');
                $details->class=$request->get('class');
                $details->college=$request->get('college');
                $details->save();
                return redirect('/ab');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Stdetails  $stdetails
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $details= Stdetails::find($id);
     $details->delete();
     return redirect('/ab');
    }
}
