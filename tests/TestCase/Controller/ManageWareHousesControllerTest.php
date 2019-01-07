<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ManageWareHousesController;
use Cake\TestSuite\IntegrationTestCase;

/**
 * App\Controller\ManageWareHousesController Test Case
 */
class ManageWareHousesControllerTest extends IntegrationTestCase
{

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.manage_warehouse',
        'app.warehouse'
    ];

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
     * Test beforeFilter method
     *
     * @return void
     */
    public function testBeforeFilter()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test quanlikho method
     *
     * @return void
     */
    public function testQuanlikho()
    {
        $result = $this->get('/ManageWareHouses/quanlikho');
        $this->assertResponseOk();
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test chitietkho method
     *
     * @return void
     */
    public function testChitietkho()
    {
        $makho = 1;
        $result = $this->get('/ManageWareHouses/chitietkho' . $makho);
        $this->assertResponseOk();
        $this->markTestIncomplete('Not implemented yet.');
    }
}
