<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Campaign'), ['action' => 'edit', $campaign->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Campaign'), ['action' => 'delete', $campaign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Fields'), ['controller' => 'Fields', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Field'), ['controller' => 'Fields', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Recipients'), ['controller' => 'Recipients', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Recipient'), ['controller' => 'Recipients', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="campaigns view large-10 medium-9 columns">
    <h2><?= h($campaign->subject) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Mailfrom') ?></h6>
            <p><?= h($campaign->mailfrom) ?></p>
            <h6 class="subheader"><?= __('Subject') ?></h6>
            <p><?= h($campaign->subject) ?></p>
            <h6 class="subheader"><?= __('Recipients File') ?></h6>
            <p><?= h($campaign->recipients_file) ?></p>
            <h6 class="subheader"><?= __('Recipients Field') ?></h6>
            <p><?= h($campaign->recipients_field) ?></p>
            <h6 class="subheader"><?= __('Client') ?></h6>
            <p><?= $campaign->has('client') ? $this->Html->link($campaign->client->name, ['controller' => 'Clients', 'action' => 'view', $campaign->client->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($campaign->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('StartDate') ?></h6>
            <p><?= h($campaign->startDate) ?></p>
            <h6 class="subheader"><?= __('EndDate') ?></h6>
            <p><?= h($campaign->endDate) ?></p>
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($campaign->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($campaign->modified) ?></p>
        </div>
    </div>
    <div class="row texts">
        <div class="columns large-9">
            <h6 class="subheader"><?= __('Html') ?></h6>
            <?= $this->Text->autoParagraph(h($campaign->html)) ?>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Fields') ?></h4>
    <?php if (!empty($campaign->fields)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Name') ?></th>
            <th><?= __('Description') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Campaign Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($campaign->fields as $fields): ?>
        <tr>
            <td><?= h($fields->id) ?></td>
            <td><?= h($fields->name) ?></td>
            <td><?= h($fields->description) ?></td>
            <td><?= h($fields->created) ?></td>
            <td><?= h($fields->modified) ?></td>
            <td><?= h($fields->campaign_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Fields', 'action' => 'view', $fields->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Fields', 'action' => 'edit', $fields->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Fields', 'action' => 'delete', $fields->id], ['confirm' => __('Are you sure you want to delete # {0}?', $fields->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Recipients') ?></h4>
    <?php if (!empty($campaign->recipients)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Field1') ?></th>
            <th><?= __('Field2') ?></th>
            <th><?= __('Field3') ?></th>
            <th><?= __('Field4') ?></th>
            <th><?= __('Field5') ?></th>
            <th><?= __('Field6') ?></th>
            <th><?= __('Field7') ?></th>
            <th><?= __('Field8') ?></th>
            <th><?= __('Field9') ?></th>
            <th><?= __('Field10') ?></th>
            <th><?= __('State') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Campaign Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($campaign->recipients as $recipients): ?>
        <tr>
            <td><?= h($recipients->id) ?></td>
            <td><?= h($recipients->field1) ?></td>
            <td><?= h($recipients->field2) ?></td>
            <td><?= h($recipients->field3) ?></td>
            <td><?= h($recipients->field4) ?></td>
            <td><?= h($recipients->field5) ?></td>
            <td><?= h($recipients->field6) ?></td>
            <td><?= h($recipients->field7) ?></td>
            <td><?= h($recipients->field8) ?></td>
            <td><?= h($recipients->field9) ?></td>
            <td><?= h($recipients->field10) ?></td>
            <td><?= h($recipients->state) ?></td>
            <td><?= h($recipients->created) ?></td>
            <td><?= h($recipients->modified) ?></td>
            <td><?= h($recipients->campaign_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Recipients', 'action' => 'view', $recipients->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Recipients', 'action' => 'edit', $recipients->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Recipients', 'action' => 'delete', $recipients->id], ['confirm' => __('Are you sure you want to delete # {0}?', $recipients->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
