<?php


namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;
use Cake\ORM\Entity;


class DetailBillsTable extends Table {

   public function initialize(array $config) {
        
        $this->setTable('detail_bill');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]); 
    }
    public function bestSellers(){
        $this->Products = TableRegistry::get('Products');
        $query = $this->find();
        $rs = $query->select(['product_id','product.product_name','product.price','product.image_link','product.discount','sum_book'=>$query->func()->sum('amount')])
            ->join(['table'=>'product',
                    'type'=>'LEFT',
                    'conditions'=>'DetailBills.product_id = product.product_id'])
            ->where(['product.discount'=>10])
              ->group(['DetailBills.product_id'])
              ->order(['sum_book'=>'DESC'])
              ->limit(12)->toArray();
         // $product_id = [];
        // foreach ($rs as $key => $value) {

        //     $product_id[] = $value->product_id;
        // }
        // $product = [];
        // foreach ($product_id as $k => $v) {
        //     $query_product = $this->Products->find('all')->where(['Products.product_id' => $v ]);
        // }
        return $rs;
    }
   
    public function validationAdd(Validator $validator) {
        return $validator
                        ->notEmpty('product_name', 'Hãy nhập tên   sách');
                        
                        
    }

    

}
