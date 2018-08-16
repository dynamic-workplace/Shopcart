$(document).ready(function(){


    function capitalizeFirstLetter(string) {
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
        var value = text.replace(" ", "");

            $.ajax({

                type : 'GET',
                url : '/admin/product/'+value.toLowerCase(),
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

































































});