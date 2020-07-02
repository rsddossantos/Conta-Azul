$(function(){
    $('input[name=price]').mask('000.000.000,00',{reverse:true, placeholder:"0,00"});
    $('input[name=price]').on('blur', function(){
        if ( $(this).val()<=0 ) {
            alert("O preço deve ser maior que zero!");
            $(this).val('');
        }
    });
});