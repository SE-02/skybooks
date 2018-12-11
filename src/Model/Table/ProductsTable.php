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
	public function listProductCatalog($product_id){
        $query = $this->find('all')->select(['catalog_id'])->where(['Products.product_id'=>$product_id]);
        $info = $query->toArray();
        foreach ($info as $v) {
            $catalog= $v->catalog_id;
        }
        $query_catalog = $this->find('all')->where(['Products.catalog_id'=>$catalog])->limit(3);
        return $query_catalog;
    }
    public function listProductCatalog2($product_id){
        $query = $this->find('all')->select(['catalog_id'])->where(['Products.product_id'=>$product_id]);
        $info = $query->toArray();
        foreach ($info as $v) {
            $catalog= $v->catalog_id;
        }
        $query_catalog = $this->find('all')->where(['Products.catalog_id'=>$catalog])->limit(3)->offset(4);
        return $query_catalog;
    }
    public function listProductCatalog3($product_id){
        $query = $this->find('all')->select(['catalog_id'])->where(['Products.product_id'=>$product_id]);
        $info = $query->toArray();
        foreach ($info as $v) {
            $catalog= $v->catalog_id;
        }
        $query_catalog = $this->find('all')->where(['Products.catalog_id'=>$catalog])->limit(3)->offset(7);
        return $query_catalog;
    }
	//sach cung tac gia
    public function listProductOfAuthor($product_id){
        $query = $this->find('all')->select(['author'])->where(['Products.product_id'=>$product_id]);
        $info = $query->toArray();
        foreach ($info as $v) {
            $author = $v->author;
        }
        $query_author = $this->find('all')->where(['Products.author'=>$author]);
        return $query_author;
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
    public function productCart($product_id){
        $query = $this->find()->select(['product_name','price','discount','image_link'])->where(['Products.product_id'=>$product_id]);
        return $query;
    }
    public function bestSale(){
        $query = $this->find('all')->where(['Products.discount >='=>70])->limit(1);
        return $query;
    }
     public function bestSale2(){
        $query = $this->find('all')->where(['Products.discount >='=>70])->limit(1)->offset(1);
        return $query;
    }
     public function bestSale3(){
        $query = $this->find('all')->where(['Products.discount >='=>70])->limit(1)->offset(2);
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
