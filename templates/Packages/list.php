<h1>Available Packages</h1>
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
                    <?= $this->Form->create(null, ['url' => ['controller' => 'Reservations', 'action' => 'add']]) ?>
                    <?= $this->Form->hidden('package_id', ['value' => $package->package_id]) ?>
                    <?= $this->Form->hidden('user_id', ['value' => $this->request->getSession()->read('Auth.user_id')]) ?>
                    <?= $this->Form->control('debut', ['type' => 'datetime', 'label' => 'Start Time']) ?>
                    <?= $this->Form->control('fin', ['type' => 'datetime', 'label' => 'End Time']) ?>
                    <?= $this->Form->button(__('Reserve')) ?>
                    <?= $this->Form->end() ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

