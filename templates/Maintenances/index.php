<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Maintenance> $maintenances
 */
?>
<div class="maintenances index content">
    <?= $this->Html->link(__('New Maintenance'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Maintenances') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('description') ?></th>
                    <th><?= $this->Paginator->sort('date_maintenance') ?></th>
                    <th><?= $this->Paginator->sort('machine_id') ?></th>
                    <th><?= $this->Paginator->sort('statut') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($maintenances as $maintenance): ?>
                <tr>
                    <td><?= $this->Number->format($maintenance->id) ?></td>
                    <td><?= h($maintenance->description) ?></td>
                    <td><?= h($maintenance->date_maintenance) ?></td>
                    <td><?= $maintenance->has('machine') ? $this->Html->link($maintenance->machine->id, ['controller' => 'Machines', 'action' => 'view', $maintenance->machine->id]) : '' ?></td>
                    <td><?= h($maintenance->statut) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $maintenance->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $maintenance->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $maintenance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenance->id)]) ?>
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
