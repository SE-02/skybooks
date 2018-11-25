<?php

namespace App\Model\Table;

use Cake\ORM\Table;
use Cake\Validation\Validator;
use Cake\ORM\TableRegistry;


class ProductsTable extends Table {
    public function initialize(array $config) {
        
        $this->setTable('product');

        $this->addBehavior('Timestamp', [
            'events' => [
                'Model.beforeSave' => [
                    'created_at' => 'new',
                    'updated_at' => 'always',
                ]
            ]
        ]); 
    }
    public function listProduct(){
        $query = $this->find('all');
        $list = $query->toArray();
        return $list;
    }

    public function listProduct2(){
        $query = $this->find('all');
        return $query;
    }
    
    public function getNameCatalog(){
        $query = $this->find()->select(['catalog_id']);
        $list_id = $query->toArray();
        foreach ($list_id as $key => $value) {
            $list[] = $value->catalog_id;
        }
        $this->Catalog = TableRegistry::get('Catalog');
        foreach ($list as $key => $value) {
            $query_getname = $this->Catalog->find()->select(['catalog_name'])->where(['Catalog.catalog_id' => $value]);
           
            $getname = $query_getname->toArray();
            foreach ($getname as $k => $v) {
                $catalog_name[] = $v->catalog_name;
            }
        }
        return $catalog_name;
    }
    public function listProductOfCatalog($catalog_id){
        $this->Catalog = TableRegistry::get('Catalog');
        $query = $this->find('all')->where(['Products.catalog_id'=>$catalog_id]);
        return $query;
    }
    public function product($product_id){
        $query = $this->find('all')->where(['Products.product_id'=>$product_id]);
        return $query;
    }
    
    public function newBook(){
        $query = $this->find('all')->where(['discount'=>10])->order(['created_at'=>'DESC'])->limit(12);
        return $query;
    }
     public function validationAdd(Validator $validator) {
        return $validator
                        ->notEmpty('product_name', 'Hãy nhập tên   sách');
                        
                        // ->notEmpty('input_price', 'Hãy nhập giá sách nhập vào')
                        // ->notEmpty('price', 'Hãy nhập giá bìa sách')
                        // ->notEmpty('discount', 'Hãy nhập thông tin giảm giá')
                        // //->notEmpty('image_link', 'Hãy nhập hình ảnh')
                        // ->notEmpty('author', 'Hãy nhập tác giả')
                        // ->notEmpty('description', 'Hãy nhập mô tả');
    }

    

}
