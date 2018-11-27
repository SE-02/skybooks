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
        //print_r($list);die;
        $this->set('list',$list);
        // $this->paginate($list_product);
        $detail_bill = $this->loadModel('DetailBills');
        $best_sellers = $detail_bill->bestSellers();
        $product = $this->loadModel('Products');
        $new_book = $product->newBook();
        
        //print_r($best_sellers);die;
        $this->set('product', $best_sellers);

        $product = $this->loadModel('Products');
        $new_book = $product->newBook();
        $this->set('new_book',$new_book);
        $this->paginate('product');
              
    }

	public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }


}
?>
