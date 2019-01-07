<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AcountsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AcountsTable Test Case
 */
class AcountsTableTest extends TestCase
{

    /**
     * Test subject     *
     * @var \App\Model\Table\AcountsTable     */
    public $Acounts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.acounts',
        'app.users',
        'app.roles'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Acounts') ? [] : ['className' => AcountsTable::class];        $this->Acounts = TableRegistry::get('Acounts', $config);    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Acounts);

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
