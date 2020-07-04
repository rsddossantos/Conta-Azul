<html>
    <head>
        <title>Painel - <?php echo $viewData['company_name']; ?></title>
        <link href="<?php echo BASE_URL; ?>/assets/css/template.css" rel="stylesheet"/>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/jquery-3.3.1.min.js"></script>
        <script type="text/javascript">var BASE_URL = '<?php echo BASE_URL; ?>'</script>
        <script type="text/javascript" src="<?php echo BASE_URL; ?>/assets/js/script.js"></script>
    </head>
    <body>
        <div class="leftmenu">
            <div class="logo_company">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo.png">
            </div>
            <div class="company_name">
                <?php echo $viewData['company_name']; ?>
            </div>
            <div class="menuarea">
                <ul>
                    <li><a href="<?php echo BASE_URL; ?>">Home</a></li>
                    <li><a href="<?php echo BASE_URL; ?>/permissions" data-menu="<?php echo $viewData['menu']['permissions_view']; ?>">Permissões</a></li>
                    <li ><a href="<?php echo BASE_URL; ?>/users" data-menu="<?php echo $viewData['menu']['users_view']; ?>">Usuários</a></li>
                    <li ><a href="<?php echo BASE_URL; ?>/clients" data-menu="<?php echo $viewData['menu']['clients_view']; ?>">Clientes</a></li>
                    <li ><a href="<?php echo BASE_URL; ?>/inventory" data-menu="<?php echo $viewData['menu']['inventory_view']; ?>">Estoque</a></li>
                    <li ><a href="<?php echo BASE_URL; ?>/sales" data-menu="<?php echo $viewData['menu']['sales_view']; ?>">Vendas</a></li>
                    <li ><a href="<?php echo BASE_URL; ?>/report" data-menu="<?php echo $viewData['menu']['report_view']; ?>">Relatórios</a></li>
                </ul>
            </div>
        </div>
        <div class="container">
            <div class="top">
                <div class="top_right"><a href="<?php echo BASE_URL.'/login/logout'; ?>">Sair</a></div>
                <div class="top_right"><?php echo $viewData['user_email']; ?></div>
            </div>
            <div class="area">
                <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            </div>
        </div>
    </body>
</html>
