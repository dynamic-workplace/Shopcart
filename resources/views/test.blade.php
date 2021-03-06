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
        <div class="form-group">
        <input class="form-control" type="text" id="test" name="test"/>
        </div>
        <div class="form-group">
            <input class="form-control" type="text" id="another" name="test2"/>
        </div>
    </div>

@endsection


@section('styles')
    <link href="{{asset('css/dashboard-home.css')}}" rel="stylesheet">
@endsection
@section('scripts')
    <script>
        $(document).ready(function () {

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });


            // $('#test').autocomplete({
            //
            //     source: '/check'
            //
            // });

            $(document).on("focus",'#test',function(e) {
                if ( !$(this).data("autocomplete") ) { // If the autocomplete wasn't called yet:
                    $(this).autocomplete({             //   call it
                        source: '/check'     //     passing some parameters
                    });
                }
            });

            $('#another').autocomplete({

                source: '/break'

            });

            // $("#test").keyup(function () {
            //     var value = $(this).val();
            //     if(value !== '')
            //     {
            //         $.ajax({
            //
            //             type : 'POST',
            //             url : '/test',
            //             data : {queue :value},
            //             success:function(data){
            //
            //                 $('#resultList').fadeIn();
            //                 $("#resultList").html(data['result']);
            //
            //             }
            //
            //         });
            //     }
            //     else
            //     {
            //         $('#resultList').fadeOut();
            //     }
            //
            // });
            //
            // $(document).on('click','#resultList > li', function(){
            //
            //     $("#test").val($(this).text());
            //     $('#resultList').fadeOut();
            //
            // });
        });
    </script>
@endsection