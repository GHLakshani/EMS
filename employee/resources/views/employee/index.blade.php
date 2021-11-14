@extends('layout')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Employees</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Employee Management
                                <a href="{{url('employee/create')}}" class="btn btn-dark btn-block" style="float:right !important;">Add Data</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Birthday</th>
                                            <th>Address 1</th>
                                            <th>Address 2</th>
                                            <th>Contact No 1</th>
                                            <th>Contact No 2</th>
                                            <th>NIC</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Birthday</th>
                                            <th>Address 1</th>
                                            <th>Address 2</th>
                                            <th>Contact No 1</th>
                                            <th>Contact No 2</th>
                                            <th>NIC</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $emp)
                                            <tr>
                                                <td>{{$emp->id}}</td>
                                                <td>{{$emp->first_name}}</td>
                                                <td>{{$emp->last_name}}</td>
                                                <td>{{$emp->dob}}</td>
                                                <td>{{$emp->address_1}}</td>
                                                <td>{{$emp->address_2}}</td>
                                                <td>{{$emp->contact_no_1}}</td>
                                                <td>{{$emp->contact_no_2}}</td>
                                                <td>{{$emp->nic}}</td>
                                                <td>{{$emp->department}}</td>
                                                <td>{{$emp->designation}}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{url('employee/'.$emp->id.'/edit')}}">Update</a>
                                                    <a onclick="return confirm('Are you Sure you want to Delete?')" class="btn btn-danger btn-sm" href="{{url('employee/'.$emp->id.'/delete')}}">Delete</a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
