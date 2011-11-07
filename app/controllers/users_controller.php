<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	
	function beforeFilter(){
		parent::beforeFilter();
	}
	
/*

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$usergroups = $this->User->Usergroup->find('list');
		$deals = $this->User->Deal->find('list');
		$this->set(compact('usergroups', 'deals'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$usergroups = $this->User->Usergroup->find('list');
		$deals = $this->User->Deal->find('list');
		$this->set(compact('usergroups', 'deals'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}

*/
	// per visualizzarei il profilo di un utente
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}


	function login(){
		if(!empty($this->data)) {
			if($this->Auth->login($this->data)) {
	        	$this->Session->setFlash('You are logged in!', 'default', array('class' => 'success'));
				$this->redirect($this->Auth->loginRedirect);
			}else{
				//  $this->Auth->authenticate = ClassRegistry::init('User');    DA CONTROLLARE QUESTA SOLUZIONE
				$this->Auth->userModel = 'Retailer';
				if($this->Auth->login($this->data)){
					$this->Session->setFlash('You are logged in!', 'default', array('class' => 'success'));
					$this->redirect($this->Auth->loginRedirect);
				}
			}
		}
	}

	function logout(){
		$this->Session->destroy();
		$this->Session->setFlash('Logout effettuato con successo', 'default', array('class' => 'alert_info'));
		$this->redirect($this->Auth->logout());
	}
	
	function signup(){
		if(!empty($this->data)){
			// prelevare il locale dal browser
			if($this->data['User']['user_type'] == 0){
				// è un utente
				$this->data['User']['usergroup_id'] = 1;
			}else{
				// è un commerciante
				$this->data['User']['usergroup_id'] = 3;
			}
			unset($this->data['User']['user_type']);
			$this->data['User']['last_login'] = date('Y:m:d H:i:s');
			$this->User->save($this->data);
			$this->redirect(array('controller'=>'pages', 'action'=>'index'));
			$this->Session->setFlash(__('Utente registrato con successo', true));
		}
	}

	function dashboard(){
		$u = $this->Auth->user();
		if(!empty($u)){
			$this->set('user', $this->User->findById($u['User']['id']));
		}else{
			$this->Session->destroy();
			$this->redirect($this->Auth->logoutRedirect);
		}
	}

	function admin_index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$usergroups = $this->User->Usergroup->find('list');
		$deals = $this->User->Deal->find('list');
		$this->set(compact('usergroups', 'deals'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}

		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
			$this->data['User']['password'] = '';
		}
		
		$usergroups = $this->User->Usergroup->find('list');
		$deals = $this->User->Deal->find('list');
		$this->set(compact('usergroups', 'deals'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
