<?php
namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\Routing\Router;

use Cake\I18n\Time;
use Cake\I18n\Date;


class ManageWareHousesController extends AppController {

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
    public function quanlikho(){
        $this->loadModel('ManageWareHouse');
        $this->loadModel('WareHouse');
        $query = $this->ManageWareHouse->find();    
        $query= $this->ManageWareHouse->find('all')
            ->select([
            'makho'=>'ManageWareHouse.wh_id',
            'tenkho'=>'warehouse.wh_name',
            'diachi'=>'warehouse.address',
            'SLsach_nhap'=>$query->func()->sum('ManageWareHouse.amount'),
            
            ])
            ->join([
                'table'=>'warehouse',
                'type'=>'LEFT',
                'conditions'=>'warehouse.wh_id=ManageWareHouse.wh_id'])
            
            ->group('warehouse.wh_id')
            ->toArray();
            // print_r($query);die;
        $this->set('query',$query);  
    }
    public function chitietkho($makho){
        $this->loadModel('ManageWareHouse');
        $this->loadModel('Products');
        $this->loadModel('WareHouse');
        $query= $this->ManageWareHouse->find('all')->select([
            'masach'=>'ManageWareHouse.product_id',
            'tensach'=>'product.product_name',
            'SLsach_nhap'=>'ManageWareHouse.amount'
            ])
        ->join(['table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'product.product_id=ManageWareHouse.product_id'])
        ->where(['ManageWareHouse.wh_id'=>$makho])
        ->toArray();
        $this->set('query',$query);
    }
}