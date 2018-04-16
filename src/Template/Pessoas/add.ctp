<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Pessoa $pessoa
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Pessoa') ?></li>
        <li><?= $this->Html->link(__('Listar Pessoa'), ['action' => 'index']) ?></li>
        
        <li class="heading"><?= __('Empréstimo') ?></li>
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Empréstimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>

        <li class="heading"><?= __('Livros') ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>

    </ul>
</nav>
<div class="pessoas form large-9 medium-8 columns content">
    <?= $this->Form->create($pessoa) ?>
    <fieldset>
        <legend><?= __('Adicionar Pessoa') ?></legend>
        <?php
            echo $this->Form->control('nome');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
