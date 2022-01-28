@extends('admin.layout.app')
@section('content')
    <div>
        <div>
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb bg-white shadow-sm py-2 mb-3 px-3">
                    <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">Dashboard</a></li>
                    <li class="breadcrumb-item active" aria-current="page">
                        data
                    </li>
                </ol>
            </nav>
        </div>
        <div class="bg-white shadow-sm px-3 py-3">
            <div class="d-flex">
                <div class="dashboard-item">
                    <div class="d-flex align-items-center">
                        <strong>Users</strong>
                        <i class="fas fa-users fa-3x"></i>
                    </div>
                    <div>
                        <strong>{{(isset($users))? count($users): ''}}</strong>
                    </div>
                </div>
                <div class="dashboard-item">
                    <div class="d-flex align-items-center">
                        <strong>Drivers</strong>
                        <i class="fas fa-car fa-3x"></i>
                    </div>
                    <div>
                      <strong>{{(isset($drivers))? count($drivers): ''}}</strong>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
