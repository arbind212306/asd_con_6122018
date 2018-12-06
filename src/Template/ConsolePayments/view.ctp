<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $consolePayment
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console Payment'), ['action' => 'edit', $consolePayment->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console Payment'), ['action' => 'delete', $consolePayment->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consolePayment->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Console Payments'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console Payment'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consolePayments view large-9 medium-8 columns content">
    <h3><?= h($consolePayment->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Payment Mode') ?></th>
            <td><?= h($consolePayment->payment_mode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consolePayment->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($consolePayment->status) ?></td>
        </tr>
    </table>
</div>
