<h1>Vendas</h1>

<table border="0" width="100%">
    <tr>
        <th>Nome do cliente</th>
        <th>Data</th>
        <th>Status</th>
        <th>Valor</th>
        <th>Ações</th>
    </tr>
    <?php foreach($sales_list as $sale_item): ?>
    <tr>
        <td><?php echo $sale_item['name']; ?></td>
        <td><?php echo date('d/m/Y', strtotime($sale_item['date_sale'])); ?></td>
    </tr>
    <?php endforeach;
</table>