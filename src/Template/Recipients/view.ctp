<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Recipient'), ['action' => 'edit', $recipient->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Recipient'), ['action' => 'delete', $recipient->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipient->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Recipients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipient'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="recipients view large-10 medium-9 columns">
    <h2><?= h($recipient->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Field1') ?></h6>
            <p><?= h($recipient->field1) ?></p>
            <h6 class="subheader"><?= __('Field2') ?></h6>
            <p><?= h($recipient->field2) ?></p>
            <h6 class="subheader"><?= __('Field3') ?></h6>
            <p><?= h($recipient->field3) ?></p>
            <h6 class="subheader"><?= __('Field4') ?></h6>
            <p><?= h($recipient->field4) ?></p>
            <h6 class="subheader"><?= __('Field5') ?></h6>
            <p><?= h($recipient->field5) ?></p>
            <h6 class="subheader"><?= __('Field6') ?></h6>
            <p><?= h($recipient->field6) ?></p>
            <h6 class="subheader"><?= __('Field7') ?></h6>
            <p><?= h($recipient->field7) ?></p>
            <h6 class="subheader"><?= __('Field8') ?></h6>
            <p><?= h($recipient->field8) ?></p>
            <h6 class="subheader"><?= __('Field9') ?></h6>
            <p><?= h($recipient->field9) ?></p>
            <h6 class="subheader"><?= __('Field10') ?></h6>
            <p><?= h($recipient->field10) ?></p>
            <h6 class="subheader"><?= __('State') ?></h6>
            <p><?= h($recipient->state) ?></p>
            <h6 class="subheader"><?= __('Campaign') ?></h6>
            <p><?= $recipient->has('campaign') ? $this->Html->link($recipient->campaign->subject, ['controller' => 'Campaigns', 'action' => 'view', $recipient->campaign->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($recipient->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($recipient->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($recipient->modified) ?></p>
        </div>
    </div>
</div>
