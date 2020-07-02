<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProductsPurchasesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProductsPurchasesTable Test Case
 */
class ProductsPurchasesTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProductsPurchasesTable
     */
    protected $ProductsPurchases;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.ProductsPurchases',
        'app.Purchases',
        'app.Providers',
        'app.Products',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp(): void
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('ProductsPurchases') ? [] : ['className' => ProductsPurchasesTable::class];
        $this->ProductsPurchases = TableRegistry::getTableLocator()->get('ProductsPurchases', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->ProductsPurchases);

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
