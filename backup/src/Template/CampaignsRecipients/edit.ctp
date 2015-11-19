<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $campaignsRecipient->campaign_id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $campaignsRecipient->campaign_id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Campaigns Recipients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Recipients'), ['controller' => 'Recipients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Recipient'), ['controller' => 'Recipients', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="campaignsRecipients form large-10 medium-9 columns">
    <?= $this->Form->create($campaignsRecipient) ?>
    <fieldset>
        <legend><?= __('Edit Campaigns Recipient') ?></legend>
        <?php
            echo $this->Form->input('state');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
