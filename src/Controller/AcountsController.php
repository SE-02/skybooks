<?php 
namespace App\Controller;
use App\Controller\AppController;
use Cake\Event\Event;

use Cake\Auth\DefaultPasswordHasher;
use Cake\Controller\Component\CookieComponent;
class AcountsController extends AppController{
	public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('my_layout');
    }
    public function login(){
    	$this->viewBuilder()->setLayout('my_layout_login');
    }
    public function dangki(){
    	$this->viewBuilder()->setLayout('my_layout_login');
    }
}
?>
