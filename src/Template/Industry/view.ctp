<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Industry $industry
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Industry'), ['action' => 'edit', $industry->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Industry'), ['action' => 'delete', $industry->id], ['confirm' => __('Are you sure you want to delete # {0}?', $industry->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Industry'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Industry'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="industry view large-9 medium-8 columns content">
    <h3><?= h($industry->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Industry Name') ?></th>
            <td><?= h($industry->industry_name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($industry->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Business Id') ?></th>
            <td><?= $this->Number->format($industry->business_id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($industry->status) ?></td>
        </tr>
    </table>
</div>
