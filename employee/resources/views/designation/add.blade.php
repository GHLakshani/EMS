@extends('layout')
@section('content')
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Designation</h1><br>
                        <!-- <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Designation</li>
                        </ol> -->
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Designation Management
                                <a href="{{url('designation')}}" class="btn btn-dark btn-block" style="float:right !important;">View Data</a>
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
                                <form method="post" action="{{url('designation')}}">
                                    @csrf
                                    <div class="form-floating mb-3">
                                        <select class="form-control" id="department" name="department">
                                            <option value="IT">IT</option>
                                            <option value="HR">HR</option>
                                            <option value="Accounts">Accounts</option>
                                        </select>
                                        <label for="department">Department</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="designation" name="designation" type="text" placeholder="Designation" />
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
