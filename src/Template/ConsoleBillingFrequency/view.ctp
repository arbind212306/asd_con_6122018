<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $consoleBillingFrequency
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console Billing Frequency'), ['action' => 'edit', $consoleBillingFrequency->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console Billing Frequency'), ['action' => 'delete', $consoleBillingFrequency->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consoleBillingFrequency->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Console Billing Frequency'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console Billing Frequency'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consoleBillingFrequency view large-9 medium-8 columns content">
    <h3><?= h($consoleBillingFrequency->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($consoleBillingFrequency->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consoleBillingFrequency->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($consoleBillingFrequency->status) ?></td>
        </tr>
    </table>
</div>
