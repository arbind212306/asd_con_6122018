<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ClientServiceAggrementTable extends Table
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
        $this->setTable('client_service_aggrement');

        $this->setPrimaryKey('id');
    
   $this->belongsTo('console_client_service',[
             'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);
    
 



    $this->belongsTo('business_unit',[
             'foreignKey' => 'bu_id',
            'joinType' => 'INNER'
        ]);
    $this->belongsTo('industry',[
             'foreignKey' => 'industry_id',
            'joinType' => 'INNER'
        ]);
             
    $this->belongsTo('services',[
             'foreignKey' => 'service',
            'joinType' => 'INNER'
        ]);
     $this->belongsTo('console_billing_frequency',[
             'foreignKey' => 'billing_frequency',
            'joinType' => 'INNER'
        ]);
        
    $this->belongsTo('console_mode_of_payment',[
             'foreignKey' => 'mode_of_payment',
            'joinType' => 'INNER'
        ]);
$this->belongsTo('clientmaster',[
             'foreignKey' => 'client_id',
            'joinType' => 'INNER'
        ]);

 
    }

    
    
}
