<?php
/**
 * @var \App\View\AppView $this
 * @var \Cake\Datasource\EntityInterface $consoleInvoiceFrequeny
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console Invoice Frequeny'), ['action' => 'edit', $consoleInvoiceFrequeny->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console Invoice Frequeny'), ['action' => 'delete', $consoleInvoiceFrequeny->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consoleInvoiceFrequeny->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Console Invoice Frequenies'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console Invoice Frequeny'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consoleInvoiceFrequenies view large-9 medium-8 columns content">
    <h3><?= h($consoleInvoiceFrequeny->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice Frequency Name') ?></th>
            <td><?= h($consoleInvoiceFrequeny->invoice_frequency_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consoleInvoiceFrequeny->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($consoleInvoiceFrequeny->status) ?></td>
        </tr>
    </table>
</div>
