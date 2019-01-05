<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Controller\Component\CookieComponent;

class HomeLienheController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('lienhe_layout');
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Cookie');
    }

    public function index(){
         $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total = $this->Cookie->read('total');
        $this->set('total',$total);
         $post='';
        if($this->request->is('post')){
            $post = $this->HomeLienhe->newEntity();
            $addContacts = [];
            $addContacts['fullname'] = $this->request->data['fullname'];
            $addContacts['email'] = $this->request->data['email'];
            $addContacts['comment'] = $this->request->data['comment'];
            $post= $this->HomeLienhe->patchEntity($post,$addContacts,['validate'=>'']);
            if($this->HomeLienhe->save($post)){
                $this->Flash->mySuccess('Bạn đã liên hệ thành công');
            }else{
                $this->Flash->myError(__('Không được liên hệ'));
                return $this->redirect(['action' => 'index']);
            }
        }
        $this->set('post',$post);
        $user = $this->Auth->user();
        $this->set('user',$user);
    }

   

     public function beforeFilter(Event $event) {

        parent::beforeFilter($event);
        $this->Auth->allow(['index']);
    }


    
   
   
    
   
  

   
   
   
}
?>
