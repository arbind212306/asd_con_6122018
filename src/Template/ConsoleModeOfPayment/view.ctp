<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsoleModeOfPayment $consoleModeOfPayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console Mode Of Payment'), ['action' => 'edit', $consoleModeOfPayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console Mode Of Payment'), ['action' => 'delete', $consoleModeOfPayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consoleModeOfPayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Console Mode Of Payment'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console Mode Of Payment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consoleModeOfPayment view large-9 medium-8 columns content">
    <h3><?= h($consoleModeOfPayment->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($consoleModeOfPayment->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consoleModeOfPayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($consoleModeOfPayment->status) ?></td>
        </tr>
    </table>
</div>
