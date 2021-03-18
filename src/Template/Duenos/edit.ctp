<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dueno $dueno
 */
?>
<head>
    <?= $this->Html->css('bootstrap.min.css') ?>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar Dueño'),
                ['action' => 'delete', $dueno->id],
                ['confirm' => __('¿Está seguro de eliminar al dueño de nombre # {0}? Si elimina a este dueño, se eliminarán todas sus mascotas.', $dueno->nombre) ]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Dueños'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="duenos form large-9 medium-8 columns content">
    <?= $this->Form->create($dueno) ?>
    <fieldset>
        <legend><?= __('Editar Dueño') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('rut');
            echo $this->Form->control('direccion');
            echo $this->Form->control('telefono');
            echo $this->Form->control('correo');
        ?>
    </fieldset>
    <!-- <?= $this->Form->button(__('Actualizar')) ?> -->
    <?= $this->Form->button(__('Actualizar'),
    ['class'=>'btn btn-primary btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
