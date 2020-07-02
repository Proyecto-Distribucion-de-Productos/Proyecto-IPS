<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProvidersTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProvidersTable Test Case
 */
class ProvidersTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProvidersTable
     */
    protected $Providers;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Providers',
        'app.Districts',
        'app.Provinces',
        'app.Departments',
        'app.Phones',
        'app.ProductsPurchases',
        'app.Purchases',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Providers') ? [] : ['className' => ProvidersTable::class];
        $this->Providers = TableRegistry::getTableLocator()->get('Providers', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Providers);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
