@extends('layouts.admin.dashboard')

@section('navbar')
    @include('navbar.admin.dashboard')
@endsection

@section('content')
    <div class="container">
        <div class="text-lg-center title">
            <h3>All Subcategories</h3>
        </div>
    </div>
    <div class="container"><br>
        <div class="col-sm-10">
            <div class="input-group">
                <div class="input-group-prepend">
                    <label class="input-group-text" for="subcategoryList">Category</label>
                </div>
                <select class="custom-select" id="subcategoryList">
                    <option selected>Choose...</option>
                    @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
            </div>
        </div>
        <div class="col-sm-10"><br>
            <table class="table table-striped table-light">
                <thead>
                <tr>
                    <th>#Id</th>
                    <th>Subategory Name</th>
                    <th>Created</th>
                    <th>Updated</th>
                </tr>
                </thead>
                <tbody>

                </tbody>
            </table>
        </div>
    </div>

@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/SubcategoryManagement.js')}}"></script>
@endsection