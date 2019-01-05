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
        $this->viewBuilder()->setLayout('my_layout');
        $this->loadModel('DetailBills');
        $this->loadModel('Products');
        $this->loadModel('Bills');
        $query = $this->Bills->find();
        $query = $this->Bills->find('all')->select([
            'madon'=>'Bills.bill_id',
            'khachhang'=>'Bills.name_user',
            'diachi'=>'Bills.address',
            'diachikhac'=>'Bills.address_rc',
            'soluong'=>$query->func()->sum('detail_bill.amount'),
            'thanhtien'=>'Bills.total_money',
            'ngaylap'=>"DATE_FORMAT(Bills.date, '%d/%m/%Y')"
            ])
        ->join(['table'=>'detail_bill',
                'type'=>'RIGHT',
                'conditions'=>'detail_bill.bill_id=Bills.bill_id'])
        ->join(['table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'product.product_id=detail_bill.product_id'])
        ->group('Bills.bill_id')
        ->where(['Bills.status'=>0])
        ->toArray();
       // print_r($query);die;
        $this->set('query',$query);

        if ($this->request->is('post')) {
            $param = $this->request->getData('madon');
            
            if($param == null){
            }else{
                foreach ($param as $param){
                    $sql = $this->Bills->get($param);
                    $sql = $this->Bills->patchEntity($sql, array('status' => '1'));
                    $this->Bills->save($sql);
                }
                return $this->redirect(['controller' => 'Bills', 'action' => 'donhangchuagiao']);
            }
        }    
    }

    public function donhangdanggiao(){
        $this->viewBuilder()->setLayout('my_layout');
        $this->loadModel('DetailBills');
        $this->loadModel('Products');
        $this->loadModel('Bills');
        $query = $this->Bills->find();
        $query = $this->Bills->find('all')->select([
            'madon'=>'Bills.bill_id',
            'khachhang'=>'Bills.name_user',
            'diachi'=>'Bills.address',
            'diachikhac'=>'Bills.address_rc',
            'soluong'=>$query->func()->sum('detail_bill.amount'),
            'thanhtien'=>'Bills.total_money',
            'ngaylap'=>"DATE_FORMAT(Bills.date, '%d/%m/%Y')"
            ])
        ->join(['table'=>'detail_bill',
                'type'=>'RIGHT',
                'conditions'=>'detail_bill.bill_id=Bills.bill_id'])
        ->join(['table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'product.product_id=detail_bill.product_id'])
        ->group('Bills.bill_id')
        ->where(['Bills.status'=>1])
        ->toArray();
        //print_r($query);die;
        $this->set('query',$query);

        if ($this->request->is('post')) {
            $param = $this->request->getData('madon');
            
            if($param == null){
            }else{
                foreach ($param as $param){
                    $sql = $this->Bills->get($param);
                    $sql = $this->Bills->patchEntity($sql, array('status' => '2'));
                    $this->Bills->save($sql);
                }
                return $this->redirect(['controller' => 'Bills', 'action' => 'donhangdanggiao']);
            }
        }    
    }

    public function donhangdagiao(){
        $this->viewBuilder()->setLayout('my_layout');
        $this->loadModel('DetailBills');
        $this->loadModel('Products');
        $this->loadModel('Bills');
        $query = $this->Bills->find();
        $query = $this->Bills->find('all')->select([
            'madon'=>'Bills.bill_id',
            'khachhang'=>'Bills.name_user',
            'diachi'=>'Bills.address',
            'diachikhac'=>'Bills.address_rc',
            'soluong'=>$query->func()->sum('detail_bill.amount'),
            'thanhtien'=>'Bills.total_money',
            'ngaylap'=>"DATE_FORMAT(Bills.date, '%d/%m/%Y')"
            ])
        ->join(['table'=>'detail_bill',
                'type'=>'RIGHT',
                'conditions'=>'detail_bill.bill_id=Bills.bill_id'])
        ->join(['table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'product.product_id=detail_bill.product_id'])
        ->group('Bills.bill_id')
        ->where(['Bills.status'=>2])
        ->toArray();
       // print_r($query);die;
        $this->set('query',$query);
    }
    public function lichsumuahang(){
        $this->viewBuilder()->setLayout('home_page_layout');
        $this->loadModel('Products');
        $this->loadModel('Bills');
        $this->loadModel('Acounts');
        $this->loadModel('DetailBills');
        $catalog = $this->loadModel('Catalog');
        $list = $catalog->listCatalog();
        $this->set('list',$list);
        $product = $this->loadModel('Products');
        $bestSale = $product->bestSale();
        $bestSale2 = $product->bestSale2();
        $bestSale3 = $product->bestSale3();
        $this->set('bestSale',$bestSale);
        $this->set('bestSale2',$bestSale2);
        $this->set('bestSale3',$bestSale3);
        $user = $this->Auth->user();
        $this->set('user',$user);
         $cart = $this->Cookie->read('cart');
        $this->set('cart',$cart);
         
            $query = $this->Acounts->find('all')->select([
                'khachhang'=>'Acounts.fullname',
                'sanpham'=>'product.product_name',
                'soluong'=>'detail_bill.amount',
                'thanhtien'=>'detail_bill.price*detail_bill.amount',
                'ngaylap'=>"DATE_FORMAT(bill.date, '%d/%m/%Y')"
                ])
            ->join(['table'=>'bill',
                    'type'=>'LEFT',
                    'conditions'=>'bill.user_id=Acounts.user_id'])
            ->join(['table'=>'detail_bill',
                    'type'=>'RIGHT',
                    'conditions'=>'detail_bill.bill_id=bill.bill_id'])
            ->join(['table'=>'product',
                    'type'=>'LEFT',
                    'conditions'=>'product.product_id=detail_bill.product_id'])
            ->where(['Acounts.user_id'=>$user['user_id']])
            ->toArray();
            $this->set('query',$query);
        
    }
}
?>





