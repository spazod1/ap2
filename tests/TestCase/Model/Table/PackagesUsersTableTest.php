<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\PackagesUsersTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\PackagesUsersTable Test Case
 */
class PackagesUsersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\PackagesUsersTable
     */
    protected $PackagesUsers;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.PackagesUsers',
        'app.Users',
        'app.Packages',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('PackagesUsers') ? [] : ['className' => PackagesUsersTable::class];
        $this->PackagesUsers = $this->getTableLocator()->get('PackagesUsers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->PackagesUsers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\PackagesUsersTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\PackagesUsersTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
