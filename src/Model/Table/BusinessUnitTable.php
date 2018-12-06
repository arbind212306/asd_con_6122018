<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * BusinessUnit Model
 *
 * @method \App\Model\Entity\BusinessUnit get($primaryKey, $options = [])
 * @method \App\Model\Entity\BusinessUnit newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\BusinessUnit[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUnit|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessUnit|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\BusinessUnit patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUnit[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\BusinessUnit findOrCreate($search, callable $callback = null, $options = [])
 */
class BusinessUnitTable extends Table
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

        $this->setTable('business_unit');
        $this->setDisplayField('id');
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
            ->scalar('bu_name')
            ->maxLength('bu_name', 50)
            ->allowEmpty('bu_name');

        $validator
            ->scalar('bu_desc')
            ->allowEmpty('bu_desc');

        $validator
            ->integer('status')
            ->requirePresence('status', 'create')
            ->notEmpty('status');

        return $validator;
    }
}
