@extends('layouts.admin.dashboard')

@section('navbar')
    @include('navbar.admin.dashboard')
@endsection

@section('content')
    <div class="container">
        <div class="text-lg-center title">
            <h1>Welcome to Dashboard</h1>
        </div>
        <div class="text-lg-center subtitle">
            <h4>A Simple Management for Shopcart</h4>
        </div>
    </div>
@endsection


@section('styles')
    <link href="{{asset('css/dashboard-home.css')}}" rel="stylesheet">
@endsection
@section('scripts')
@endsection