<?php
//d($campaign['fields']);
?>
<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('List Campaigns'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Clients'), ['controller' => 'Clients', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Client'), ['controller' => 'Clients', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="campaigns form large-10 medium-9 columns">
    <?= $this->Form->create($campaign) ?>
    <fieldset>
        <legend><?= __('Add Message') ?></legend>
        
        <?php
            $fields = array();
            foreach ($campaign['fields'] as $field) {
                $fields[$field['name']] = sprintf('[#%s]', $field['description']);
            }
            echo sprintf('<div> Podés usar las siguientes variables en tu plantilla para personalizar el envió: %s </div>', implode(' , ', $fields));

            echo $this->Form->input('subject');
            echo $this->Form->input('html');
            echo $this->Form->input('recipients_field', ['options' => $fields]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
