<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Mascota $mascota
 * @var \App\Model\Entity\Dueno $dueno

 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Editar Mascota'), ['action' => 'edit', $mascota->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Eliminar Mascota'), ['action' => 'delete', $mascota->id], ['confirm' => __('Are you sure you want to delete # {0}?', $mascota->id)]) ?> </li>
        <li><?= $this->Html->link(__('Lista de Mascotas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Ver Dueño'), ['controller' => 'Duenos', 'action' => 'view', $mascota->id_dueno]) ?> </li>

    </ul>
</nav>
<div class="mascotas view large-9 medium-8 columns content">
    <h3><?= h($mascota->nombre) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nombre') ?></th>
            <td><?= h($mascota->nombre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Especie') ?></th>
            <td><?= h($mascota->especie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Raza') ?></th>
            <td><?= h($mascota->raza) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Color') ?></th>
            <td><?= h($mascota->color) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($mascota->id) ?></td>
        </tr> -->
        <tr>
            <th scope="row"><?= __('Edad (años)') ?></th>
            <td><?= $this->Number->format($mascota->edad) ?></td>
        </tr>
        <!-- <tr>
            <th scope="row"><?= __('Id Dueno') ?></th>
            <td><?= $this->Number->format($mascota->id_dueno) ?></td>
        </tr> -->
    </table>
</div>

