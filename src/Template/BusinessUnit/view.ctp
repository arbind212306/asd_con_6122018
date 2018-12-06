<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\BusinessUnit $businessUnit
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Business Unit'), ['action' => 'edit', $businessUnit->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Business Unit'), ['action' => 'delete', $businessUnit->id], ['confirm' => __('Are you sure you want to delete # {0}?', $businessUnit->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Business Unit'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Business Unit'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="businessUnit view large-9 medium-8 columns content">
    <h3><?= h($businessUnit->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Bu Name') ?></th>
            <td><?= h($businessUnit->bu_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($businessUnit->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($businessUnit->status) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Bu Desc') ?></h4>
        <?= $this->Text->autoParagraph(h($businessUnit->bu_desc)); ?>
    </div>
</div>
