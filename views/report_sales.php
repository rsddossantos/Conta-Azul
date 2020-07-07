<h1>Relatório de Vendas</h1>

<form method="GET" onsubmit="return openPopup(this)">
    <div class="report-grid-4">
        <label for="client_name">Nome do Cliente:</label><br/>
        <input type="text" name="client_name" /><br/><br/>
    </div>
    <div class="report-grid-4">
        <label for="period1">Período:</label><br/>
        <input type="date" name="period1" /><br/><br/>
        <input type="date" name="period2" /><br/><br/>
    </div>
    <div class="report-grid-4">
        <label for="status">Status da Venda:</label><br/>
        <select name="status">
            <option value="0">Todos</option>
            <?php foreach($statuses as $key => $value): ?>
            <option value="<?php echo $key; ?>"><?php echo $value; ?></option>
            <?php endforeach; ?>
        </select><br/><br/>
    </div>
    <div class="report-grid-4">
        <label for="order">Organizar:</label><br/>
        <select name="order">
            <option value="date_desc">Mais Recente</option>
            <option value="date_esc">Mais Antigo</option>
            <option value="status">Status da Venda</option>
        </select><br/><br/>
    </div>
    <div style="clear:both"></div>
    <div style="padding:30px;">
        <input type="submit" value="Gerar Relatório" />
    </div>
</form>
<script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/report_sales.js"></script>