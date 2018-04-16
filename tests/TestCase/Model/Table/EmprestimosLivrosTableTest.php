<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\EmprestimosLivrosTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\EmprestimosLivrosTable Test Case
 */
class EmprestimosLivrosTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\EmprestimosLivrosTable
     */
    public $EmprestimosLivros;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.emprestimos_livros'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('EmprestimosLivros') ? [] : ['className' => EmprestimosLivrosTable::class];
        $this->EmprestimosLivros = TableRegistry::get('EmprestimosLivros', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->EmprestimosLivros);

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
