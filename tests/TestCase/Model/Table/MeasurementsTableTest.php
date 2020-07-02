<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\MeasurementsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\MeasurementsTable Test Case
 */
class MeasurementsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\MeasurementsTable
     */
    protected $Measurements;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Measurements',
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
        $config = TableRegistry::getTableLocator()->exists('Measurements') ? [] : ['className' => MeasurementsTable::class];
        $this->Measurements = TableRegistry::getTableLocator()->get('Measurements', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown(): void
    {
        unset($this->Measurements);

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
}
