<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Reservation> $reservations
 */
?>
<div class="reservations index content">
    <?= $this->Html->link(__('New Reservation'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Reservations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('nom') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('date_reservation') ?></th>
                    <th><?= $this->Paginator->sort('debut') ?></th>
                    <th><?= $this->Paginator->sort('fin') ?></th>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('machine_id') ?></th>
                    <th><?= $this->Paginator->sort('package_id') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($reservations as $reservation): ?>
                <tr>
                    <td><?= $this->Number->format($reservation->id) ?></td>
                    <td><?= h($reservation->nom) ?></td>
                    <td><?= h($reservation->description) ?></td>
                    <td><?= h($reservation->date_reservation) ?></td>
                    <td><?= h($reservation->debut) ?></td>
                    <td><?= h($reservation->fin) ?></td>
                    <td><?= $reservation->has('user') ? $this->Html->link($reservation->user->username, ['controller' => 'Users', 'action' => 'view', $reservation->user->id]) : '' ?></td>
                    <td><?= $reservation->has('machine') ? $this->Html->link($reservation->machine->id, ['controller' => 'Machines', 'action' => 'view', $reservation->machine->id]) : '' ?></td>
                    <td><?= $reservation->has('package') ? $this->Html->link($reservation->package->id, ['controller' => 'Packages', 'action' => 'view', $reservation->package->id]) : '' ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $reservation->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $reservation->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $reservation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservation->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
