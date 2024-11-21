<h1>Inventaire des Machines</h1>

<table>
    <thead>
        <tr>
            <th>Nom</th>
            <th>CPU</th>
            <th>Mémoire</th>
            <th>Système d'exploitation</th>
            <th>Jeux Installés</th>
            <th>Date d'achat</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($machines as $machine): ?>
            <tr>
                <td><?= h($machine->nom) ?></td>
                <td><?= h($machine->cpu) ?></td>
                <td><?= h($machine->memoire) ?></td>
                <td><?= h($machine->os) ?></td>
                <td><?= h($machine->jeu) ?></td>
                <td><?= h($machine->date_achat->format('Y-m-d')) ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
