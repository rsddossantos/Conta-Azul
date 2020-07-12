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
                    data:[400, 700, 400, 800,1500,1000,100,0,0,0,0,0,0,0,0,0,1200,1900,1400,0,0,400,0,0,0,0,500,0,0,500],
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
