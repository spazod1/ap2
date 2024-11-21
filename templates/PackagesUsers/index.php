<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\PackagesUser> $packagesUsers
 */
?>
<div class="packagesUsers index content">
    <?= $this->Html->link(__('New Packages User'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Packages Users') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('user_id') ?></th>
                    <th><?= $this->Paginator->sort('package_id') ?></th>
                    <th><?= $this->Paginator->sort('date_achat') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($packagesUsers as $packagesUser): ?>
                <tr>
                    <td><?= $packagesUser->has('user') ? $this->Html->link($packagesUser->user->username, ['controller' => 'Users', 'action' => 'view', $packagesUser->user->id]) : '' ?></td>
                    <td><?= $packagesUser->has('package') ? $this->Html->link($packagesUser->package->id, ['controller' => 'Packages', 'action' => 'view', $packagesUser->package->id]) : '' ?></td>
                    <td><?= h($packagesUser->date_achat) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $packagesUser->user_id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $packagesUser->user_id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $packagesUser->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $packagesUser->user_id)]) ?>
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
