<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota[]|\Cake\Collection\CollectionInterface $mascotas
 */
?>
<head>
    <?= $this->Html->css('bootstrap.min.css') ?>
</head>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Acciones') ?></li>
        <li><?= $this->Html->link(__('Lista de Dueños'), ['controller' => 'Duenos', 'action' => 'index']) ?> </li>
    </ul>
</nav>
<div class="mascotas index large-9 medium-8 columns content">
    <h3><?= __('Lista de Mascotas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <!-- <th scope="col"><?= $this->Paginator->sort('id') ?></th> -->
                <th scope="col"><?= $this->Paginator->sort('nombre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('edad') ?></th>
                <th scope="col"><?= $this->Paginator->sort('especie') ?></th>
                <th scope="col"><?= $this->Paginator->sort('raza') ?></th>
                <th scope="col"><?= $this->Paginator->sort('color') ?></th>
                <th scope="col"><?= $this->Paginator->sort('id dueño') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <!-- <th scope="col"><?= $this->Paginator->sort('modified') ?></th> -->
                <th style="width: 100px"scope="col" class="actions"><?= __('Acciones') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($mascotas as $mascota): ?>
            <tr>
                <!-- <td><?= $this->Number->format($mascota->id) ?></td> -->
                <td><?= h($mascota->nombre) ?></td>
                <td><?= $this->Number->format($mascota->edad) ?></td>
                <td><?= h($mascota->especie) ?></td>
                <td><?= h($mascota->raza) ?></td>
                <td><?= h($mascota->color) ?></td>
                <td><?= $this->Number->format($mascota->id_dueno) ?></td>
                <td><?= h($mascota->created) ?></td>
                <!-- <td><?= h($mascota->modified) ?></td> -->
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $mascota->id],
                    ['class' => 'btn btn-sm btn-info']) ?>
                    <?= $this->Html->link(__('Editar'), ['action' => 'edit', $mascota->id],
                    ['class' => 'btn btn-sm btn-primary']) ?>
                    <!-- <?= $this->Form->postLink(__('Eliminar'), ['action' => 'delete', $mascota->id],
                    ['confirm' => __('¿Está seguro de querer eliminar a la mascota: # {0}?', $mascota->nombre),
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
