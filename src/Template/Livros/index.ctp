<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro[]|\Cake\Collection\CollectionInterface $livros
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Livro') ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['action' => 'add']) ?></li>
        
        <li class="heading"><?= __('Empréstimo') ?></li>
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Empréstimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>

        <li class="heading"><?= __('Pessoa') ?></li>
        <li><?= $this->Html->link(__('Nova pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar pessoa'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>
</nav>
<div class="livros index large-9 medium-8 columns content">
    <h3><?= __('Livros') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nome') ?></th>
                <th scope="col"><?= $this->Paginator->sort('emprestimo') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($livros as $livro): ?>
            <tr>
                <td><?= $this->Number->format($livro->id) ?></td>
                <td><?= h($livro->nome) ?></td>
                <td><?php 
                    if($livro['emprestimo'] == false){
                        echo 'Disponível';
                    }else{
                        echo 'Indisponível';
                        
                    }
                ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $livro->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $livro->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
