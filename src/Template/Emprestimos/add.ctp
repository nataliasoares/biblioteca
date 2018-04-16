<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Emprestimo $emprestimo
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Empréstimo') ?></li>
        <li><?= $this->Html->link(__('Listar Empréstimo'), ['action' => 'index']) ?></li>
        
        <li class="heading"><?= __('Livros') ?></li>
        <li><?= $this->Html->link(__('Novo Livro'), ['controller' => 'Livros', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar Livros'), ['controller' => 'Livros', 'action' => 'index']) ?></li>

        <li class="heading"><?= __('Pessoa') ?></li>
        <li><?= $this->Html->link(__('Nova pessoa'), ['controller' => 'Pessoas', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Listar pessoa'), ['controller' => 'Pessoas', 'action' => 'index']) ?></li>
    
    </ul>
</nav>
<div class="emprestimos form large-9 medium-8 columns content">
    <?= $this->Form->create($emprestimo) ?>
    <fieldset>
        <legend><?= __('Adicionar Emprestimo') ?></legend>
        <?php
            
            echo $this->Form->control('pessoa_id', ['options' => $pessoas]);
//            echo $this->Form->control('datadev', ['empty' => true]);
//            echo $this->Form->control('dataemp', ['empty' => true]);
            echo $this->Form->input('livros_id', array('multiple' => true, 'options' => $livros));
//            echo $this->Form->input('livros._ids', ['options'=>$livros]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
