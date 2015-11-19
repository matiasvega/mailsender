<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * CampaignsRecipientsFixture
 *
 */
class CampaignsRecipientsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'campaign_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'recipient_id' => ['type' => 'integer', 'length' => 10, 'unsigned' => true, 'null' => false, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'state' => ['type' => 'string', 'length' => 45, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'fk_campaigns_has_recipients_recipients1_idx' => ['type' => 'index', 'columns' => ['recipient_id'], 'length' => []],
            'fk_campaigns_has_recipients_campaigns1_idx' => ['type' => 'index', 'columns' => ['campaign_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['campaign_id', 'recipient_id'], 'length' => []],
            'fk_campaigns_has_recipients_campaigns1' => ['type' => 'foreign', 'columns' => ['campaign_id'], 'references' => ['campaigns', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'fk_campaigns_has_recipients_recipients1' => ['type' => 'foreign', 'columns' => ['recipient_id'], 'references' => ['recipients', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'campaign_id' => 1,
            'recipient_id' => 1,
            'state' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
