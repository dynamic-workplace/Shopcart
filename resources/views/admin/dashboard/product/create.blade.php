@extends('layouts.admin.dashboard')

@section('navbar')
    @include('navbar.admin.dashboard')
@endsection

@section('content')
    <div class="container"><br>
        <div class="text-center"><h5>Upload a new product</h5></div>
    </div>
    <div class="container">
        <div class="row">
            <table class="table table-striped table-light">
                <thdead>
                    <tr>
                        <td>
                            <select class="form-control" name="category" id="categorySelect">
                                <option value="">Select a category</option>
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td>
                            <select class="form-control" name="subcategory" id="subcategorySelect">
                                <option value="">Select a subcategory</option>
                            </select>
                        </td>
                    </tr>
                </thdead>
            </table>
        </div>
    </div>
    {!! Form::open(['method'=>'POST', 'action'=>'Admin\Product\Mobile\MobileController@store']) !!}
    <div class="container"><br>
        <div class="col-sm-6 distinct">

        </div>
    </div>

    <div class="container"><br>
        <div class="text-center submit-button">

        </div>
    </div>
    {!! Form::close() !!}
@endsection

@section('scripts')
    <script type="text/javascript" src="{{asset('js/ProductManagement.js')}}"></script>
@endsection