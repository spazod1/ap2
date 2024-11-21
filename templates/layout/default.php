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
 * @var \App\View\AppView $this
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css(['normalize.min', 'milligram.min', 'fonts', 'cake']) ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-nav">
        <div class="top-nav-title">
            <a href="<?= $this->Url->build('/') ?>"><span>Cyber</span>Games</a>
        </div>
        <div class="top-nav-links">
        <?=$this->Html->link('Packages', ['controller' => 'Packages', 'action' => 'index', 'plugin' => false]);?>
        <?=$this->Html->link('Reservations', ['controller' => 'Reservations', 'action' => 'index', 'plugin' => false]);?>
        <?=$this->Html->link('Machines', ['controller' => 'Machines', 'action' => 'index', 'plugin' => false]);?>
        <?=$this->Html->link('Maintenances', ['controller' => 'Maintenances', 'action' => 'index', 'plugin' => false]);?>
        <?=$this->Html->link('UsersPackages', ['controller' => 'Packages_users', 'action' => 'index', 'plugin' => false]);?>
        <?=$this->Html->link('Users', ['controller' => 'Users', 'action' => 'index']);?>
        <?= $this->Html->link('Logout', ['controller' => 'Users', 'action' => 'logout'], ['class' => 'button']) ?>


        </div>
    </nav>
    <main class="main">
        <div class="container">
            <?= $this->Flash->render() ?>
            <?= $this->fetch('content') ?>
        </div>
    </main>
    <footer>
    </footer>
</body>
</html>
