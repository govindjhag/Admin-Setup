<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ArtsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ArtsTable Test Case
 */
class ArtsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\ArtsTable
     */
    public $Arts;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.arts',
        'app.categories',
        'app.users'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Arts') ? [] : ['className' => 'App\Model\Table\ArtsTable'];
        $this->Arts = TableRegistry::get('Arts', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Arts);

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
