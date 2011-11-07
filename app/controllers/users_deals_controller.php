<?php
class UsersDealsController extends AppController {

	var $name = 'UsersDeals';

	function index() {
		$this->UsersDeal->recursive = 0;
		$this->set('usersDeals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users deal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersDeal', $this->UsersDeal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->UsersDeal->create();
			if ($this->UsersDeal->save($this->data)) {
				$this->Session->setFlash(__('The users deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users deal could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users deal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersDeal->save($this->data)) {
				$this->Session->setFlash(__('The users deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users deal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersDeal->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users deal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersDeal->delete($id)) {
			$this->Session->setFlash(__('Users deal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users deal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->UsersDeal->recursive = 0;
		$this->set('usersDeals', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid users deal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usersDeal', $this->UsersDeal->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->UsersDeal->create();
			if ($this->UsersDeal->save($this->data)) {
				$this->Session->setFlash(__('The users deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users deal could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid users deal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->UsersDeal->save($this->data)) {
				$this->Session->setFlash(__('The users deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The users deal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->UsersDeal->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for users deal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->UsersDeal->delete($id)) {
			$this->Session->setFlash(__('Users deal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Users deal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
