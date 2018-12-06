<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsoleModeOfPayment Model
 *
 * @method \App\Model\Entity\ConsoleModeOfPayment get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsoleModeOfPayment findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsoleModeOfPaymentTable extends Table
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

        $this->setTable('console_mode_of_payment');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('name')
            ->maxLength('name', 50)
            ->allowEmpty('name');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
