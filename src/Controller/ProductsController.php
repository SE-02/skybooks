<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;

class ProductsController extends AppController {
    public $paginate = [
        'limit' => 10
    ];
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('my_layout');
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }
    public function add(){
        $loadCatalog = $this->loadModel('Catalog');
        $catalog = $loadCatalog->listCatalog();
        foreach ($catalog as $key => $value) {
            $list[$value->catalog_id] = $value->catalog_name;

        }
        $this->set(compact('list'));
        $loadProducts = $this->loadModel('Products');
       
        $post = '';
        if ($this->request->is('post')) {
            if(!empty($this->request->data['file']['name'])){
                
                $filename = $this->request->data['file']['name'];
                $url = Router::url('/',true).'images/'.$filename;
                $uploadpath = 'images/';
                $uploadfile = $uploadpath . $filename; 
                $filename2 = $this->request->data['file']['tmp_name'];
                if(move_uploaded_file($filename2,$uploadfile)){
                    $post = $this->Products->newEntity();
                    $addProducts = [];
                    $addProducts['products_id'] = Text::uuid();
                    $addProducts['catalog_id'] = $this->request->data['catalog_id'];
                    $addProducts['product_name'] = $this->request->data['product_name'];
                    $addProducts['input_price'] = $this->request->data['input_price'];
                    $addProducts['price'] = $this->request->data['price'];
                    $addProducts['discount'] = $this->request->data['discount'];
                    $addProducts['page_number'] = $this->request->data['page_number'];
                    $addProducts['cover_type'] = $this->request->data['cover_type'];
                    //print_r($addProducts['discount']);die;
                    $addProducts['image_link'] = $url;
                    $addProducts['image_path'] = $uploadfile;
                    //print_r($url);die;
                    $addProducts['author'] = $this->request->data['author'];
                    $addProducts['description'] = $this->request->data['description'];
                    $post = $this->Products->patchEntity($post, $addProducts, ['validate' => 'Add']);
                   
                }
                if ($this->Products->save($post)) {
                    $this->Flash->mySuccess('Bạn đã thêm sản phẩm thành công!');
                    return $this->redirect(['action' => 'add']);
                }
            }
        }

        $this->set('post', $post);

    }
    public function view(){
        $loadProducts = $this->loadModel('Products');
        $list_name_catalog = $loadProducts->getNameCatalog();
        $listProducts = $loadProducts->listProduct();
        $this->set('list_name_catalog',$list_name_catalog);
        //$this->paginate($listProducts);
        $this->set('listProducts',$listProducts);

    }
    public function chitietsanpham($product_id){
        $this->loadModel('Products');
        $query = $this->Products->find('all')->select([
            'tensach'=>'Products.product_name',
            'mota'=>'Products.description'
            ])
        ->where(['Products.product_id'=>$product_id])
        ->toArray();
        $this->set('query',$query);
    }
    public function edit($product_id){
        $loadCatalog = $this->loadModel('Catalog');
        $catalog = $loadCatalog->listCatalog();
        foreach ($catalog as $key => $value) {
            $list[$value->catalog_id] = $value->catalog_name;
        }
        $this->set(compact('list'));
        $loadProducts = $this->loadModel('Products');

        $product = $this->Products->find()->where(['product_id'=> $product_id])->first();
        $this->set('product', $product);
        $post = '';
        if($this->request->is('post')){
            
            if(!empty($this->request->data['file']['name'])){
                $filename = $this->request->data['file']['name'];
                $url = Router::url('/',true).'images/'.$filename;
                //print_r($url);die;
                $uploadpath = 'images/';
                $uploadfile = $uploadpath . $filename; 

                $filename2 = $this->request->data['file']['tmp_name'];
                if(move_uploaded_file($filename2,$uploadfile)){
                    
                    $editProducts = [];
                    $editProducts['catalog_id'] = $this->request->data['catalog_id'];
                    $editProducts['product_name'] = $this->request->data['product_name'];
                    $editProducts['input_price'] = $this->request->data['input_price'];
                    $editProducts['price'] = $this->request->data['price'];
                    $editProducts['discount'] = $this->request->data['discount'];
                    $editProducts['page_number'] = $this->request->data['page_number'];
                    $editProducts['cover_type'] = $this->request->data['cover_type'];
                    $editProducts['author'] = $this->request->data['author'];
                    $editProducts['description'] = $this->request->data['description'];
                    $editProducts['image_link'] = $url;
                   
                    
                    $editProducts['image_path'] = $uploadfile;
                    $post = $this->Products->patchEntity($product,$editProducts);
                }
            }
            else
            {
                $editProducts2 = [];
                $editProducts2['catalog_id'] = $this->request->data['catalog_id'];
                $editProducts2['product_name'] = $this->request->data['product_name'];
                $editProducts2['input_price'] = $this->request->data['input_price'];
                $editProducts2['price'] = $this->request->data['price'];
                $editProducts2['discount'] = $this->request->data['discount'];
                $editProducts2['page_number'] = $this->request->data['page_number'];
                $editProducts2['cover_type'] = $this->request->data['cover_type'];
                $editProducts2['author'] = $this->request->data['author'];
                $editProducts2['description'] = $this->request->data['description'];
               
                $post = $this->Products->patchEntity($product,$editProducts2);
            }
            if($this->Products->save($post)){
                $this->Flash->mySuccess("Sửa thành công");
            }
        }
        $this->set('post',$post);
    }
    public function delete($product_id)
    {
        if($this->request->is('post')){
            $product = $this->Products->find()->where(['product_id'=> $product_id])->first();
            if ($this->Products->delete($product)) {
                $this->Flash->mySuccess('Xóa sản phẩm thành công!');
                return $this->redirect(['action' => 'view']);
            }
        }
        else{
            $this->Flash->myError('Xóa sản phẩm không thành công!');
        }
    }   
}
?>
