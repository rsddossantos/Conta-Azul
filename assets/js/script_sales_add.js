function selectClient(obj) {
    var id = $(obj).attr('data-id');
    var name = $(obj).html();
    $('.searchresults').hide();
    $('#client_name').val(name);
    $('input[name=client_id]').val(id);
}
function addProd(obj) {
    $('#add_prod').val('');
    $('.searchresults').hide();
    var id = $(obj).attr('data-id');
    var name = $(obj).attr('data-name');
    var price = $(obj).attr('data-price');
    if( $('input[name="quant['+id+']"]').length == 0 ) {
        var tr = '<tr>' +
            '<td>' + name + '</td>' +
            '<td style="text-align:right"><input type="number" name="quant[' + id + ']" class="p_quant" value="1" onchange="updateSubtotal(this)" data-price="' + price + '" /></td>' +
            '<td>R$ ' + parseFloat(price).toFixed(2) + '</td>' +
            '<td class="subtotal">R$ ' + parseFloat(price).toFixed(2) + '</td>' +
            '<td style="text-align:center"><a class="button button_small" href="javascript:;" onclick="excluirProd(this)">Excluir</a></td>' +
            '<tr>';
        $('#products_table').append(tr);
    } else {
        alert('Produto já existe, apenas adicione a quantidade.');
    }
    updateTotal();
}
function excluirProd(obj) {
    $(obj).closest('tr').remove();
    updateTotal();
}
function updateSubtotal(obj) {
    var quant = $(obj).val();
    if (quant <= 0) {
        $(obj).val(1);
        quant = 1;
    }
    var price = $(obj).attr('data-price');
    var subtotal = parseFloat(price * quant).toFixed(2);
    $(obj).closest('tr').find('.subtotal').html('R$ '+subtotal);
    updateTotal();
}
function updateTotal() {
    var total = 0;
    for(var q=0; q<$('.p_quant').length; q++) {
        var quant = $('.p_quant').eq(q);
        var price = quant.attr('data-price');
        var subtotal = parseFloat(price) * parseInt(quant.val());
        total += subtotal;
    }
    $('input[name=total_price]').val(total.toFixed(2));
}

$(function(){
    $('.add_button').on('click', function(e){
        e.preventDefault();
        var name = $('#client_name').val();
        if(name != '' && name.length >= 4) {
            if(confirm('Deseja cadastrar o cliente '+name.toUpperCase()+'?')) {
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

    $('#add_prod').on('blur', function(){
        setTimeout(function(){
            $('.searchresults').hide();
        },500);
    });
    $('#add_prod').on('keyup', function(){
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
                        $('#add_prod').after('<div class="searchresults"></div>')
                    }
                    $('.searchresults').css('left', $('#add_prod').offset().left+'px');
                    $('.searchresults').css('top', $('#add_prod').offset().top+$('#add_prod').height()+3+'px');
                    var html = '<div class="si" style="font-style:italic;font-size:13px;color:#a9a9a9">Primeiros 10 registros...</div>';
                    for(var i in json) {
                        price = parseFloat(json[i].price).toFixed(2);
                        html += '<div class="si"><a href="javascript:;" onclick="addProd(this)" data-id="'+json[i].id+'" data-price="'+json[i].price+'" data-name="'+json[i].name+'">'+json[i].name+' - R$ '+price+'</a></div>';
                    }
                    $('.searchresults').html(html);
                    $('.searchresults').show();
                }
            });
        }
    });


});