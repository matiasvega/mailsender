<!--<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Campaign'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</div>-->

<div class="col-lg-12">
    <h1 class="page-header">
        <?= __('Campaigns') ?>
        <small> Created campaigns </small>
    </h1>
    <ol class="breadcrumb">
        <li>
            <i class="fa fa-dashboard"></i>  <a href="index.html">Dashboard</a>
        </li>
        <li class="active">
            <i class="fa fa-file"></i> <?= __('Campaigns') ?>
        </li>
    </ol>



    <div class="campaigns index large-10 medium-9 columns">
        <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-striped">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('mailfrom') ?></th>
                <th><?= $this->Paginator->sort('subject') ?></th>
                <th><?= $this->Paginator->sort('startDate') ?></th>
                <th><?= $this->Paginator->sort('endDate') ?></th>
                <th><?= $this->Paginator->sort('recipients') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
        <?php foreach ($campaigns as $campaign): ?>
            <tr>
                <td><?= $this->Number->format($campaign->id) ?></td>
                <td><?= h($campaign->mailfrom) ?></td>
                <td><?= h($campaign->subject) ?></td>
                <td><?= h($campaign->startDate) ?></td>
                <td><?= h($campaign->endDate) ?></td>
                <td><?= h($campaign->recipients) ?></td>
                <td><?= h($campaign->created) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('Message'), ['action' => 'message', $campaign->id]) ?>
                    <?= $this->Html->link(__('Send'), ['action' => 'send', $campaign->id]) ?>
                    <?= $this->Html->link(__('View'), ['action' => 'view', $campaign->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $campaign->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $campaign->id], ['confirm' => __('Are you sure you want to delete # {0}?', $campaign->id)]) ?>
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
</div>
