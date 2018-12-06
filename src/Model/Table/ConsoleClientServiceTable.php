<?php
namespace App\Model\Table;

use Cake\ORM\Table;

class ConsoleClientServiceTable extends Table
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
        $this->setTable('console_client_service');

        $this->setPrimaryKey('id');
    
   

  $this->belongsTo('console_no_of_user',[
             'foreignKey' => 'no_of_users',
            'joinType' => 'INNER'
        ]);
    
    $this->belongsTo('console_invoice_cycles',[
             'foreignKey' => 'invoice_cycle',
            'joinType' => 'INNER'
        ]);
    
      $this->belongsTo('services',[
             'foreignKey' => 'service_id',
            'joinType' => 'INNER'
        ]);
         

      $this->belongsTo('console_invoice_frequenies',[
             'foreignKey' => 'invoice_frequency',
            'joinType' => 'INNER'
        ]);
    
    $this->belongsTo('console_payments',[
             'foreignKey' => 'payment_option',
            'joinType' => 'INNER'
        ]);


      

               
    }

    
    
}
