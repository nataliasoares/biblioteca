<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo[]|\Cake\Collection\CollectionInterface $emprestimos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Empréstimo') ?></li>
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['action' => 'add']) ?></li>
        
        <li class="heading"><?= __('Livros') ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>

        <li class="heading"><?= __('Pessoa') ?></li>
        <li><?= $this->Html->link(__('Nova pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar pessoa'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    </ul>

</nav>
<div class="emprestimos index large-9 medium-8 columns content">
    <h3><?= __('Empréstimos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('pessoa_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('livro_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('datadev') ?></th>
                <th scope="col"><?= $this->Paginator->sort('dataemp') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($emprestimos as $emprestimo): ?>
            <tr>
                <td><?= $this->Number->format($emprestimo->id) ?></td>
                <td><?= $emprestimo->has('pessoa') ? $this->Html->link($emprestimo->pessoa->nome, ['controller' => 'Pessoas', 'action' => 'view', $emprestimo->pessoa->nome]) : '' ?></td>
                <td><?= $emprestimo->has('livro') ? $this->Html->link($emprestimo->livro->nome, ['controller' => 'Livros', 'action' => 'view', $emprestimo->livro->nome]) : '' ?></td>
                <td><?= h($emprestimo->datadev) ?></td>
                <td><?= h($emprestimo->dataemp) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['action' => 'view', $emprestimo->id]) ?>
                    <?= $this->Form->postLink(__('Devolver'), ['action' => 'devolver', $emprestimo->id], ['confirm' => __('Tem certeza que deseja devolver?')]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]) ?>
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
