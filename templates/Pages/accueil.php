<div class="welcome">
    <?php if ($this->request->getSession()->check('Auth')): ?>
        <?php
        $user = $this->request->getSession()->read('Auth');
         // Debug output to check if user data is present
        ?>
        <h1>Bienvenue, <?= h($user['username']) ?>!</h1>
        <?= $this->Html->link('Reserver un forfait', ['controller' => 'Packages', 'action' => 'reserve'], ['class' => 'button']) ?>
        <?= $this->Html->link('Nos machines', ['controller' => 'Machines', 'action' => 'inventaire'], ['class' => 'button']) ?>
    <?php endif; ?>
</div>
