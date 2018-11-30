<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;
use Cake\ORM\TableRegistry;

class WareHousesController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('my_layout');
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    
   
    public function add() {
       $loadWarehouse = $this->loadModel('WareHouse');
       $warehouse = $this->WareHouse->newEntity();
       if ($this->request->is('post')) {
           
            $warehouse = $this->WareHouse->patchEntity($warehouse, [
                    'wh_name' => $this->request->data['wh_name']],['validate' => 'Add']);
            if($this->WareHouse->save($warehouse)){
                    $this->Flash->mySuccess('Tạo kho mới thành công!');
            }
            else
            {
                $this->Flash->myError('Tạo kho không thành công!');
                }
        }
        $this->set('warehouse',$warehouse);
         $list = $this->listWarehouse();
         $this->set(compact('list'));
        
    }
    public function listWareHouse(){
        $wareHouseTbl = TableRegistry::get('Warehouse');
        $query = $wareHouseTbl->find('all');
        $list = $query->toArray();
        return $list;
    } 
    public function edit($wh_id){
       	$loadWarehouse = $this->loadModel('WareHouse');
        $warehouse = $this->WareHouse->find()->where(['wh_id'=> $wh_id])->first();
        $this->set('warehouse', $warehouse);
       
        if ($this->request->is('post')) {
            $this->WareHouse->patchEntity($warehouse, $this->request->getData(),['validate'=>'Add']);
           
            if ($this->WareHouse->save($warehouse)) {
                $this->Flash->mySuccess('Thay đổi thành công');
                
                return $this->redirect(['action' => 'add']);
            }
            else{
            $this->Flash->myError('Thay đổi không thành công');
            }
        }
    }
    
    public function delete($wh_id)
    {
        $loadWarehouse = $this->loadModel('WareHouse');
        if($this->request->is('post')){
            $warehouse = $this->WareHouse->find()->where(['wh_id'=> $wh_id])->first();
            if ($this->WareHouse->delete($warehouse)) {
                $this->Flash->mySuccess('Xóa kho thành công!');
                return $this->redirect(['action' => 'add']);
            }
        }
        else{
            $this->Flash->myError('Xóa kho không thành công!');
        }
    }   
  

   
   
   
}
?>
