@extends('layout')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Employee</h1><br>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Designation</li>
                        </ol> -->
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Employee Management
                                <a href="{{url('employee')}}" class="btn btn-dark btn-block" style="float:right !important;">View Data</a>
                            </div>
                            <div class="card-body">
                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <p class="text-danger">{{$error}}</p>
                                @endforeach
                            @endif

                            @if(Session::has('error'))
                                <p class="text-danger">{{session('error')}}</p>
                            @endif
                                <form method="post" action="{{url('employee')}}">
                                    @csrf
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="first_name" name="first_name" type="text" placeholder="Enter your first name" />
                                                <label for="first_name">First name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="last_name" name="last_name" type="text" placeholder="Enter your last name" />
                                                <label for="last_name">Last name</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="dob" name="dob" type="date" placeholder="Bate of Birth" />
                                        <label for="dob">Bate of Birth</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="address_1" name="address_1" type="text" placeholder="Address 1" />
                                        <label for="address_1">Address 1</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="address_2" name="address_2" type="text" placeholder="Address 2" />
                                        <label for="address_2">Address 2</label>
                                    </div>
                                    <div class="row mb-3">
                                        <div class="col-md-6">
                                            <div class="form-floating mb-3 mb-md-0">
                                                <input class="form-control" id="contact_no_1" name="contact_no_1" type="text" placeholder="Enter Contact No 1" />
                                                <label for="contact_no_1">Contact No 1</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input class="form-control" id="contact_no_2" name="contact_no_2" type="text" placeholder="Enter Contact No 2" />
                                                <label for="contact_no_2">Contact No 2</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="nic" name="nic" type="text" placeholder="NIC" />
                                        <label for="nic">NIC</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="department" name="department">
                                            <option value="option_select" disabled selected>Department</option>
                                            @foreach($data as $des)
                                                <option value="{{ $des->department }}" >{{ $des->department}}</option>
                                            @endforeach
                                        </select>
                                        <label for="department">Department</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="designation" name="designation">
                                            <option value="option_select" disabled selected>Designations</option>
                                            @foreach($data as $des)
                                                <option value="{{ $des->designation }}" >{{ $des->designation}}</option>
                                            @endforeach
                                        </select>
                                        <label for="designation">Designation</label>
                                    </div>
                                    <div class="mt-4 mb-0">
                                        <div class="d-grid"><input class="btn btn-primary btn-block" type="submit" value="Submit"/></div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>
@endsection
