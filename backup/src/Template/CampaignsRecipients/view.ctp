<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Campaigns Recipient'), ['action' => 'edit', $campaignsRecipient->campaign_id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campaigns Recipient'), ['action' => 'delete', $campaignsRecipient->campaign_id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsRecipient->campaign_id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns Recipients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaigns Recipient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipients'), ['controller' => 'Recipients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipient'), ['controller' => 'Recipients', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="campaignsRecipients view large-10 medium-9 columns">
    <h2><?= h($campaignsRecipient->campaign_id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Campaign') ?></h6>
            <p><?= $campaignsRecipient->has('campaign') ? $this->Html->link($campaignsRecipient->campaign->name, ['controller' => 'Campaigns', 'action' => 'view', $campaignsRecipient->campaign->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Recipient') ?></h6>
            <p><?= $campaignsRecipient->has('recipient') ? $this->Html->link($campaignsRecipient->recipient->name, ['controller' => 'Recipients', 'action' => 'view', $campaignsRecipient->recipient->id]) : '' ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($campaignsRecipient->state) ?></p>
        </div>
    </div>
</div>
