$(document).ready(function(){


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

        var value = $('#subcategorySelect').find('option:selected').text();

        if(value === 'Mobile')
        {
            $.ajax({

                type : 'GET',
                url : '/admin/getMobileBrands',
                success:function (data) {

                    $('.distinct').html('<select class="form-control" name="brand" id="brand"><option value="">Select a mobile brand</option>'+data['success']+'</select>');

                }


            });
        }


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

































































});