<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * PackagesUser Entity
 *
 * @property string $user_id
 * @property int $package_id
 * @property \Cake\I18n\FrozenDate|null $date_achat
 *
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\Package $package
 */
class PackagesUser extends Entity
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
        'date_achat' => true,
        'user' => true,
        'package' => true,
    ];
}
