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
        'app.manage_warehouse',
        'app.manage_whs',
        'app.warehouse',
        'app.product'
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
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
