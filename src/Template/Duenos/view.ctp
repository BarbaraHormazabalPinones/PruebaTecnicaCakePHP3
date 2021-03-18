<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dueno $dueno
 * @var \App\Model\Entity\Mascota $query

 */
?>
<head>
    <?= $this->Html->css('bootstrap.min.css') ?>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Editar Dueño'), ['action' => 'edit', $dueno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Dueño'), ['action' => 'delete', $dueno->id], ['confirm' => __('¿Está seguro de eliminar al dueño?', $dueno->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Dueños'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Agregar Dueño'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Agregar Mascota'), ['controller' => 'Mascotas', 'action' => 'add', $dueno->id]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Mascotas'), ['controller' => 'Mascotas', 'action' => 'index']) ?> </li>

    </ul>
</nav>
<div class="duenos view large-9 medium-8 columns content">
    <h3><?= h($dueno->nombre) ?></h3>
    <table class="vertical-table" id="data-dueno">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($dueno->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rut') ?></th>
            <td><?= h($dueno->rut) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dirección') ?></th>
            <td><?= h($dueno->direccion) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Teléfono') ?></th>
            <td><?= h($dueno->telefono) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Correo') ?></th>
            <td><?= h($dueno->correo) ?></td>
        </tr>
    </table>
</div>

<button style="margin-left: 900px; color: #98BA50; hover: #98BA50"> <?= $this->Html->link(__('Agregar Mascota'), ['controller' => 'Mascotas', 'action' => 'add', $dueno->id])?>
</button>

<div class="mascotas view large-9 medium-8 columns content" style="margin-left: 300px">
    <h3>Lista de Mascotas</h3>
    <table class="table" id="data-mascota">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Especie</th>
                <th>Raza</th>
                <th>Color</th>
                <th>Edad</th>
                <th style="width: 180px">Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($query as $item): ?>
            <tr>
                <td><?= h($item->nombre) ?></td>
                <td><?= h($item->especie) ?></td>
                <td><?= h($item->raza) ?></td>
                <td><?= h($item->color) ?></td>
                <td><?= h($item->edad) ?></td>
                <td class="actions">
                    <div class="row">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Mascotas','action' => 'view', $item->id],
                    ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Mascotas','action' => 'edit', $item->id],
                    ['class' => 'btn btn-sm btn-primary']) ?>
                    <?= $this->Form->postLink(__('Eliminar'), ['controller' => 'Mascotas','action' => 'delete', $item->id],
                    ['confirm' => __('¿Está seguro de querer eliminar a la mascota: {0}?', $item->nombre),
                    'class' => 'btn btn-sm btn-danger']) ?>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
