<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackagesUser $packagesUser
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Packages User'), ['action' => 'edit', $packagesUser->user_id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Packages User'), ['action' => 'delete', $packagesUser->user_id], ['confirm' => __('Are you sure you want to delete # {0}?', $packagesUser->user_id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Packages Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Packages User'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packagesUsers view content">
            <h3><?= h($packagesUser->Array) ?></h3>
            <table>
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $packagesUser->has('user') ? $this->Html->link($packagesUser->user->username, ['controller' => 'Users', 'action' => 'view', $packagesUser->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Package') ?></th>
                    <td><?= $packagesUser->has('package') ? $this->Html->link($packagesUser->package->id, ['controller' => 'Packages', 'action' => 'view', $packagesUser->package->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Achat') ?></th>
                    <td><?= h($packagesUser->date_achat) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
