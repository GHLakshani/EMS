<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\department;

class DesignationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=department::all();
        return view('designation.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('designation.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate{[
            'department'=>'required',
            'designation'=>'required'
        ]};

        $department = new department;
        $department->department=$request->department;
        $department->designation=$request->designation;

        $department->save();

        return redirect('designation/create')->with('success','Data Has been inserted Successfully!');
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
        $data=department::find($id);
        return view('designation.update',['data'=>$data]);
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
        $request->validate{[
            'department'=>'required',
            'designation'=>'required'
        ]};

        $department = department::find($id);
        $department->department=$request->department;
        $department->designation=$request->designation;

        $department->save();

        return redirect('designation/'.$id.'/edit')->with('success','Data Has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $department = department::where('id',$id)->delete();
        return redirect('designation/');
    }
}
