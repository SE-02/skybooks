<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class CommentsController extends AppController {
    
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

    public function blchuapheduyet(){
        $usersTbl=TableRegistry::get('Users');
        $this->loadModel('Comments');
        $this->loadModel('Acounts');
        $this->loadModel('Products');
        $query = $usersTbl->find();
        $query = $usersTbl->find('all')->select([
            'mabl'=>'comment.Comment_id',
            'khachhang'=>'Users.fullname',
            'sanpham'=>'product.product_name',
            'sosao'=>'comment.number_star',
            'binhluan'=>'comment.comment'
            ])
        ->join(['table'=>'comment',
                'type'=>'RIGHT',
                'conditions'=>'comment.user_id=Users.user_id'])
        ->join(['table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'product.product_id=comment.product_id'])
        ->where(['comment.status'=>0])
        ->toArray();
        $this->set('query',$query);
        //print_r($query);die;
        if ($this->request->is('post')) {
            $param = $this->request->getData('mabl');
            if($param == null){
            }else{
                foreach ($param as $param){
                    $sql = $this->Comments->get($param);
                    $sql = $this->Comments->patchEntity($sql, array('status' => '1'));
                    $this->Comments->save($sql);
                }
                return $this->redirect(['controller' => 'Comments', 'action' => 'blchuapheduyet']);
            }
        }   

    }

     public function bldapheduyet(){
        $usersTbl=TableRegistry::get('Users');
        $this->loadModel('Comments');
        $this->loadModel('Acounts');
        $this->loadModel('Products');
        $query = $usersTbl->find();
        $query = $usersTbl->find('all')->select([
            'mabl'=>'comment.Comment_id',
            'khachhang'=>'Users.fullname',
            'sanpham'=>'product.product_name',
            'sosao'=>'comment.number_star',
            'binhluan'=>'comment.comment'
            ])
        ->join(['table'=>'comment',
                'type'=>'RIGHT',
                'conditions'=>'comment.user_id=Users.user_id'])
        ->join(['table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'product.product_id=comment.product_id'])
        ->where(['comment.status'=>1])
        ->toArray();
        $this->set('query',$query);
        //print_r($query);die;
    }  
}
?>
