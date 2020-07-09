$(function(){
    var rel1 = new Chart(document.getElementById("rel1"), {
        type:'line',
        data:{
            labels:['02/07', '03/07', '04/07', '05/07'],
            datasets:[{
                label:'Receita',
                data:[5, 6, 9, 3],
                fill:false,
                backgroundColor:'#224074',
                borderColor:'#224074'
            },
                {
                    label:'Despesas',
                    data:[4, 7, 4, 8],
                    fill:false,
                    backgroundColor:'#d11507',
                    borderColor:'#d11507'
                }]
        }
    });

    var rel2 = new Chart(document.getElementById("rel2"), {
        type:'bar',
        data:{
            labels:['Pago', 'Cancelado', 'Aguardando Pgto.'],
            datasets:[{
                label:['Número de Vendas'],
                data: [7, 4, 6],
                backgroundColor: ['#224074', '#d11507', '#ffd700'],
            }]
        }
    });


});
