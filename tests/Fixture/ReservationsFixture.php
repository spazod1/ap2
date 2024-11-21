<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ReservationsFixture
 */
class ReservationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'nom' => 'Lorem ipsum dolor sit amet',
                'description' => 'Lorem ipsum dolor sit amet',
                'date_reservation' => '2024-11-18',
                'debut' => '2024-11-18 13:44:30',
                'fin' => '2024-11-18 13:44:30',
                'user_id' => '7ed3c253-0a3b-4e4c-bc82-45efbcf61bed',
                'machine_id' => 1,
                'package_id' => 1,
            ],
        ];
        parent::init();
    }
}
