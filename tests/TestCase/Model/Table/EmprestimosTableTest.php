<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmprestimosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmprestimosTable Test Case
 */
class EmprestimosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmprestimosTable
     */
    public $Emprestimos;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emprestimos',
        'app.pessoas',
        'app.empresimos',
        'app.livros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Emprestimos') ? [] : ['className' => EmprestimosTable::class];
        $this->Emprestimos = TableRegistry::get('Emprestimos', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Emprestimos);

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
