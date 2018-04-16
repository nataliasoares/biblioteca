<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * EmprestimosHasLivrosFixture
 *
 */
class EmprestimosHasLivrosFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id_livro' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'id_emprestimo' => ['type' => 'integer', 'length' => 10, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null, 'unsigned' => null, 'autoIncrement' => null],
        'dat_emprestimo' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        'dat_devolucao' => ['type' => 'date', 'length' => null, 'default' => null, 'null' => true, 'comment' => null, 'precision' => null],
        '_constraints' => [
            'emprestimos_has_livros_id_emprestimo_fkey' => ['type' => 'foreign', 'columns' => ['id_emprestimo'], 'references' => ['emprestimos', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'emprestimos_has_livros_id_livro_fkey' => ['type' => 'foreign', 'columns' => ['id_livro'], 'references' => ['livros', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id_livro' => 1,
            'id_emprestimo' => 1,
            'dat_emprestimo' => '2018-04-14',
            'dat_devolucao' => '2018-04-14'
        ],
    ];
}
