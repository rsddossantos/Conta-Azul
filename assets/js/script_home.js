$(function(){
    var rel1 = new Chart(document.getElementById("rel1"), {
        type:'line',
        data:{
            labels:days_list,
            datasets:[{
                label:'Receita',
                data:revenue_list,
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
        type:'pie',
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
