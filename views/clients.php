<h1>Clientes</h1>
<?php if($edit_permission): ?>
<div class="button"><a href="<?php echo BASE_URL; ?>/clients/add" class="button">Adicionar Cliente</a></div>
<?php endif; ?>
<input type="text" id="busca" placeholder="Buscar" />
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
        <td width="400"><?php echo $c['name']; ?></td>
        <td width="150"><?php echo $c['phone']; ?></td>
        <td width="300"><?php echo $c['address_city']; ?></td>
        <td width="10" style="text-align:center"><?php echo $c['stars']; ?></td>
        <td width="160" style="text-align:center">
            <?php if($edit_permission): ?>
                <a class="button button_small" href="<?php echo BASE_URL; ?>/clients/edit/<?php echo $c['id']; ?>">Editar</a>
                <a class="button button_small" href="<?php echo BASE_URL; ?>/clients/delete/<?php echo $c['id']; ?>" onclick="return confirm('Deseja realmente excluir esse item?')">Excluir</a>
            <?php else: ?>
                <a class="button button_small" href="<?php echo BASE_URL; ?>/clients/view/<?php echo $c['id']; ?>">Visualizar</a>
            <?php endif; ?>
        </td>
    </tr>
    <?php endforeach; ?>
</table>

<div class="pagination">
<?php for($q=1;$q<=$p_count;$q++): ?>
    <a class="pag_item <?php echo ($q==$p)?'pag_ativo':''; ?>" href="<?php echo BASE_URL; ?>/clients?p=<?php echo $q; ?>"><?php echo $q; ?></a>
<?php endfor; ?>
    <div style="clear:both"></div>
</div>