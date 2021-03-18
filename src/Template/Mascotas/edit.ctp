<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<head>
    <?= $this->Html->css('bootstrap.min.css') ?>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Form->postLink(
                __('Eliminar Mascota'),
                ['action' => 'delete', $mascota->id],
                ['confirm' => __('¿Está seguro de querer eliminar a la mascota: # {0}?', $mascota->nombre)]
            )
        ?></li>
        <li><?= $this->Html->link(__('Lista de Mascotas'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="mascotas form large-9 medium-8 columns content">
    <?= $this->Form->create($mascota) ?>
    <fieldset>
        <legend><?= __('Editar información de {0}?',$mascota->nombre) ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('edad');
            echo $this->Form->control('especie');
            echo $this->Form->control('raza');
            echo $this->Form->control('color');
            echo $this->Form->control('id_dueno');
        ?>
    </fieldset>
    <!-- <?= $this->Form->button(__('Actualizar')) ?> -->
    <?= $this->Form->button(__('Actualizar'),
    ['class'=>'btn btn-primary btn-lg']) ?>
    <?= $this->Form->end() ?>
</div>
