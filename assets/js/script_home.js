$(function(){
    var simulation = [];
    for(i=0; i<30; i++) {
        simulation.push(Math.round(Math.random()*1000));
    }
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
                    // Dados de COMPRAS simulado, para efeito de visualização do gráfico
                    data:expenses_list,
                    fill:false,
                    backgroundColor:'#d11507',
                    borderColor:'#d11507'
                }]
        }
    });

    var rel2 = new Chart(document.getElementById("rel2"), {
        type:'pie',
        data:{
            labels:status_name_list,
            datasets:[{
                label:['Número de Vendas'],
                data: status_list,
                backgroundColor: ['#ffd700', '#224074', '#d11507'],
            }]
        }
    });


});
