<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dueno $dueno
 * @var \App\Model\Entity\Mascota $mascota
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Lista de Mascotas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Lista de Dueños'), ['controller' => 'Duenos','action' => 'index']) ?></li>

    </ul>
</nav>
<div class="mascotas form large-9 medium-8 columns content">
    <?= $this->Form->create($mascota) ?>
    <fieldset>
        <legend><?= __('Agregar Mascota') ?></legend>
        <?php
            echo $this->Form->control('nombre');
            echo $this->Form->control('edad');
            echo $this->Form->control('especie');
            echo $this->Form->control('raza');
            echo $this->Form->control('color');
            echo $this->Form->hidden('id_dueno', ['default' => $id_dueno]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Agregar')) ?>
    <?= $this->Form->end() ?>
</div>
