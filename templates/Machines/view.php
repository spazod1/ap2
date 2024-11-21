<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Machine $machine
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Machine'), ['action' => 'edit', $machine->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Machine'), ['action' => 'delete', $machine->id], ['confirm' => __('Are you sure you want to delete # {0}?', $machine->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Machines'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Machine'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="machines view content">
            <h3><?= h($machine->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Nom') ?></th>
                    <td><?= h($machine->nom) ?></td>
                </tr>
                <tr>
                    <th><?= __('Cpu') ?></th>
                    <td><?= h($machine->cpu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Memoire') ?></th>
                    <td><?= h($machine->memoire) ?></td>
                </tr>
                <tr>
                    <th><?= __('Os') ?></th>
                    <td><?= h($machine->os) ?></td>
                </tr>
                <tr>
                    <th><?= __('Jeu') ?></th>
                    <td><?= h($machine->jeu) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($machine->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Date Achat') ?></th>
                    <td><?= h($machine->date_achat) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Maintenances') ?></h4>
                <?php if (!empty($machine->maintenances)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Date Maintenance') ?></th>
                            <th><?= __('Machine Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($machine->maintenances as $maintenances) : ?>
                        <tr>
                            <td><?= h($maintenances->id) ?></td>
                            <td><?= h($maintenances->description) ?></td>
                            <td><?= h($maintenances->date_maintenance) ?></td>
                            <td><?= h($maintenances->machine_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Maintenances', 'action' => 'view', $maintenances->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Maintenances', 'action' => 'edit', $maintenances->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Maintenances', 'action' => 'delete', $maintenances->id], ['confirm' => __('Are you sure you want to delete # {0}?', $maintenances->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Reservations') ?></h4>
                <?php if (!empty($machine->reservations)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Nom') ?></th>
                            <th><?= __('Description') ?></th>
                            <th><?= __('Date Reservation') ?></th>
                            <th><?= __('Debut') ?></th>
                            <th><?= __('Fin') ?></th>
                            <th><?= __('User Id') ?></th>
                            <th><?= __('Machine Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($machine->reservations as $reservations) : ?>
                        <tr>
                            <td><?= h($reservations->id) ?></td>
                            <td><?= h($reservations->nom) ?></td>
                            <td><?= h($reservations->description) ?></td>
                            <td><?= h($reservations->date_reservation) ?></td>
                            <td><?= h($reservations->debut) ?></td>
                            <td><?= h($reservations->fin) ?></td>
                            <td><?= h($reservations->user_id) ?></td>
                            <td><?= h($reservations->machine_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Reservations', 'action' => 'view', $reservations->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Reservations', 'action' => 'edit', $reservations->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Reservations', 'action' => 'delete', $reservations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $reservations->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
