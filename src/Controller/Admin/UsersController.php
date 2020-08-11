<?php
declare(strict_types=1);

namespace App\Controller\Admin;
use App\Controller\AppController;


/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    
         public function login()
    {
        if ($this->request->is('post')) {
        $user = $this->Auth->identify();
        if ($user) {
            if($user['role_id'] != null){ //verifica el status del usuario
                $role = $this->Users->Roles->findById($user['role_id']);
                $role=$role->toArray()[0]['name'];
                $user['role'] = $role;
                //Aqui guardo la sesion
                $this->Auth->setUser($user);
             }
             //Aqui redirecciona segun el role de usuario
             if(isset($user['role']) && $user['role'] === 'Administrador'){
                 return $this->redirect(['controller' => 'providers', 'action' => 'index']);
             }elseif (isset($user['role']) && $user['role'] === 'Cliente') {
                 return $this->redirect($this->Auth->redirectUrl());
             }
        }else{
            $this->Flash->error('Su correo o contraseña son incorrectos.');
        }
    }
    }


    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Roles'],
        ];
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Roles', 'Purchases'],
        ]);

        $this->set(compact('user'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser eliminado, intente de nuevo'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('El usuario no pudo ser eliminado, intente de nuevo'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    }

     public function logout()
{
    //$this->Flash->success('You are now logged out.');
    //return $this->redirect($this->Auth->logout());
    $this->Auth->logout();
    return $this->redirect($this->Auth->redirectUrl());
    //cambiar la direccion del logout al home
}

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('El usuario ha sido eliminado'));
        } else {
            $this->Flash->error(__('El usuario no pudo ser eliminado, intente de nuevo'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function register() { 
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $query = $this->Users->findAllByEmail($this->request->getData()['email']); 
            $user = $this->Users->patchEntity($user, $this->request->getData());
            $rolid = $this->Users->Roles->findByName('Cliente');
            $rolid = $rolid->toArray()[0]['id'];
            $user->role_id=$rolid;
            if ($this->Users->save($user)) {
                $this->Flash->success(__('El usuario ha sido guardado.'));
                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error(__('El usuario no pudo ser eliminado, intente de nuevo'));
        }
        $roles = $this->Users->Roles->find('list', ['limit' => 200]);
        $this->set(compact('user', 'roles'));
    } 
    public function isAuthorized($user) { 
		if(isset($user['role']) && $user['role'] === 'Cliente'){
		    if(in_array($this->request->getParam('action'),['logout'])){
		        return true;
		    }
		}
		return parent::isAuthorized($user);
	}
}
