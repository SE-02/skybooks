<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;


class CatalogTable extends Table {

    //put your code here


    public function initialize(array $config) {
        
        $this->setTable('product_catalog');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'update_at' => 'always',
                ]
            ]
        ]); 
    }
    public function listCatalog(){
        $query = $this->find('all');

        $list = $query->toArray();

       
        return $list;

    }
    public function validationAdd(Validator $validator) {
        return $validator
                        ->notEmpty('catalog_name', 'Hãy nhập danh mục sách');
    }
}
