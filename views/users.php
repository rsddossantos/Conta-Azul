<h1>Usuários</h1>
<div class="button"><a href="<?php echo BASE_URL; ?>/users/add" class="button">Adicionar Usuário</a></div>
<table border="0" width="100%">
    <tr>
        <th>E-mail</th>
        <th>Grupo de Permissões</th>
        <th>Ações</th>
    </tr>
    <?php foreach($users_list as $us): ?>
    <tr>
        <td><?php echo $us['email']; ?></td>
        <td width="200"><?php echo $us['name']; ?></td>
        <td width="160">
             <a class="button button_small" href="<?php echo BASE_URL; ?>/users/edit/<?php echo $us['id']; ?>">Editar</a>
             <a class="button button_small" href="<?php echo BASE_URL; ?>/users/delete/<?php echo $us['id']; ?>" onclick="return confirm('Deseja realmente excluir esse item?')">Excluir</a>
        </td>
    </tr>
    <?php endforeach; ?>
</table>