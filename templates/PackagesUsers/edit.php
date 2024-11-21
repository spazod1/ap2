<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackagesUser $packagesUser
 * @var string[]|\Cake\Collection\CollectionInterface $users
 * @var string[]|\Cake\Collection\CollectionInterface $packages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $packagesUser->user_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $packagesUser->user_id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Packages Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packagesUsers form content">
            <?= $this->Form->create($packagesUser) ?>
            <fieldset>
                <legend><?= __('Edit Packages User') ?></legend>
                <?php
                    echo $this->Form->control('date_achat', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
