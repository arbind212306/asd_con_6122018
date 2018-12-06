<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\ConsoleInvoiceCycle $consoleInvoiceCycle
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Console Invoice Cycle'), ['action' => 'edit', $consoleInvoiceCycle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Console Invoice Cycle'), ['action' => 'delete', $consoleInvoiceCycle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $consoleInvoiceCycle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Console Invoice Cycles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Console Invoice Cycle'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="consoleInvoiceCycles view large-9 medium-8 columns content">
    <h3><?= h($consoleInvoiceCycle->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Invoice Cycle Name') ?></th>
            <td><?= h($consoleInvoiceCycle->invoice_cycle_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($consoleInvoiceCycle->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($consoleInvoiceCycle->status) ?></td>
        </tr>
    </table>
</div>
