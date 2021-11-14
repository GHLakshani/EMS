<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\employee;
use App\department;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data=employee::all();
        return view('employee.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data=department::all();
        return view('employee.add',['data'=>$data]);
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
            'first_name'=>'required',
            'birthday'=>'required',
            'address_1'=>'required',
            'contact_no_1'=>'required',
            'nic'=>'required',
            'department'=>'required',
            'designation'=>'required'
        ]};

        $employee = new employee;
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->dob=$request->dob;
        $employee->address_1=$request->address_1;
        $employee->address_2=$request->address_2;
        $employee->contact_no_1=$request->contact_no_1;
        $employee->contact_no_2=$request->contact_no_2;
        $employee->nic=$request->nic;
        $employee->department=$request->department;
        $employee->designation=$request->designation;

        $employee->save();

        return redirect('employee/create')->with('success','Data Has been inserted Successfully!');
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
        $data=employee::find($id);
        $dx=department::all();
        return view('employee.update',['data'=>$data , 'dx'=>$dx] );
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
            'first_name'=>'required',
            'birthday'=>'required',
            'address_1'=>'required',
            'contact_no_1'=>'required',
            'nic'=>'required',
            'department'=>'required',
            'designation'=>'required'
        ]};

        $employee = employee::find($id);
        $employee->first_name=$request->first_name;
        $employee->last_name=$request->last_name;
        $employee->dob=$request->dob;
        $employee->address_1=$request->address_1;
        $employee->address_2=$request->address_2;
        $employee->contact_no_1=$request->contact_no_1;
        $employee->contact_no_2=$request->contact_no_2;
        $employee->nic=$request->nic;
        $employee->department=$request->department;
        $employee->designation=$request->designation;

        $employee->save();

        return redirect('employee/'.$id.'/edit')->with('success','Data Has been Updated Successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = employee::where('id',$id)->delete();
        return redirect('employee/');
    }
}
