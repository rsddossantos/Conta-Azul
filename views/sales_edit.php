<h1>Vendas - Editar</h1>

<strong>Nome do Cliente</strong><br/>
<?php echo $sales_info['info']['client_name']; ?><br/><br/>

<strong>Data da Venda</strong><br/>
<?php echo date('d/m/Y', strtotime($sales_info['info']['date_sale'])); ?><br/><br/>

<strong>Valor Total</strong><br/>
<?php echo number_format($sales_info['info']['total_price'], 2, ',', '.'); ?><br/><br/>

<strong>Status da Venda</strong><br/>
<hr/>