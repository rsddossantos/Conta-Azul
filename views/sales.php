<h1>Vendas</h1>

<div class="button"><a href="<?php echo BASE_URL; ?>/sales/add" class="button">Adicionar Venda</a></div>

<table border="0" width="100%">
    <tr>
        <th width="400">Nome do cliente</th>
        <th width="200">Data</th>
        <th width="200">Status</th>
        <th width="200">Valor</th>
        <th width="100">Ações</th>
    </tr>
    <?php foreach($sales_list as $sale_item): ?>
    <tr>
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
        <td style="text-align:center">
            <a class="button button_small" href="<?php echo BASE_URL; ?>/sales/edit/<?php echo $sale_item['id']; ?>">Editar</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>