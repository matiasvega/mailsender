<?php
namespace App\Model\Table;

use App\Model\Entity\Recipient;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recipients Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Campaigns
 */
class RecipientsTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->table('recipients');
        $this->displayField('name');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Campaigns', [
            'foreignKey' => 'campaign_id',
            'joinType' => 'INNER'
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->add('id', 'valid', ['rule' => 'numeric'])
            ->allowEmpty('id', 'create');

        $validator
            ->allowEmpty('field1');

        $validator
            ->allowEmpty('field2');

        $validator
            ->allowEmpty('field3');

        $validator
            ->allowEmpty('field4');

        $validator
            ->allowEmpty('field5');

        $validator
            ->allowEmpty('field6');

        $validator
            ->allowEmpty('field7');

        $validator
            ->allowEmpty('field8');

        $validator
            ->allowEmpty('field9');

        $validator
            ->allowEmpty('field10');

        $validator
            ->allowEmpty('state');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['campaign_id'], 'Campaigns'));
        return $rules;
    }
}
