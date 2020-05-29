$(function(){
    $('.tabitem').on('click', function(){
        $('.activetab').removeClass('activetab');
        $(this).addClass('activetab');
        var item = $('.activetab').index();
        $('.tabbody').hide();
        $('.tabbody').eq(item).show();
    });
    $('#busca').on('focus', function(){
        $(this).animate({
            width:'250px'
        }, 'fast');
    });
    $('#busca').on('blur', function(){
        if($(this).val() == '') {
            $(this).animate({
                width: '100px'
            }, 'fast');
        }
    });
    $('#busca').on('keyup', function(){
        var datatype = $(this).attr('data-type');
        var q = $(this).val();
        if(datatype != '') {
            $.ajax({
                url:BASE_URL+'/ajax/'+datatype,
                type:'GET',
                data:{q:q},
                dataType:'json',
                success:function(json) {

                }
            });
        }
    });

});