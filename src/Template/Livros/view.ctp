<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Livro $livro
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Ação') ?></li>
        <li><?= $this->Html->link(__('Editar Livro'), ['action' => 'edit', $livro->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Deletar Livro'), ['action' => 'delete', $livro->id], ['confirm' => __('Are you sure you want to delete # {0}?', $livro->id)]) ?> </li>
        <li><?= $this->Html->link(__('Listar Livros'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Livro'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('Listar Empréstimos'), ['controller' => 'Emprestimos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('Novo Empréstimo'), ['controller' => 'Emprestimos', 'action' => 'add']) ?> </li>
        <li class="heading"><?= __('Pessoa') ?></li>
        <li class="heading"><?php echo $this->Html->link( "Pessoateste",   array('controller' => 'Pessoas', 'action' => 'index') ); ?></li>
        
    
    </ul>
</nav>
<div class="livros view large-9 medium-8 columns content">
    <h3><?= h($livro->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Nome') ?></th>
            <td><?= h($livro->nome) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($livro->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Emprestimo') ?></th>
            <td><?= $livro->emprestimo ? __('Yes') : __('No'); ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Emprestimos') ?></h4>
        <?php if (!empty($livro->emprestimos)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Pessoa Id') ?></th>
                <th scope="col"><?= __('Datadev') ?></th>
                <th scope="col"><?= __('Dataemp') ?></th>
                <th scope="col"><?= __('Livro Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($livro->emprestimos as $emprestimos): ?>
            <tr>
                <td><?= h($emprestimos->id) ?></td>
                <td><?= h($emprestimos->pessoa_id) ?></td>
                <td><?= h($emprestimos->datadev) ?></td>
                <td><?= h($emprestimos->dataemp) ?></td>
                <td><?= h($emprestimos->livro_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Ver'), ['controller' => 'Emprestimos', 'action' => 'view', $emprestimos->id]) ?>
                    <?= $this->Html->link(__('Editar'), ['controller' => 'Emprestimos', 'action' => 'edit', $emprestimos->id]) ?>
                    <?= $this->Form->postLink(__('Deletar'), ['controller' => 'Emprestimos', 'action' => 'delete', $emprestimos->id], ['confirm' => __('Are you sure you want to delete # {0}?', $emprestimos->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
