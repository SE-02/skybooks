<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

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
        

    }

     public function bldapheduyet(){
        
    }  
}
?>
