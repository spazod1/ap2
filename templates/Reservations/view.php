<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Reservation $reservation
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Reservation'), ['action' => 'edit', $reservation->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Reservation'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Reservations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="reservations view content">
            <h3><?= h($reservation->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($reservation->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($reservation->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $reservation->has('user') ? $this->Html->link($reservation->user->username, ['controller' => 'Users', 'action' => 'view', $reservation->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Machine') ?></th>
                    <td><?= $reservation->has('machine') ? $this->Html->link($reservation->machine->id, ['controller' => 'Machines', 'action' => 'view', $reservation->machine->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= $reservation->has('package') ? $this->Html->link($reservation->package->id, ['controller' => 'Packages', 'action' => 'view', $reservation->package->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($reservation->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Reservation') ?></th>
                    <td><?= h($reservation->date_reservation) ?></td>
                </tr>
                <tr>
                    <th><?= __('Debut') ?></th>
                    <td><?= h($reservation->debut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Fin') ?></th>
                    <td><?= h($reservation->fin) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
