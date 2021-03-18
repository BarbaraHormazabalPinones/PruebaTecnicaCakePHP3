<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\DuenosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\DuenosTable Test Case
 */
class DuenosTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\DuenosTable
     */
    public $Duenos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.Duenos',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::getTableLocator()->exists('Duenos') ? [] : ['className' => DuenosTable::class];
        $this->Duenos = TableRegistry::getTableLocator()->get('Duenos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Duenos);

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
