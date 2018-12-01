<?php
namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;


class WareHouseTable extends Table {
    public function initialize(array $config) {
        
        $this->setTable('warehouse');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]); 
    }
    public function listWareHouse(){
        $query = $this->find('all');
        $list = $query->toArray();
        return $list;
    }
    public function validationAdd(Validator $validator) {
        return $validator
                        ->notEmpty('wh_name', 'Hãy nhập tên kho');
    }
}

