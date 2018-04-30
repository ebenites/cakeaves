<div class="page-header">
    <h3>Mantenimiento de Aves</h3>
</div>
<?=$this->Form->create($ave)?>
<div class="panel panel-default">
    <div class="panel-heading">
        <h2 class="panel-title">Editar Ave</h2>
    </div>
    <div class="panel-body">
        
        <?=$this->Form->control('nombre')?>
        <?=$this->Form->control('genero', ['options' => ['M' => 'Macho', 'H' => 'Hembra'], 'empty' => true])?>
        <?=$this->Form->control('nacimiento', ['empty' => true])?>
        <?=$this->Form->control('descripcion')?>
        <?=$this->Form->control('padre_id', ['options' => $padres])?>
        <?=$this->Form->control('madre_id', ['options' => $madres])?>
        
    </div>
    <div class="panel-footer">
        <div style="float: right">
            <?=$this->Html->link('Cancelar', ['controller' => 'Aves', 'action' => 'index'], ['class' => 'btn btn-default'])?>
        </div>
        <?=$this->Form->submit('Guardar', ['class' => 'btn-primary'])?>
    </div>
</div>
<?=$this->Form->end()?>