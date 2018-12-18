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
       
    	
	}
}


