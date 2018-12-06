<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ClientmasterTable extends Table
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
        $this->setTable('clientmaster');
        $this->setPrimaryKey('client_id');
       
    
$this->belongsTo('console_client_service', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);   
$this->hasMany('client_service_aggrement', [
            'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]); 
//$this->hasMany('client_service_aggrement');   


    }

     

    
}
