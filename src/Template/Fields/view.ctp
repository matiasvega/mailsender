<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Field'), ['action' => 'edit', $field->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Field'), ['action' => 'delete', $field->id], ['confirm' => __('Are you sure you want to delete # {0}?', $field->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Fields'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Field'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="fields view large-10 medium-9 columns">
    <h2><?= h($field->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($field->name) ?></p>
            <h6 class="subheader"><?= __('Description') ?></h6>
            <p><?= h($field->description) ?></p>
            <h6 class="subheader"><?= __('Campaign') ?></h6>
            <p><?= $field->has('campaign') ? $this->Html->link($field->campaign->subject, ['controller' => 'Campaigns', 'action' => 'view', $field->campaign->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($field->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($field->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($field->modified) ?></p>
        </div>
    </div>
</div>
