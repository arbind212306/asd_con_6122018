<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * ConsoleNoOfUser Model
 *
 * @method \App\Model\Entity\ConsoleNoOfUser get($primaryKey, $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\ConsoleNoOfUser findOrCreate($search, callable $callback = null, $options = [])
 */
class ConsoleNoOfUserTable extends Table
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

        $this->setTable('console_no_of_user');
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
            ->maxLength('name', 30)
            ->allowEmpty('name');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
