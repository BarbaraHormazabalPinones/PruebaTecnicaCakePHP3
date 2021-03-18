<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dueno $dueno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Dueños'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Mascotas'), ['controller' => 'Mascotas','action' => 'index']) ?></li>

    </ul>
</nav>
<div class="duenos form large-9 medium-8 columns content">
    <?= $this->Form->create($dueno) ?>
    <fieldset>
        <legend><?= __('Agregar Dueño') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('rut');
            echo $this->Form->control('direccion');
            echo $this->Form->control('telefono');
            echo $this->Form->control('correo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
