<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmprestimosHasLivrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmprestimosHasLivrosTable Test Case
 */
class EmprestimosHasLivrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmprestimosHasLivrosTable
     */
    public $EmprestimosHasLivros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emprestimos_has_livros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmprestimosHasLivros') ? [] : ['className' => EmprestimosHasLivrosTable::class];
        $this->EmprestimosHasLivros = TableRegistry::get('EmprestimosHasLivros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmprestimosHasLivros);

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
}
