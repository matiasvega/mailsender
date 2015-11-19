<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Client'), ['action' => 'edit', $client->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Client'), ['action' => 'delete', $client->id], ['confirm' => __('Are you sure you want to delete # {0}?', $client->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Clients'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Client'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Campaigns'), ['controller' => 'Campaigns', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Campaign'), ['controller' => 'Campaigns', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="clients view large-10 medium-9 columns">
    <h2><?= h($client->name) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Name') ?></h6>
            <p><?= h($client->name) ?></p>
            <h6 class="subheader"><?= __('Address') ?></h6>
            <p><?= h($client->address) ?></p>
            <h6 class="subheader"><?= __('Telephone') ?></h6>
            <p><?= h($client->telephone) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($client->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($client->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($client->modified) ?></p>
        </div>
    </div>
</div>
<div class="related row">
    <div class="column large-12">
    <h4 class="subheader"><?= __('Related Campaigns') ?></h4>
    <?php if (!empty($client->campaigns)): ?>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?= __('Id') ?></th>
            <th><?= __('Mailfrom') ?></th>
            <th><?= __('Subject') ?></th>
            <th><?= __('StartDate') ?></th>
            <th><?= __('EndDate') ?></th>
            <th><?= __('Recipients File') ?></th>
            <th><?= __('Html') ?></th>
            <th><?= __('Created') ?></th>
            <th><?= __('Modified') ?></th>
            <th><?= __('Client Id') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
        <?php foreach ($client->campaigns as $campaigns): ?>
        <tr>
            <td><?= h($campaigns->id) ?></td>
            <td><?= h($campaigns->mailfrom) ?></td>
            <td><?= h($campaigns->subject) ?></td>
            <td><?= h($campaigns->startDate) ?></td>
            <td><?= h($campaigns->endDate) ?></td>
            <td><?= h($campaigns->recipients_file) ?></td>
            <td><?= h($campaigns->html) ?></td>
            <td><?= h($campaigns->created) ?></td>
            <td><?= h($campaigns->modified) ?></td>
            <td><?= h($campaigns->client_id) ?></td>

            <td class="actions">
                <?= $this->Html->link(__('View'), ['controller' => 'Campaigns', 'action' => 'view', $campaigns->id]) ?>

                <?= $this->Html->link(__('Edit'), ['controller' => 'Campaigns', 'action' => 'edit', $campaigns->id]) ?>

                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Campaigns', 'action' => 'delete', $campaigns->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaigns->id)]) ?>

            </td>
        </tr>

        <?php endforeach; ?>
    </table>
    <?php endif; ?>
    </div>
</div>
