<style type="text/css">
    table {
        margin-top:10px;
    }
    table th {
        height:40px;
        line-height:40px;
        background-color:#DDD;
        text-align:left;
        padding-left:10px;
        padding-right:10px;
    }
    table td {
        height:40px;
        line-height:40px;
        background-color:#EEE;
        text-align:left;
        padding-left:10px;
        padding-right:10px;
    }
</style>

<h1>Relatório de Vendas</h1>

<fieldset>
    <?php
    $total = 0;
    if (isset($filters['client_name']) && !empty($filters['client_name'])) {
        echo "Cliente: <strong>".$filters['client_name']."</strong><br/>";
    } else {echo "Cliente: TODOS<br/>";}
    if (isset($filters['period1']) && !empty($filters['period2'])) {
        echo "Período: <strong>".date('d/m/Y', strtotime($filters['period1']))." a ".date('d/m/Y', strtotime($filters['period2']))."</strong><br/>";
    } else {echo "Período: TODOS<br/>";}
    if ($filters['status'] != '') {
        echo "Status Venda: <strong>".$statuses[$filters['status']]."</strong>";
    } else {echo "Status Venda: TODOS";}
    ?>
</fieldset><br/>

<table border="0" width="100%">
    <tr>
        <th>ID</th>
        <th>Nome do cliente</th>
        <th>Data</th>
        <th>Status</th>
        <th>Valor</th>
    </tr>
    <?php foreach($sales_list as $sale_item): ?>
        <tr>
            <td><?php echo $sale_item['id']; ?></td>
            <td><?php echo $sale_item['name']; ?></td>
            <td><?php echo date('d/m/Y', strtotime($sale_item['date_sale'])); ?></td>
            <td><?php
                if($sale_item['status']=='2'){
                    echo '<span style="color:red">'.$statuses[$sale_item['status']].'</span>';
                } else {
                    echo $statuses[$sale_item['status']];
                }
                ?></td>
            <td>R$ <?php echo number_format($sale_item['total_price'], 2, ',', '.'); ?></td>
        </tr>
    <?php $total += number_format($sale_item['total_price'], 2, '.', ''); ?>
    <?php endforeach; ?>
    <tr>
        <td colspan="4" style="text-align:right"><b>TOTAL</b></td>
        <td><b>R$ <?php echo number_format($total, 2, ',', '.'); ?></b></td>
    </tr>
</table>