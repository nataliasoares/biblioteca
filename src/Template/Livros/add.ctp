<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Livro') ?></li>
        <li><?= $this->Html->link(__('Listar Livro'), ['action' => 'index']) ?></li>
        
        <li class="heading"><?= __('Empréstimo') ?></li>
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Empréstimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?></li>

        <li class="heading"><?= __('Pessoa') ?></li>
        <li><?= $this->Html->link(__('Nova pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar pessoa'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    
    </ul>
</nav>
<div class="livros form large-9 medium-8 columns content">
    <?= $this->Form->create($livro) ?>
    <fieldset>
        <legend><?= __('Add Livro') ?></legend>
        <?php
            echo $this->Form->control('nome');
            //echo $this->Form->control('emprestimo');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
