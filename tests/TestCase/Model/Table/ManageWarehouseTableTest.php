<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ManageWarehouseTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ManageWarehouseTable Test Case
 */
class ManageWarehouseTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\ManageWarehouseTable     */
    public $ManageWarehouse;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.manage_warehouse'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('ManageWarehouse') ? [] : ['className' => ManageWarehouseTable::class];        $this->ManageWarehouse = TableRegistry::get('ManageWarehouse', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->ManageWarehouse);

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
