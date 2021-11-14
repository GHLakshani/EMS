@extends('layout')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Designations</h1>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol> -->
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Designation Management
                                <a href="{{url('designation/create')}}" class="btn btn-dark btn-block" style="float:right !important;">Add Data</a>
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Employee</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>#</th>
                                            <th>Department</th>
                                            <th>Designation</th>
                                            <th>Employee</th>
                                            <th>Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        @foreach($data as $des)
                                            <tr>
                                                <td>{{$des->id}}</td>
                                                <td>{{$des->department}}</td>
                                                <td>{{$des->designation}}</td>
                                                <td>{{$des->emp_id}}</td>
                                                <td>
                                                    <a class="btn btn-info btn-sm" href="{{url('designation/'.$des->id.'/edit')}}">Update</a>
                                                    <a onclick="return confirm('Are you Sure you want to Delete?')" class="btn btn-danger btn-sm" href="{{url('designation/'.$des->id.'/delete')}}">Delete</a>
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
