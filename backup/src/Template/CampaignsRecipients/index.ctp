<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Campaigns Recipient'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipients'), ['controller' => 'Recipients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipient'), ['controller' => 'Recipients', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="campaignsRecipients index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('campaign_id') ?></th>
            <th><?= $this->Paginator->sort('recipient_id') ?></th>
            <th><?= $this->Paginator->sort('state') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($campaignsRecipients as $campaignsRecipient): ?>
        <tr>
            <td>
                <?= $campaignsRecipient->has('campaign') ? $this->Html->link($campaignsRecipient->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $campaignsRecipient->campaign->id]) : '' ?>
            </td>
            <td>
                <?= $campaignsRecipient->has('recipient') ? $this->Html->link($campaignsRecipient->recipient->name, ['controller' => 'Recipients', 'action' => 'view', $campaignsRecipient->recipient->id]) : '' ?>
            </td>
            <td><?= h($campaignsRecipient->state) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $campaignsRecipient->campaign_id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campaignsRecipient->campaign_id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campaignsRecipient->campaign_id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsRecipient->campaign_id)]) ?>
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
