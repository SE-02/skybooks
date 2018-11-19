<?php

namespace App\Controller;

use Cake\Event\Event;
use App\Controller\AppController;
use Cake\Utility\Text;
use Cake\Datasource\ConnectionManager;

class ProductsController extends AppController {
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

   
   
    
    public function add() {
        
        $this->loadModel('MemberProject');
        $member_project = $this->MemberProject->newEntity();
        $project = $this->Projects->newEntity();
        $this->loadModel('Users');
        $listuser = $this->Users->find('list', [
                    'keyField' => 'user_id',
                    'valueField' => 'fullname',
                    'order' => ['fullname' => 'ASC']
                ])->toArray();
        $this->set('listuser', $listuser);



        if ($this->request->is('post', 'put')) {
            if (!empty($this->request->data)) {
                if (isset($this->request->data['start_date']) && !empty($this->request->data['start_date'])) {
                    $this->request->data['start_date'] = date('Y-m-d H:i:s', strtotime($this->request->data['start_date']));
                }
                if (isset($this->request->data['end_date']) && !empty($this->request->data['end_date'])) {
                    $this->request->data['end_date'] = date('Y-m-d H:i:s', strtotime($this->request->data['end_date']));
                }
                $project = $this->Projects->patchEntity($project, [
                    'project_id' => Text::uuid(),
                    'name' => $this->request->data['name'],
                    'description' => $this->request->data['description'],
                    'start_date' => $this->request->data['start_date'],
                    'end_date' => $this->request->data['end_date'],
                    'status' => $this->request->data['status'],
                        ], ['validate' => 'Add']);

                // Save Info of Member
                $isError = false;
                $conn = ConnectionManager::get('default');
                $conn->begin();

                // Save Info of Member
                if ($this->request->data['members']) {
                    foreach ($this->request->data['members'] as $member) {

                        $member_project = $this->MemberProject->newEntity();
                        $memberData = [];

                        $memberData['member_project_id'] = Text::uuid();
                        $memberData['project_id'] = $project->project_id;
                        $memberData['user_id'] = $member;
                        $memberData['is_leader'] = 0;
                        $memberData['members'] = $member;
                        $member_project = $this->MemberProject->patchEntity($member_project, $memberData, ['validate' => 'Member']);
                        if ($member_project->errors()) {
                            $isError = true;
                            break;
                        }
                        $this->MemberProject->save($member_project);
                    }
                }
                // Save Info of Leader
                if ($this->request->data['leader'] && $isError == false) {
                    foreach ($this->request->data['leader'] as $member) {
                        $member_project = $this->MemberProject->newEntity();
                        $memberData = [];

                        $memberData['count_leader'] = count($this->request->data['leader']);
                        $memberData['member_project_id'] = Text::uuid();
                        $memberData['project_id'] = $project->project_id;
                        $memberData['user_id'] = $member;
                        $memberData['is_leader'] = 1;
                        $memberData['leader'] = $member;
                        $member_project = $this->MemberProject->patchEntity($member_project, $memberData, ['validate' => 'Member']);
                        if ($member_project->errors()) {
                            $isError = true;
                            break;
                        }
                        $this->MemberProject->save($member_project);
                    }
                }
                if ($isError) {
                    $conn->rollback();
                } else {
                    $conn->commit();
                    if ($this->Projects->save($project)) {
                        $this->Flash->mySuccess('Thêm dự án thành công');
                        return $this->redirect(['controller' => 'Projects', 'action' => 'listProject']);
                    }
                }
            }
        }
        $this->set(compact('member_project'));
        $this->set(compact('project'));
    }

   
   

    



   
   
}
?>
