<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProvidersFixture
 */
class ProvidersFixture extends TestFixture
{
    /**
     * Fields
     *
     * @var array
     */
    // phpcs:disable
    public $fields = [
        'id' => ['type' => 'smallinteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'name' => ['type' => 'string', 'length' => 38, 'null' => false, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'email' => ['type' => 'char', 'length' => 20, 'null' => true, 'default' => null, 'collate' => 'utf8mb4_0900_ai_ci', 'comment' => '', 'precision' => null],
        'district_id' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'province_id' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'department_id' => ['type' => 'tinyinteger', 'length' => null, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'IX_Relationship41' => ['type' => 'index', 'columns' => ['district_id', 'province_id', 'department_id'], 'length' => []],
            'province_id' => ['type' => 'index', 'columns' => ['province_id'], 'length' => []],
            'department_id' => ['type' => 'index', 'columns' => ['department_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'ProveCod' => ['type' => 'unique', 'columns' => ['id'], 'length' => []],
            'ProveNam' => ['type' => 'unique', 'columns' => ['name'], 'length' => []],
            'providers_ibfk_1' => ['type' => 'foreign', 'columns' => ['district_id'], 'references' => ['districts', 'id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'providers_ibfk_2' => ['type' => 'foreign', 'columns' => ['province_id'], 'references' => ['districts', 'province_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
            'providers_ibfk_3' => ['type' => 'foreign', 'columns' => ['department_id'], 'references' => ['districts', 'department_id'], 'update' => 'cascade', 'delete' => 'restrict', 'length' => []],
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
                'name' => 'Lorem ipsum dolor sit amet',
                'email' => '',
                'district_id' => 1,
                'province_id' => 1,
                'department_id' => 1,
            ],
        ];
        parent::init();
    }
}
