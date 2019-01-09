<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ManageWareHousesController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\ORM\TableRegistry;
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
    //vendor/bin/phpunit tests/TestCase/Controller/ManageWareHousesControllerTest.php
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
        $this->get('/ManageWareHouses/chitietkho/');
        $makho = 1;
        $result = $this->get('/ManageWareHouses/chitietkho/' . $makho);
        if(!empty($makho)){
            $this->assertResponseOk();
        }
    }

    /**
     * Test ChitietkhoIdNotExits method
     *
     * @return void
     */
    public function testChitietkhoIdNotExits(){
        $this->get('/ManageWareHouses/chitietkho/');
        $makho = '';
        $result = $this->get('/ManageWareHouses/chitietkho/' . $makho);
        if(empty($makho)){
            $this->assertResponseError();
        }
    }
}
