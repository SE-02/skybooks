<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class HomeLienheTable extends Table
{

    public function initialize(array $config){
        $this->table('contact');
        $this->addBehavior('Timestamp', [
            'events' => [
                    'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]);
    }

    public function validationAdd(Validator $validator)
    {       

    } 
}
