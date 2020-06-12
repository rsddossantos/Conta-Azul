<h1>Produtos - Visualizar</h1>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
    <div class="warn"><?php echo $error_msg; ?></div>
<?php  endif; ?>

<form method="POST">
    <label for="name">Nome</label><br/>
    <input type="text" name="name" value="<?php echo $inventory_info['name']; ?>"  disabled /><br/><br/>

    <label for="price">Preço</label><br/>
    <input type="text" name="price" value="<?php echo number_format($inventory_info['price'], 2); ?>"  disabled /><br/><br/>

    <label for="quant">Quantidade em Estoque</label><br/>
    <input type="number" name="quant" value="<?php echo $inventory_info['quant']; ?>"  disabled /><br/><br/>

    <label for="min_quant">Quantidade Mínima em Estoque</label><br/>
    <input type="number" name="min_quant" value="<?php echo $inventory_info['min_quant']; ?>"  disabled /><br/><br/>
</form>
