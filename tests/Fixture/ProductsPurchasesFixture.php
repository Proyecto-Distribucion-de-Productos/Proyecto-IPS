<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProductsPurchasesFixture
 */
class ProductsPurchasesFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'purchase_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'provider_id' => ['type' => 'smallinteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'product_id' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'quantity' => ['type' => 'integer', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        '_indexes' => [
            'Relationship23' => ['type' => 'index', 'columns' => ['purchase_id', 'provider_id'], 'length' => []],
            'product_id' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
            'id' => ['type' => 'index', 'columns' => ['id'], 'length' => []],
            'provider_id' => ['type' => 'index', 'columns' => ['provider_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'products_purchases_ibfk_1' => ['type' => 'foreign', 'columns' => ['provider_id'], 'references' => ['providers', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'products_purchases_ibfk_2' => ['type' => 'foreign', 'columns' => ['purchase_id'], 'references' => ['purchases', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'products_purchases_ibfk_3' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['products', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8mb4_0900_ai_ci'
        ],
    ];
    // phpcs:enable
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
                'purchase_id' => 1,
                'provider_id' => 1,
                'product_id' => 1,
                'quantity' => 1,
            ],
        ];
        parent::init();
    }
}
