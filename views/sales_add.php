<h1>Vendas - Adicionar</h1>

<form method="POST">
    <label for="client_name">Nome do Cliente</label><br/>
    <!-- O próximo campo oculto irá receber o id do cliente para fornecer essa informação na submissão do formulário-->
    <input type="hidden" name="client_id" />
    <input type="text" name="client_name" id="client_name" data-type="search_clients" autocomplete="off" required />
    <button class="add_button">+</button><br/><br/><br/>

    <hr/>
    <h4>Produtos</h4>
    <fieldset>
        <legend>Adicionar Produto</legend>
        <input type="text" id="add_prod" data-type="search_inventory" autocomplete="off" />

    </fieldset>
    <table border="0" width="100%" id="products_table">
        <tr>
            <th width="400px">Nome</th>
            <th width="100px" style="text-align:right">Quantidade</th>
            <th width="200px">Preço Unitário</th>
            <th width="200px">Sub-Total</th>
            <th width="100px" style="text-align:center">Ações</th>
        </tr>
    </table>
    <hr/><br/>

    <label for="status">Status da Venda</label><br/>
    <select name="status" id="status">
        <option value="0">Aguardando Pgto.</option>
        <option value="1">Pago</option>
        <option value="2" disabled="disabled">Cancelado</option>
    </select><br/><br/>

    <label for="total_price">Total</label><br/>
    <input type="text" name="total_price" autocomplete="off" placeholder="0,00" disabled /><br/><br/>

    <input type="submit" value="Efetuar Venda" />
</form>



<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery.mask.js"></script>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script_sales_add.js"></script>