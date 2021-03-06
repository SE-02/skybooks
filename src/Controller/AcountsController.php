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
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);

        $this->Auth->allow(['dangki', 'logout']);
    }
    public function login(){
    	$this->viewBuilder()->setLayout('my_layout_login');
    	$query = $this->Auth->user();
        // $url = $this->Cookie->read('url');
        $ref = isset($_GET['quy']) ? $_GET['quy'] : '';
        $id = isset($_GET['id']) ? $_GET['id'] : '';
        if($this->request->is('post')){
            $data = $this->request->data();
            if (empty($data['email']) && empty($data['password'])) {
               $this->Flash->error(__('Nhập tên tài khoản hoặc mật khẩu'));
            } elseif (empty($data['email'])) {
                $this->Flash->error(__('Nhập tên tài khoản'));
            } elseif (empty($data['password'])) {
                $this->Flash->error(__('Nhập mật khẩu'));
            } else {
                $acount = $this->Auth->identify();
                if($acount){
                    $this->Auth->setUser($acount);
                    $query = $this->Auth->user();
                    if (!empty($this->Auth->user())) {
                        if($query['role_id']==1){
                            $this->redirect(['controller' => 'Home', 'action' => 'index']);
                        }else{
                            if($ref == "product-detail" && $id) {
                                $this->redirect(['controller' => 'DetailProduct', 'action' => 'index/'.$id]);
                            }
                            if($ref == "dathang" && $id){
                                $this->redirect(['controller' => 'Bills','action'=>'dathang']);
                            }
                            if($ref == "dangnhap" && $id){
                                $this->redirect(['controller' => 'HomeUsers','action'=>'index']);
                            }
                            if($ref == "dangxuat" && $id){
                                $this->redirect(['controller' => 'HomeUsers','action'=>'index']);
                            }
                            $this->redirect(['controller' => 'HomeUsers', 'action' => 'index']);
                        }
                    }
                }else{
                    $this->Flash->error(__('Sai tên tài khoản hoặc mật khẩu'));
                }               
            }
        }
    }
    public function dangki(){
    	$this->viewBuilder()->setLayout('my_layout_login');
    	$query = $this->Acounts->find()->select(['email'])->toArray();
        foreach ($query as $v) {
            $email = $v->email;
        }
        $post = '';
        
        if($this->request->is('post')){
           $post = $this->Acounts->newEntity();
           $addAcounts = [];
           //$addAcounts['user_id']= Text::uuid();
            $addAcounts['fullname'] = $this->request->data['fullname'];
            $addAcounts['email'] = $this->request->data['email1'];
            $addAcounts['phone'] = $this->request->data['phone'];
            $password = $this->request->data['password'];
            $addAcounts['address'] = $this->request->data['address'];
            $addAcounts['status'] = '1';
            $addAcounts['role_id'] ='2';
           	$hasher = new DefaultPasswordHasher();
			$addAcounts['password'] = $hasher->hash($password);
            if($addAcounts['email']!=$email){
                $post = $this->Acounts->patchEntity($post, $addAcounts);
                if($this->Acounts->save($post)){
                    $this->Flash->success(__('Đăng ký thành công'));
                    $this->redirect(['controller'=>'HomeUsers','action'=>'index']);
                }else{
                    $this->Flash->error(__('Đăng ký không thành công'));
                }
            }else{
                $this->Flash->error(__('Email bị trùng-Xin nhập lại'));
            }
        }
        $this->set('post', $post);
    }

    public function logout(){
        $this->Auth->logout();
        $this->redirect(['controller'=>'HomeUsers','action'=>'index']);
        $this->Flash->myError('Đăng xuất thành công');
    }
}
?>
