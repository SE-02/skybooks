<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;
use Cake\Network\Exception\NotFoundException;

class CatalogController extends AppController {
    
    public function initialize() {
        parent::initialize();
        $this->viewBuilder()->setLayout('my_layout');
        $this->loadComponent('Paginator');
    }

    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
    }

    
   
    public function add() {
       $loadCatalog = $this->loadModel('Catalog');
       $catalog = $this->Catalog->newEntity();
       if ($this->request->is('post')) {
           
            $catalog = $this->Catalog->patchEntity($catalog, [
                    'catalog_id' => Text::uuid(),
                    'catalog_name' => $this->request->data['catalog_name']],['validate' => 'Add']);
            if($this->Catalog->save($catalog)){
                    $this->Flash->mySuccess('Tạo danh mục sách mới thành công!');
            }
            else
            {
                $this->Flash->myError('Tạo danh mục không thành công!');
                }
        }
        $this->set('catalog',$catalog);
        $list = $loadCatalog->listCatalog();
        $this->set(compact('list'));
        
    } 
    public function edit($catalog_id){
        
        $catalog = $this->Catalog->find()->where(['catalog_id'=> $catalog_id])->first();
        $this->set('catalog', $catalog);
        if ($this->request->is('post')) {
            $this->Catalog->patchEntity($catalog, $this->request->getData(),['validate'=>'Add']);
           
            if ($this->Catalog->save($catalog)) {
                $this->Flash->mySuccess('Thay đổi thành công');
                
                return $this->redirect(['action' => 'add']);
            }
            else{
            $this->Flash->myError('Thay đổi không thành công');
            }
        }
    }
    
    public function delete($catalog_id)
    {
        
        if($this->request->is('post')){
            $catalog = $this->Catalog->find()->where(['catalog_id'=> $catalog_id])->first();
            if ($this->Catalog->delete($catalog)) {
                $this->Flash->mySuccess('Xóa danh mục sách thành công!');
                return $this->redirect(['action' => 'add']);
            }
        }
        else{
            $this->Flash->myError('Xóa danh mục sách không thành công!');
        }
    }   
  

   
   
   
}
?>
