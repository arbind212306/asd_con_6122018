<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $consoleNoOfUser
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console No Of User'), ['action' => 'edit', $consoleNoOfUser->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console No Of User'), ['action' => 'delete', $consoleNoOfUser->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consoleNoOfUser->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Console No Of User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console No Of User'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consoleNoOfUser view large-9 medium-8 columns content">
    <h3><?= h($consoleNoOfUser->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($consoleNoOfUser->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consoleNoOfUser->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($consoleNoOfUser->status) ?></td>
        </tr>
    </table>
</div>
