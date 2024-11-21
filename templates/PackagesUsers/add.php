<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\PackagesUser $packagesUser
 * @var \Cake\Collection\CollectionInterface|string[] $users
 * @var \Cake\Collection\CollectionInterface|string[] $packages
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Packages Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="packagesUsers form content">
            <?= $this->Form->create($packagesUser) ?>
            <fieldset>
                <legend><?= __('Add Packages User') ?></legend>
                <?php
                    echo $this->Form->control('date_achat', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
