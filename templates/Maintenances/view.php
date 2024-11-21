<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Maintenance $maintenance
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Maintenance'), ['action' => 'edit', $maintenance->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Maintenance'), ['action' => 'delete', $maintenance->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenance->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Maintenances'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Maintenance'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="maintenances view content">
            <h3><?= h($maintenance->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Description') ?></th>
                    <td><?= h($maintenance->description) ?></td>
                </tr>
                <tr>
                    <th><?= __('Machine') ?></th>
                    <td><?= $maintenance->has('machine') ? $this->Html->link($maintenance->machine->id, ['controller' => 'Machines', 'action' => 'view', $maintenance->machine->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Statut') ?></th>
                    <td><?= h($maintenance->statut) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($maintenance->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Maintenance') ?></th>
                    <td><?= h($maintenance->date_maintenance) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
