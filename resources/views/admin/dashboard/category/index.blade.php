@extends('layouts.admin.dashboard')

@section('navbar')
    @include('navbar.admin.dashboard')
@endsection

@section('content')
    <div class="container">
        <div class="text-lg-center title">
            <h3>All Categories</h3>
        </div>
    </div>
    <div class="container">
        <table class="table table-striped table-light">
            <thead>
            <tr>
                <th>#Id</th>
                <th>Category Name</th>
                <th>Created</th>
                <th>Updated</th>
            </tr>
            </thead>
            <tbody>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                    <td>{{$category->created_at?$category->created_at->diffForHumans():'No Record Available'}}</td>
                    <td>{{$category->updated_at?$category->updated_at->diffForHumans():'No Record Available'}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('scripts')
@endsection