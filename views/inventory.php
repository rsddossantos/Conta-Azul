<h1>Estoque</h1>
<?php if($add_permission): ?>
    <div class="button"><a href="<?php echo BASE_URL; ?>/inventory/add" class="button">Adicionar Produto</a></div>
<?php endif; ?>
<input type="text" id="busca" data-type="search_inventory" placeholder="Buscar" autocomplete="off"/>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Preço</th>
        <th>Qtde.</th>
        <th>Qtde. Min.</th>
        <th>Ações</th>
    </tr>
    <?php foreach($inventory_list as $product): ?>
        <tr>
            <td><?php echo $product['name']; ?></td>
            <td width="280">R$ <?php echo number_format($product['price'], 2); ?></td>
            <td width="100" style="text-align:center"><?php echo $product['quant']; ?></td>
            <td width="100" style="text-align:center"><?php
                if($product['min_quant'] > $product['quant']) {
                    echo '<span style="color:red">'.($product['min_quant']).'</span>';
                } else {
                    echo $product['min_quant'];
                }
                ?></td>
            <td width="180"></td>
        </tr>

    <?php endforeach ?>
</table>