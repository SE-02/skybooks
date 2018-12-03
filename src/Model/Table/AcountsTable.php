<?php

namespace App\Model\Table;
use Cake\ORM\Table;
use Cake\Validation\Validator;
use Search\Manager;

class AcountsTable extends Table
{

    public function initialize(array $config){
        $this->table('users');
        $this->addBehavior('Timestamp', [
            'events' => [
                    'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]);
    }

   public function validationAdd(Validator $validator) {
        $query = $this->find()->select(['email'])->toArray();
        $arrEmail= [];
        foreach ($query as $v) {
            array_push($arrEmail, $v->email);
        }
        $arr=!$arrEmail;
        //print_r($arrEmail);die;
         return $validator
            ->notEmpty('email','Vui lòng nhập địa chỉ email')
               ->add('email', 'validFormat', [
                'rule' => 'email',
                'message' => 'E-mail phải hợp lệ'
    ])
            ->notEmpty('password','Vui lòng nhập mật khẩu')
             ->notEmpty('fullname','Vui lòng nhập tên')
             ->notEmpty('phone','Vui lòng nhập số điện thoại')
             ->notEmpty('address','Vui lòng nhập địa chỉ');
            

    } 
}