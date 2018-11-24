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
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('home_page_layout');
        
        $this->loadComponent('Paginator');
        $this->loadComponent('Cookie');
    }

    public function index(){
   
    }

	public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }


}
?>
