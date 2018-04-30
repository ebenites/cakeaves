<div class="page-header">
    <h3>Mantenimiento de Aves</h3>
</div>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Lista de Aves</h2>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>NOMBRE</th>
                <th>GENERO</th>
                <th>NACIMIENTO</th>
                <th>PADRE</th>
                <th>MADRE</th>
                <th width="80"></th>
                <th width="80"></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach($aves as $ave){?>
            <tr>
                <td><?=$ave->id?></td>
                <td><?=$ave->nombre_completo?></td>
                <td><?=$ave->genero_completo?></td>
                <td><?=$ave->nacimiento?></td>
                <td><?=$ave->padre_nombre?></td>
                <td><?=$ave->madre_nombre?></td>
                <td><?=$this->Html->link('Editar', ['controller' => 'Aves', 'action' => 'editar', $ave->id], ['class' => 'btn btn-xs btn-warning'])?></td>
                <td><?=$this->Html->link('Eliminar', ['controller' => 'Aves', 'action' => 'eliminar', $ave->id], ['class' => 'btn btn-xs btn-danger'])?></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
    <div class="panel-footer">
        <?=$this->Html->link('Nuevo', ['controller' => 'Aves', 'action' => 'registrar'], ['class' => 'btn btn-success'])?>
    </div>
</div>
