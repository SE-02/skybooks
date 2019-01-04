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


class DetailBillsController extends AppController {

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
    //Lay code
    public function Baocaobanhang(){
       
        $this->loadModel('Bills');
        $this->loadModel('DetailBills');
        $this->loadModel('Products');
       
        $query = $this->DetailBills->find();    
        $query= $this->DetailBills->find('all')
            ->select([
            'tienlai'=>$query->func()->sum('Detailbills.price*Detailbills.amount-product.input_price*Detailbills.amount'),
            'tongdonhang'=>$query->func()->count('bill.bill_id'),
            'bill.status',
            'tongSp'=>$query->func()->sum('Detailbills.amount'),
            'tongtien'=>$query->func()->sum('Detailbills.price*Detailbills.amount'),
            'thang'=>"DATE_FORMAT(bill.date, '%m-%Y')"
            
            ])
            ->join([
                'table'=>'bill',
                'type'=>'LEFT',
                'conditions'=>'Detailbills.bill_id=bill.bill_id'])
            ->join([
                'table'=>'product',
                'type'=>'LEFT',
                'conditions'=>'Detailbills.product_id=product.product_id'])
            ->where(['bill.status'=>2])
            ->group(["DATE_FORMAT(bill.date, '%Y-%m')"])

            ->toArray();
            //print_r($query);die;
        $this->set('query',$query);
    }
}


