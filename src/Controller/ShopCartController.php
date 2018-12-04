<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Network\Session\DatabaseSession;
use Cake\Controller\Component\CookieComponent;

class ShopCartController extends AppController {
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('header_user_layout');
        $this->loadComponent('Paginator');
        $this->loadComponent('Cookie');
    }
    public function cart($product_id){
        $loadProducts = $this->loadModel('Products');
        $list = $loadProducts->productCart($product_id);
        foreach ($list as $k => $v) {
            $id = $product_id;
            $title = $v->product_name;
            $image_link = $v->image_link;
            $discount = $v->discount;
            $price_ban = ($v->price-($v->price*($v->discount/100)));
            $item = ['id'=>$id,'product_name'=>$title,'image_link'=>$image_link,'discount'=>$discount, 'price'=>$price_ban,'quantity'=>1];
        }
        $cart = $this->Cookie->read('cart');
        $exist_item = 0; // biến kiểm tra có tồn tại hay ko?
        if (!$cart) {
            $cart = [];
        }
        else{
            foreach($cart as $i=>$v) {
                if($cart[$i]['id'] == $product_id){
                    $cart[$i]['quantity'] += 1;
                    $exist_item = 1; // có tồn tại rồi 
                    break;
                }
            }
        }
        if ($item && !$exist_item){
            array_push($cart, $item);
        }
        $total = 0;
        foreach ($cart as $key => $value) {
            $a = $cart[$key]['price']*$cart[$key]['quantity'];
            $total += $a;
        }
        $this->Cookie->write('total',$total);
        $tongtien = $this->Cookie->read('total');
        //print_r($tongtien);
        $this->set("total",$total);
        $this->Cookie->write('cart',$cart);
        
        $this->set('cart',$cart);
        // print ("<pre>");
        // print_r($cart);
         $user = $this->Auth->user();
        $this->set('user',$user);
    }
    public function remove($product_id){
        $cart = $this->Cookie->read('cart');
        foreach ($cart as $k => $v) {
            if($cart[$k]['id'] == $product_id){
               unset($cart[$k]);
            }
        }
        $this->Cookie->write('cart',$cart);
        $cart = $this->Cookie->read('cart');
        if(!$cart){
            $this->redirect(['action'=>'emptyCart']);
        }
        $this->set('cart',$cart);
        $this->redirect($this->referer());
    }
    public function emptyCart(){
         $cart = $this->Cookie->read('cart');
         $this->set('cart',$cart);
         $this->Cookie->delete('cart');
    }
    
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->Auth->allow(['cart','remove','emptyCart']);
    }

}