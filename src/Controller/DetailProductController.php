<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;
use Cake\Controller\Component\CookieComponent;


class DetailProductController extends AppController {
    public $paginate = [
        'limit' => 3
    ];
    
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('header_user_layout');
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Cookie');
    }
    
    public function index($product_id){
        $products = $this->loadModel('Products');
        $list = $products->product($product_id);
        $this->set('list',$list);
        $list_product_catalog = $products->listProductCatalog($product_id);
        $list_product_catalog2 = $products->listProductCatalog2($product_id);
        $list_product_catalog3 = $products->listProductCatalog3($product_id);
        $this->set('list_product_catalog',$list_product_catalog);
        $this->set('list_product_catalog2',$list_product_catalog2);
        $this->set('list_product_catalog3',$list_product_catalog3);
        $list_product_author = $products->listProductOfAuthor($product_id);
        $this->set('list_product_author',$list_product_author);
        $comment = $this->loadModel('Comments');
        $listComment = $comment->loadComment($product_id);
        $this->set('listComment',$listComment);
        $catalog = $this->loadModel('Catalog');
        $list_catalog = $catalog->listCatalog();
        $this->set('list_catalog',$list_catalog);
        $user = $this->Auth->user();
        $this->set('user',$user);
        $url = '/DetailProduct/index/*';
        //$url = 'http://skybooks.test/detail-product/index/*';
        $this->Cookie->write('url',$url);

	}
    public function comment($product_id){
        $user = $this->Auth->user();
     $this->set('user',$user);
    
     if(!$user){
        $this->redirect(['controller'=>"Acounts",'action'=>'login']);
     }
     else{
        $comment = $this->loadModel('Comments');
        $addComment = $this->Comments->newEntity();
        if($this->request->is('post')){
            $listComment = [];
            $listComment['user_id']= $user['user_id'];
            $listComment['product_id'] = $product_id;
            $listComment['number_star'] = $this->request->data['sosao'];
            $listComment['title'] = $this->request->data['title'];
            $listComment['comment'] = $this->request->data['content'];
            $listComment['status'] = 0;
            $addComment = $this->Comments->patchEntity($addComment,$listComment,['validate'=>'Add']);
            
            if($this->Comments->save($addComment)){
                $this->Flash->mySuccess('Bạn đã gửi đánh giá thành công!');
               $this->redirect($this->referer());
            }
        }
    }
}
    
     public function beforeFilter(Event $event) {

        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }



}
?>
