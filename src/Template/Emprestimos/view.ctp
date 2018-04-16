<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>       
        <li><?= $this->Form->postLink(__('Deletar Empréstimo'), ['action' => 'delete', $emprestimo->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimo->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Empréstimos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Pessoas'), ['controller' => 'Pessoas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Nova Pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="emprestimos view large-9 medium-8 columns content">
    <h3><?= h($emprestimo->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Pessoa') ?></th>
            <td><?= $emprestimo->has('pessoa') ? $this->Html->link($emprestimo->pessoa->id, ['controller' => 'Pessoas', 'action' => 'view', $emprestimo->pessoa->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Livro') ?></th>
            <td><?= $emprestimo->has('livro') ? $this->Html->link($emprestimo->livro->id, ['controller' => 'Livros', 'action' => 'view', $emprestimo->livro->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($emprestimo->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Datadev') ?></th>
            <td><?= h($emprestimo->datadev) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Dataemp') ?></th>
            <td><?= h($emprestimo->dataemp) ?></td>
        </tr>
    </table>
</div>
