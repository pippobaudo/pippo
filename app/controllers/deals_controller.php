<?php
class DealsController extends AppController {

	var $name = 'Deals';

/*
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid deal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('deal', $this->Deal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Deal->create();
			if ($this->Deal->save($this->data)) {
				$this->Session->setFlash(__('The deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deal could not be saved. Please, try again.', true));
			}
		}
		$images = $this->Deal->Image->find('list');
		$subcategories = $this->Deal->Subcategory->find('list');
		$users = $this->Deal->User->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$users = $this->Deal->User->find('list');
		$this->set(compact('images', 'subcategories', 'users', 'retailers', 'retailers', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid deal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Deal->save($this->data)) {
				$this->Session->setFlash(__('The deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Deal->read(null, $id);
		}
		$images = $this->Deal->Image->find('list');
		$subcategories = $this->Deal->Subcategory->find('list');
		$users = $this->Deal->User->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$users = $this->Deal->User->find('list');
		$this->set(compact('images', 'subcategories', 'users', 'retailers', 'retailers', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for deal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Deal->delete($id)) {
			$this->Session->setFlash(__('Deal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Deal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
*/

	function index($id = null, $name = null) {
		if(!empty($id)){
			// prendi le info relative al dela con questo $name
			$d = $this->Deal->findById($id);
			$this->set('dc', $d);
		}else{
			// redirect
			// generico ALL da rifare!!
			$this->Deal->recursive = 0;
			$this->set('deals', $this->Deal->find('all'));
			
		}
	}

	function admin_index() {
		$this->Deal->recursive = 0;
		$this->set('deals', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid deal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('deal', $this->Deal->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Deal->create();
			if ($this->Deal->save($this->data)) {
				$this->Session->setFlash(__('The deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deal could not be saved. Please, try again.', true));
			}
		}
		$images = $this->Deal->Image->find('list');
		$subcategories = $this->Deal->Subcategory->find('list');
		$users = $this->Deal->User->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$users = $this->Deal->User->find('list');
		$this->set(compact('images', 'subcategories', 'users', 'retailers', 'retailers', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid deal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Deal->save($this->data)) {
				$this->Session->setFlash(__('The deal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Deal->read(null, $id);
		}
		$images = $this->Deal->Image->find('list');
		$subcategories = $this->Deal->Subcategory->find('list');
		$users = $this->Deal->User->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$retailers = $this->Deal->Retailer->find('list');
		$users = $this->Deal->User->find('list');
		$this->set(compact('images', 'subcategories', 'users', 'retailers', 'retailers', 'users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for deal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Deal->delete($id)) {
			$this->Session->setFlash(__('Deal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Deal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
