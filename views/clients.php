<h1>Clientes</h1>
<?php if($edit_permission): ?>
<div class="button"><a href="<?php echo BASE_URL; ?>/clients/add" class="button">Adicionar Cliente</a></div>
<?php endif; ?>
<table border="0" width="100%">
    <tr>
        <th>Nome</th>
        <th>Telefone</th>
        <th>Cidade</th>
        <th>Estrelas</th>
        <th>Ações</th>
    </tr>
    <?php foreach($clients_list as $c): ?>
    <tr>
        <td><?php echo $c['name']; ?></td>
        <td><?php echo $c['phone']; ?></td>
        <td><?php echo $c['address_city']; ?></td>
        <td><?php echo $c['stars']; ?></td>
        <td>

        </td>
    </tr>
    <?php endforeach; ?>
</table>