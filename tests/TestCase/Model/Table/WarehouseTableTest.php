<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WarehouseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WarehouseTable Test Case
 */
class WarehouseTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\WarehouseTable     */
    public $Warehouse;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.warehouse'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Warehouse') ? [] : ['className' => WarehouseTable::class];        $this->Warehouse = TableRegistry::get('Warehouse', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Warehouse);

        parent::tearDown();
    }

    /**
     * Test initial setup
     *
     * @return void
     */
    public function testInitialization()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
