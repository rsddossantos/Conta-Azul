<html>
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link href="<?php echo BASE_URL; ?>/assets/css/login.css" rel="stylesheet"/>
</head>
<body>
    <div class="loginarea">
        <form method="POST">
            <div class="logo_company">
                <img src="<?php echo BASE_URL; ?>/assets/images/logo.png">
            </div>
            <input type="email" name="email" placeholder="Digite seu e-mail"/>
            <input type="password" name="password" placeholder="Digite sua senha"/>
            <input class="button" type="submit" value="Entrar" />

            <?php if(isset($error) && !empty($error)): ?>
            <div class="warning"><?php echo $error; ?></div>
            <?php endif; ?>
        </form>
    </div>
</body>
</html>

