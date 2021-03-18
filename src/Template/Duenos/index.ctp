<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Dueno[]|\Cake\Collection\CollectionInterface $duenos
 */
?>
<head>
    <?= $this->Html->css('bootstrap.min.css') ?>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Agregar Dueño'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Lista de Mascotas'), ['controller' => 'Mascotas','action' => 'index']) ?></li>

    </ul>
</nav>
<div class="duenos index large-9 medium-8 columns content">
    <h3><?= __('Lista de Dueños') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('Nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('RUT') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Dirección') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Teléfono') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Correo') ?></th>
                <th scope="col"><?= $this->Paginator->sort('Creado') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('Modificado') ?></th> -->
                <th style="width: 100px" scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($duenos as $dueno): ?>
            <tr>
                <!-- <td><?= $this->Number->format($dueno->id) ?></td> -->
                <td><?= h($dueno->nombre) ?></td>
                <td><?= h($dueno->rut) ?></td>
                <td><?= h($dueno->direccion) ?></td>
                <td><?= h($dueno->telefono) ?></td>
                <td><?= h($dueno->correo) ?></td>
                <td><?= h($dueno->created) ?></td>
                <!-- <td><?= h($dueno->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $dueno->id],
                    ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $dueno->id],
                    ['class' => 'btn btn-sm btn-primary']) ?>
                    <!-- <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $dueno->id],
                    ['confirm' => __('Esta seguro de querer eliminar al usuario: {0}? Si elimina a este dueño, se eliminarán todas sus mascotas.', $dueno->id),
                    'class' => 'btn btn-sm btn-danger']) ?> -->
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('Primera')) ?>
            <?= $this->Paginator->prev('< ' . __('Anterior')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('Siguiente') . ' >') ?>
            <?= $this->Paginator->last(__('Última') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Página {{page}} de {{pages}}, mostrando {{current}} registro(s) {{count}} totales')]) ?></p>
    </div>
</div>
