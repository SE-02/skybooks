<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Controller\Component\CookieComponent;
use Cake\Routing\Router;

use Cake\I18n\Time;
use Cake\I18n\Date;



class BillsController extends AppController {
    public $paginate = [
        'limit' => 10
    ];

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('');
        $this->loadComponent('Paginator');
        $this->loadComponent('Cookie');
    }
    public function dathang(){
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total_bill = $this->Cookie->read('total');
        $this->set('total_bill',$total_bill);
        $user = $this->Auth->user();
        $this->set('user',$user);
        
    }
    public function bill(){
        $loadBills = $this->loadModel('Bills');
        $loadDetailBills = $this->loadModel('DetailBills');
        $bill = $this->Bills->newEntity();
       
        $total_bill = $this->Cookie->read('total');
        $product_cart = $this->Cookie->read('cart');
       
        if($this->request->is('post')){
            $addBill = [];
            $addBill['email'] = $this->request->data['Email'];
            $addBill['name_user'] = $this->request->data['name'];
            $addBill['phone'] = $this->request->data['phone'];
            $addBill['address'] = $this->request->data['address'];
            $addBill['district_id'] = $this->request->data['district'];
            $addBill['note'] = $this->request->data['note'];
            $addBill['total_money'] = $total_bill;
            $addBill['name_user_rc'] = $this->request->data['name_receiver'];
            $addBill['phone_rc'] = $this->request->data['phone_receiver'];
            $addBill['address_rc'] = $this->request->data['address_receiver'];
            $addBill['district_id_rc'] = $this->request->data['district_receiver'];
            $bill = $this->Bills->patchEntity($bill, $addBill);
            $this->Bills->save($bill);
        }
        $this->Cookie->write('info',$bill);
        $info = $this->Cookie->read('info');

        $query = $this->Bills->find()->select(['bill_id'])->order(['bill_id'=>'DESC'])->first()->toArray();
        $tong = [];
        $addDetailBill = [];
        foreach ($product_cart as $key => $value) {
            
            $addDetailBill['bill_id'] = $query['bill_id'];
            $addDetailBill['product_id'] = $value['id'];
            $addDetailBill['price'] = $value['price'];
            $addDetailBill['amount'] = $value['quantity'];
            array_push($tong,$addDetailBill);
        }
        $detail_bill = $this->DetailBills->newEntities($tong);
        //$detail_bill = $this->DetailBills->patchEntities($detail_bill, $addDetailBill);
        $this->DetailBills->saveMany($detail_bill);
        if ($this->DetailBills->saveMany($detail_bill) ) {
            return $this->redirect(['action' => 'dondathang']);
        }
    }
    public function dondathang(){
        $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
        $total_bill = $this->Cookie->read('total');
        $this->set('total_bill',$total_bill);
        $info = $this->Cookie->read('info');
        $this->set('info',$info);
        $this->Cookie->delete('cart');
        $this->Cookie->delete('total');
        $this->Cookie->delete('info');
         //print_r($info);die;
         //print_r($info['name_user']);die;
    }

    public function beforeFilter(Event $event) {

        parent::beforeFilter($event);
        $this->Auth->allow(['dathang','bill','dondathang']);
    }
    public function donhangchuagiao(){

    }

    public function donhangdanggiao(){

    }

    public function donhangdagiao(){
        
    }
}
?>





