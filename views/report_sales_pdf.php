<style type="text/css">
    th { text-align:left; }
</style>

<h1>Relatório de Vendas</h1>

<fieldset>
    <?php
    if (isset($filters['client_name']) && !empty($filters['client_name'])) {
        echo "Filtrado com cliente: ".$filters['client_name']."<br/>";
    }
    if (isset($filters['period1']) && !empty($filters['period2'])) {
        echo "No período: ".date('d/m/Y', strtotime($filters['period1']))." a ".date('d/m/Y', strtotime($filters['period2']))."<br/>";
    }
    if ($filters['status'] != '') {
        echo "Filtrado com status: ".$statuses[$filters['status']];
    }
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
    <?php endforeach; ?>
</table>