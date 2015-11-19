<?php
namespace App\Model\Table;

use App\Model\Entity\Campaign;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Campaigns Model
 *
 * @property \Cake\ORM\Association\BelongsTo $Clients
 * @property \Cake\ORM\Association\HasMany $Fields
 * @property \Cake\ORM\Association\HasMany $Recipients
 */
class CampaignsTable extends Table
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

        $this->table('campaigns');
        $this->displayField('subject');
        $this->primaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('Clients', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
        $this->hasMany('Fields', [
            'foreignKey' => 'campaign_id'
        ]);
        $this->hasMany('Recipients', [
            'foreignKey' => 'campaign_id'
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->requirePresence('namefrom', 'create')
            ->notEmpty('namefrom');

        $validator
            ->requirePresence('mailfrom', 'create')
            ->notEmpty('mailfrom');

        $validator
            ->allowEmpty('response_to');

        $validator
//            ->requirePresence('subject', 'create')
//            ->notEmpty('subject');
            ->allowEmpty('subject');
        
        $validator
            ->add('startDate', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('startDate');

        $validator
            ->add('endDate', 'valid', ['rule' => 'datetime'])
            ->allowEmpty('endDate');

        $validator
            ->allowEmpty('recipients_file');

        $validator
            ->allowEmpty('html');

        $validator
            ->allowEmpty('recipients_field');

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
        $rules->add($rules->existsIn(['client_id'], 'Clients'));
        return $rules;
    }
}
