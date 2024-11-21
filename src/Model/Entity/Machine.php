<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Machine Entity
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $cpu
 * @property string|null $memoire
 * @property string|null $os
 * @property string|null $jeu
 * @property \Cake\I18n\FrozenDate|null $date_achat
 *
 * @property \App\Model\Entity\Maintenance[] $maintenances
 * @property \App\Model\Entity\Reservation[] $reservations
 */
class Machine extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'nom' => true,
        'cpu' => true,
        'memoire' => true,
        'os' => true,
        'jeu' => true,
        'date_achat' => true,
        'maintenances' => true,
        'reservations' => true,
    ];
}
