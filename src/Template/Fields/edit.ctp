<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $field->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $field->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Fields'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="fields form large-10 medium-9 columns">
    <?= $this->Form->create($field) ?>
    <fieldset>
        <legend><?= __('Edit Field') ?></legend>
        <?php
            echo $this->Form->input('name');
            echo $this->Form->input('description');
            echo $this->Form->input('campaign_id', ['options' => $campaigns]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
