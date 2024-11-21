<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Maintenance Entity
 *
 * @property int $id
 * @property string|null $description
 * @property \Cake\I18n\FrozenDate|null $date_maintenance
 * @property int $machine_id
 * @property string $statut
 *
 * @property \App\Model\Entity\Machine $machine
 */
class Maintenance extends Entity
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
        'description' => true,
        'date_maintenance' => true,
        'machine_id' => true,
        'statut' => true,
        'machine' => true,
    ];
}
