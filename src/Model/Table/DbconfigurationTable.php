<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class DbconfigurationTable extends Table
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
        $this->setTable('dbconfiguration');
        $this->setPrimaryKey('db_id');
        /*$this->hasMany('Departments', [
            'className' => 'DepartmentsTable',
            'foreignKey' => 'business_unit_id',
            'propertyName' => 'type'
        ]);*/
        $this->belongsTo('Clientmasters', [
            'ClassName' => 'ClientmastersTable',
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
    }
    
    public function getServiceDetails(){
        $query = $this->find('all');
        $result = [];
        foreach ($query as $d){
            $result[] = $d->toArray();
        }
       return $result;
    }

    
    
}
