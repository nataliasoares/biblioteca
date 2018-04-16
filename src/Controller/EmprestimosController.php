<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;

/**
 * Emprestimos Controller
 *
 * @property \App\Model\Table\EmprestimosTable $Emprestimos
 *
 * @method \App\Model\Entity\Emprestimo[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class EmprestimosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */

    public function index()
    {
        $this->paginate = [
            'contain' => ['Pessoas', 'Livros']
        ];
        $emprestimos = $this->paginate($this->Emprestimos);

        $this->set(compact('emprestimos'));
    }

//    private function getLivros(){
//        $livros = $this->Emprestimos->Livros->find('list',['keyField'=>'id','valueField'=>'nome']);
//        $this->set(compact($livros));
//    }
//    
//    private function getPessoas(){
//        $pessoa = $this->Emprestimos->Pessoas->find('list',['keyField'=>'id','valueField'=>'nome']);
//        $this->set(compact($pessoa));
//    }
    /**
     * View method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => ['Pessoas', 'Livros']
        ]);

        $this->set('emprestimo', $emprestimo);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $emprestimo = $this->Emprestimos->newEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $pessoa = $data['pessoa_id'];
            $data_emprestimo = date('Y-m-d');
            $cont = 0;
            $save = 0;

            foreach ($data['livros_id'] as $value) {
                if($cont >= 1){
                    $emprestimo = $this->Emprestimos->newEntity();
                }
                $cont++;
                $dados = array( "pessoa_id" => $pessoa,"dataemp" => $data_emprestimo, "livro_id" => $value);
                $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $dados);
                if ($this->Emprestimos->save($emprestimo)) {
                    $save++;
                    
                    $livroTable = TableRegistry::get('Livros');
                    $livros = $livroTable->get($value);

                    $livros->emprestimo = true;
                    $livroTable->save($livros);

                }
            }
            if ($cont == $save) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }

        $pessoas = $this->Emprestimos->Pessoas->find('list',['keyField'=>'id','valueField'=>'nome']);
        $livros = $this->Emprestimos->Livros->find('list', array(
        'keyField' => 'id',
        'valueField' => ['nome'],
        'conditions' => array('Livros.emprestimo !=' => true),
        'recursive' => 0
    ));
        $this->set(compact('emprestimo', 'pessoas', 'livros'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $emprestimo = $this->Emprestimos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $emprestimo = $this->Emprestimos->patchEntity($emprestimo, $this->request->getData());
            if ($this->Emprestimos->save($emprestimo)) {
                $this->Flash->success(__('The emprestimo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The emprestimo could not be saved. Please, try again.'));
        }
        $pessoas = $this->Emprestimos->Pessoas->find('list', ['limit' => 200]);
        $livros = $this->Emprestimos->Livros->find('list', ['limit' => 200]);
        
        $this->set(compact('emprestimo', 'pessoas', 'livros'));
    }
    
    /**
     * Delete method
     *
     * @param string|null $id Emprestimo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function devolver($id = null)
    {
        $this->request->allowMethod(['post', 'devolver']);
        $emprestimo = $this->Emprestimos->get($id);
        $livro_id = $emprestimo['livro_id'];
        $data_dev = date('Y-m-d');
            $livroTable = TableRegistry::get('Livros');
            $livros = $livroTable->get($livro_id);
            $livros->emprestimo = false;
            if($livroTable->save($livros)){
                $emprestimo->datadev = $data_dev;
                $this->Emprestimos->save($emprestimo);
                
                $this->Flash->success(__('O Livro foi devolvido com sucesso.'));
            }else{
                $this->Flash->error(__('Ocorreu um erro ao devolver o livro'));
            }

        return $this->redirect(['action' => 'index']);
    }
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $emprestimo = $this->Emprestimos->get($id);
        $livro_id = $emprestimo['livro_id'];
        if ($this->Emprestimos->delete($emprestimo)) {
            $livroTable = TableRegistry::get('Livros');
            $livros = $livroTable->get($livro_id);
            $livros->emprestimo = false;
            $livroTable->save($livros);
            $this->Flash->success(__('The emprestimo has been deleted.'));
        } else {
            $this->Flash->error(__('The emprestimo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
