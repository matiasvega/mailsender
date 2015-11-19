<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $recipient->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Recipients'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="recipients form large-10 medium-9 columns">
    <?= $this->Form->create($recipient) ?>
    <fieldset>
        <legend><?= __('Edit Recipient') ?></legend>
        <?php
            echo $this->Form->input('field1');
            echo $this->Form->input('field2');
            echo $this->Form->input('field3');
            echo $this->Form->input('field4');
            echo $this->Form->input('field5');
            echo $this->Form->input('field6');
            echo $this->Form->input('field7');
            echo $this->Form->input('field8');
            echo $this->Form->input('field9');
            echo $this->Form->input('field10');
            echo $this->Form->input('state');
            echo $this->Form->input('campaign_id', ['options' => $campaigns]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
