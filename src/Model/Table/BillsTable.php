<?php


namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;


class BillsTable extends Table {
    public function initialize(array $config) {
        
        $this->setTable('bill');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                    'date'=>'new'
                ]
            ]
        ]); 
    }
    
   
    public function validationAdd(Validator $validator) {
       
    }
}

