<h1>Clientes - Adicionar</h1>

<?php if(isset($error_msg) && !empty($error_msg)): ?>
    <div class="warn"><?php echo $error_msg; ?></div>
<?php  endif; ?>

<form method="POST">
    <label for="name">Nome</label><br/>
    <input type="text" name="name" required /><br/><br/>

    <label for="email">E-mail</label><br/>
    <input type="email" name="email" /><br/><br/>

    <label for="phone">Telefone</label><br/>
    <input type="text" name="phone" /><br/><br/>

    <label for="stars">Estrelas</label><br/>
    <select name="stars" id="stars">
        <option value="1">1 Estrela</option>
        <option value="2">2 Estrela</option>
        <option value="3" selected="selected">3 Estrela</option>
        <option value="4">4 Estrela</option>
        <option value="5">5 Estrela</option>
    </select><br/><br/>

    <label for="internal_obs">Observações Internas</label><br/>
    <textarea name="internal_obs" id="internal_obs"></textarea><br/><br/>

    <input type="submit" value="Adicionar" />
</form>