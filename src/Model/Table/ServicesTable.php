<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ServicesTable extends Table
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
        $this->setTable('services');
        $this->setPrimaryKey('id');
        /*$this->hasMany('Departments', [
            'className' => 'DepartmentsTable',
            'foreignKey' => 'business_unit_id',
            'propertyName' => 'type'
        ]);*/
    
    $this->hasMany('console_client_service', [
           
            'foreignKey' => 'service_id',
             'joinType' => 'INNER'
        ]);
    }
    
    public function getServiceDetails($arr=''){
        $query = $this->find('all');
        if((!empty($arr)) && (!in_array("all", $arr))){
             $query->where(['id IN' => $arr]);
         }

        $result = [];
        foreach ($query as $d){
            $result[] = $d->toArray();
        }
       return $result;
    }

    
    
}
