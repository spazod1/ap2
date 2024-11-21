<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * PackagesUsersFixture
 */
class PackagesUsersFixture extends TestFixture
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
                'user_id' => 'cabfcdc0-7e44-4382-9b6f-e6150543faa6',
                'package_id' => 1,
                'date_achat' => '2024-11-14',
            ],
        ];
        parent::init();
    }
}
