<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ManageWarehouseFixture
 *
 */
class ManageWarehouseFixture extends TestFixture
{

    /**
     * Table name
     *
     * @var string
     */
    public $table = 'manage_warehouse';

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'manage_wh_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'wh_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'product_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'amount' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'created_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        'updated_at' => ['type' => 'datetime', 'length' => null, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null],
        '_indexes' => [
            'fk_warehouse' => ['type' => 'index', 'columns' => ['wh_id'], 'length' => []],
            'fk_manage_product' => ['type' => 'index', 'columns' => ['product_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['manage_wh_id'], 'length' => []],
            'fk_manage_product' => ['type' => 'foreign', 'columns' => ['product_id'], 'references' => ['product', 'product_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
            'fk_warehouse' => ['type' => 'foreign', 'columns' => ['wh_id'], 'references' => ['warehouse', 'wh_id'], 'update' => 'restrict', 'delete' => 'restrict', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'manage_wh_id' => 1,
            'wh_id' => 1,
            'product_id' => 1,
            'amount' => 1,
            'created_at' => '2018-12-01 14:25:00',
            'updated_at' => '2018-12-01 14:25:00'
        ],
    ];
}
