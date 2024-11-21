<h1>Forfaits Disponibles</h1>
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Description</th>
            <th>Price</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($packages as $package): ?>
            <tr>
                <td><?= h($package->nom) ?></td>
                <td><?= h($package->description) ?></td>
                <td><?= h($package->prix) ?></td>
                <td>
                <?php  $identity = $this->request->getAttribute('identity');
                 $userId = $identity ? $identity->get('id') : null; 
                  ?>
                    <?= $this->Form->create(null, ['url' => ['controller' => 'reservations', 'action' => 'add']]) ?>
                    <?= $this->Form->hidden('package_id', ['value' => $package->id]) ?>
                    <?= $this->Form->hidden('user_id', ['value' => $userId]) ?>
                    <?= $this->Form->control('debut', ['type' => 'datetime', 'label' => 'Debut']) ?>
                    <?= $this->Form->control('fin', ['type' => 'datetime', 'label' => 'Fin']) ?>
                    <?= $this->Form->control('machine_id', ['type' => 'select', 'options' => $machines, 'empty' => 'choisir une machine']) ?>
                    <?= $this->Form->button(__('Reserve')) ?>
                    <?= $this->Form->end() ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
