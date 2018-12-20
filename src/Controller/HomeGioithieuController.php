<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Controller\Component\CookieComponent;


class HomeGioithieuController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('gioithieu_layout');
        
        $this->loadComponent('Paginator');
         $this->loadComponent('Cookie');
    }
    public function index(){
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total = $this->Cookie->read('total');
        $this->set('total',$total);
        $user = $this->Auth->user();
        $this->set('user',$user);
    }

     public function beforeFilter(Event $event) {

        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }


    
   
   
    
   
  

   
   
   
}
?>
