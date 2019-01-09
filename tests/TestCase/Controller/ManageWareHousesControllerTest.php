<?php
namespace App\Test\TestCase\Controller;

use App\Controller\ManageWareHousesController;
use Cake\TestSuite\IntegrationTestCase;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\ORM\TableRegistry;
use Cake\Core\Configure;
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
        $result = $this->get('/manage-ware-houses/quanlikho');
        $this->assertResponseOk();
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test that missing template renders 404 page in production
     *
     * @return void
     */
    public function testQuanlikhoMissingTemplate()
    {
        Configure::write('debug', false);
        $this->get('/manage-ware-houses/quanlikho');

        $this->assertResponseError();
        $this->assertResponseContains('Error');
    }
    /**
     * Test chitietkho method
     *
     * @return void
     */
    public function testChitietkho()
    {
        $this->get('/manage-ware-houses/chitietkho/');
        $makho = 1;
        $result = $this->get('/manage-ware-houses/chitietkho/' . $makho);
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
        $this->get('/manage-ware-houses/chitietkho/');
        $makho = '';
        $result = $this->get('/manage-ware-houses/chitietkho/' . $makho);
        if(empty($makho)){
            $this->assertResponseError();
        }
    }

    /**
     * Test that missing template renders 404 page in production
     *
     * @return void
     */
    public function testChitietkhoMissingTemplate()
    {
        Configure::write('debug', false);
        $makho = 1;
        $this->get('/manage-ware-houses/chitietkho/' . $makho);

        $this->assertResponseError();
        $this->assertResponseContains('Error');
    }
}
