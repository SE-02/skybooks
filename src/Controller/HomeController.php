<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;

/**
 * Description of HomeController
 *
 *
 */
class HomeController extends AppController {

    //put your code here

    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('my_layout');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    public function index() {
       
    }

}
