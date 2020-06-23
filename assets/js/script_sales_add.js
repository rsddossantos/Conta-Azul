function selectClient(obj) {
    var id = $(obj).attr('data-id');
    var name = $(obj).html();
    $('.searchresults').hide();
    $('#client_name').val(name);
    $('input[name=client_id]').val(id);
}

$(function(){
    $('input[name=total_price]').mask('000.000.000,00',{reverse:true, placeholder:"0,00"});

    $('.add_button').on('click', function(e){
        e.preventDefault();
        var name = $('#client_name').val();
        if(name != '' && name.length >= 4) {
            if(confirm('Deseja cadastrar o cliente: '+name.toUpperCase()+' ?')) {
                $.ajax({
                    url:BASE_URL+'/ajax/add_client',
                    type:'POST',
                    data:{name:name},
                    dataType:'json',
                    success:function(json) {
                        $('.searchresults').hide();
                        $('input[name=client_id]').val(json.id);
                        alert('O cliente: '+name.toUpperCase()+' de código: '+json.id+' foi adicionado com sucesso! Assim que possível atualize o cadastro com as informações adicionais')
                    }
                });
            }
        }
    });

    $('#client_name').on('blur', function(){
        setTimeout(function(){
            $('.searchresults').hide();
        },500);
    });
    $('#client_name').on('keyup', function(){
        var datatype = $(this).attr('data-type');
        var q = $(this).val();
        if(datatype != '') {
            $.ajax({
                url:BASE_URL+'/ajax/'+datatype,
                type:'GET',
                data:{q:q},
                dataType:'json',
                success:function(json) {
                    if( $('.searchresults').length == 0 ) {
                        $('#client_name').after('<div class="searchresults"></div>')
                    }
                    $('.searchresults').css('left', $('#client_name').offset().left+'px');
                    $('.searchresults').css('top', $('#client_name').offset().top+$('#client_name').height()+3+'px');
                    var html = '<div class="si" style="font-style:italic;font-size:13px;color:#a9a9a9">Primeiros 10 registros...</div>';
                    for(var i in json) {
                        html += '<div class="si"><a href="javascript:;" onclick="selectClient(this)" data-id="'+json[i].id+'">'+json[i].name+'</a></div>';
                    }
                    $('.searchresults').html(html);
                    $('.searchresults').show();
                }
            });
        }
    });

});