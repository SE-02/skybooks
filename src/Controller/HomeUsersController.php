<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Controller\Component\CookieComponent;


use Cake\ORM\TableRegistry;
use Cake\ORM\Table;
use Cake\ORM\Entity;
use Cake\ORM\Query;
class HomeUsersController extends AppController {
    public $paginate = [
        'limit' => 12
    ];
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('home_page_layout');
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Cookie');
    }

    public function index(){
		$catalog = $this->loadModel('Catalog');
        $list = $catalog->listCatalog();
        $this->set('list',$list);
        // $this->paginate($list_product);
        $detail_bill = $this->loadModel('DetailBills');
        $best_sellers = $detail_bill->bestSellers();
        $product = $this->loadModel('Products');
        $new_book = $product->newBook();
        $this->set('product', $best_sellers);
        $product = $this->loadModel('Products');
        $new_book = $product->newBook();
        $this->set('new_book',$new_book);
        $bestSale = $product->bestSale();
        $bestSale2 = $product->bestSale2();
        $bestSale3 = $product->bestSale3();
        $this->set('bestSale',$bestSale);
        $this->set('bestSale2',$bestSale2);
        $this->set('bestSale3',$bestSale3);
        $this->paginate('product');
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total = $this->Cookie->read('total');
        $this->set('total',$total);
        $user = $this->Auth->user();
        $this->set('user',$user);
    }
    public function loadProductOfCatalog($catalog_id){
        $catalog = $this->loadModel('Catalog');
        $list = $catalog->listCatalog();
        $this->set('list',$list);
        $product = $this->loadModel('Products');
        $list_productOfCatalog = $product->listProductOfCatalog($catalog_id);
        $this->paginate($list_productOfCatalog);
        $this->set('list_productOfCatalog',$list_productOfCatalog);
        $bestSale = $product->bestSale();
        $bestSale2 = $product->bestSale2();
        $bestSale3 = $product->bestSale3();
        $this->set('bestSale',$bestSale);
        $this->set('bestSale2',$bestSale2);
        $this->set('bestSale3',$bestSale3);
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total = $this->Cookie->read('total');
        $this->set('total',$total);
    }
    public function giamgia(){
        $catalog = $this->loadModel('Catalog');
        $list = $catalog->listCatalog();
        $this->set('list',$list);
        $product = $this->loadModel('Products');
        $list_product = $product->listProductGg();
        $this->paginate($list_product);
        $this->set('product',$list_product);
        $bestSale = $product->bestSale();
        $bestSale2 = $product->bestSale2();
        $bestSale3 = $product->bestSale3();
        $this->set('bestSale',$bestSale);
        $this->set('bestSale2',$bestSale2);
        $this->set('bestSale3',$bestSale3);
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total = $this->Cookie->read('total');
        $this->set('total',$total);
        $user = $this->Auth->user();
        $this->set('user',$user);
    }
    public function tim(){
        $catalog = $this->loadModel('Catalog');
        $list = $catalog->listCatalog();
        $productTable= $this->loadModel('Products');


        $bestSale = $productTable->bestSale();
        $bestSale2 = $productTable->bestSale2();
        $bestSale3 = $productTable->bestSale3();
        $this->set('bestSale',$bestSale);
        $this->set('bestSale2',$bestSale2);
        $this->set('bestSale3',$bestSale3);

        $this->set('list',$list);
        $productTable = TableRegistry::get('Products');

        if($this->request->is('post')){
            $dataS = $this->request->data;
            $product['search'] = isset($dataS['search']) ? $dataS['search'] : null;
            $data = $productTable->find('all')
            ->select(['product_id','product_name','price','image_link','author','description'])
            ->where(['product_name like' => '%'.$product['search'].'%'])
            ->toArray();
            $this->set('data',$data);
       }
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total = $this->Cookie->read('total');
        $this->set('total',$total);
        $user = $this->Auth->user();
        $this->set('user',$user);
    }

	public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['index','loadProductOfCatalog','giamgia', 'tim']);
    }


}
?>
