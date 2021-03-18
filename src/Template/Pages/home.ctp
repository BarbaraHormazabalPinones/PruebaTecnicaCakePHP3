<?php

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Http\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$siteDescription = 'Patitas felices: Registro responsable de mascotas';
?>
<!DOCTYPE html>
<html>

<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $siteDescription ?>
    </title>

    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('main.css') ?>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Raleway:500i|Roboto:300,400,700|Roboto+Mono" rel="stylesheet">
</head>

<body class="home">

    <div class="top-container">
        <div class="header-image"><?= $this->Html->image('logopatitas.png') ?></div>
        <!-- <h1>Pequeñas Patitas.</h1> -->
    </div>

    <div class="middle-container">
        <div class="profile">
            <h2>¡Bienvenido(a) a Patitas Felices!</h2>
            <h3>Registro responsable de mascotas</h3>
            <h3>Elige una opción:</h3>
            <table>
                <tr>
                    <td>
                    <div class="logo-1">
                    <?=$this->Html->image('listaduenos.png', array('url' => array(
                            'controller' => 'Duenos',
                            'action' => 'index'
                        )))?>
                    </div>

                    <td>
                    <div class="logo-2">
                    <?=$this->Html->image('listamascota.png', array('url' => array(
                            'controller' => 'Mascotas',
                            'action' => 'index'
                        )))?>
                    </div>
                    </td>
                </tr>
            </table>
        </div>
    </div>

    <div class="bottom-container">
        <p>Developed by Bárbara Hormazábal Piñones. <br>
        Images owned by “Vecteezy.com” under free use</p>
    </div>

</body>
</html>
