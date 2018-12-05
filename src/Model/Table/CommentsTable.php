<?php

namespace App\Model\Table;


use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;


class CommentsTable extends Table {

    public function initialize(array $config) {
        
        $this->setTable('comment');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'update_at' => 'always',
                ]
            ]
        ]); 
    }
    public function loadComment($product_id){
        $this->Acounts = TableRegistry::get("Acounts");

        $query = $this->find()->select(['title','comment','created_at','users.fullname'])
                ->where(['product_id'=>$product_id])
                ->andwhere(['Comments.status'=>1])
                ->join(['table'=>'users',
                        'type'=>'LEFT',
                        'conditions'=>'Comments.user_id = users.user_id']);

        return $query;
    }
    public function validationAdd(Validator $validator) {
        return $validator
                        ->notEmpty('title', 'Hãy nhập tiêu đề')
                        ->notEmpty('content','Hãy nhập đánh giá');
                        
                        
    }

    
}
