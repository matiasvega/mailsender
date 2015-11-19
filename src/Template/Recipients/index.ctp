<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Recipient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="recipients index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('field1') ?></th>
            <th><?= $this->Paginator->sort('field2') ?></th>
            <th><?= $this->Paginator->sort('field3') ?></th>
            <th><?= $this->Paginator->sort('field4') ?></th>
            <th><?= $this->Paginator->sort('field5') ?></th>
            <th><?= $this->Paginator->sort('field6') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($recipients as $recipient): ?>
        <tr>
            <td><?= $this->Number->format($recipient->id) ?></td>
            <td><?= h($recipient->field1) ?></td>
            <td><?= h($recipient->field2) ?></td>
            <td><?= h($recipient->field3) ?></td>
            <td><?= h($recipient->field4) ?></td>
            <td><?= h($recipient->field5) ?></td>
            <td><?= h($recipient->field6) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $recipient->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $recipient->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $recipient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
