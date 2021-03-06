@extends('layout')
@section('content')
            
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Dashboard</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ol>
                        <div class="row">
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-primary text-white mb-4">
                                    <div class="card-body">Employees</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{App\employee::count()}} Employees
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-3 col-md-6">
                                <div class="card bg-warning text-white mb-4">
                                    <div class="card-body">Departments</div>
                                    <div class="card-footer d-flex align-items-center justify-content-between">
                                        {{App\department::count()}} Departments
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                    </div>
                </main>
@endsection
                