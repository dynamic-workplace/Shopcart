$(document).ready(function(){

    var value;
    function jsUcFirst(string) {
        return string.charAt(0).toUpperCase() + string.slice(1);
    }

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $("#categorySelect").change(function(){


        var id = $('#categorySelect').val();
        $('#subcategorySelect > option').slice(1).remove();

        $.ajax({
            type : 'GET',
            url : '/admin/subcategory/'+id+'/edit',
            success : function(data) {
                $('#subcategorySelect').append(data['subcategories']);
            }
        });


    });



    $('#subcategorySelect').change(function () {

        var text = $('#subcategorySelect').find('option:selected').text();
        value = text.replace(/\ /g, '').toLowerCase();


        //$('.distinct').html(value);

        $('#uploadForm').attr("action", value);


            $.ajax({

                type : 'GET',
                url : '/admin/product/process/'+value,
                success:function (data) {
                    $('.distinct').html(data['form']);
                }
            });

    });


    $('.distinct').on('change','#brand',function (){
        if ($(this).val()!=='')
        {
            $('.submit-button').html('<button type="submit" class="btn btn-primary">Proceed</button>');
        }
        else
        {
            $('.submit-button').html('');
        }
    });


    $(document).on("focus",'#name',function(e) {
        if ( !$(this).data("autocomplete") ) {
            $(this).autocomplete({
                source: value+'/create'
            });
        }
    });


    $(document).on("focus",'#type',function(e) {
        if ( !$(this).data("autocomplete") ) {
            $(this).autocomplete({
                source: value+'/create'
            });
        }
    });



























































});