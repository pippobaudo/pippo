<?php
class CarriersController extends AppController {

	var $name = 'Carriers';

	function index() {
		$this->Carrier->recursive = 0;
		$this->set('carriers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid carrier', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('carrier', $this->Carrier->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Carrier->create();
			if ($this->Carrier->save($this->data)) {
				$this->Session->setFlash(__('The carrier has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrier could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid carrier', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Carrier->save($this->data)) {
				$this->Session->setFlash(__('The carrier has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrier could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Carrier->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for carrier', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Carrier->delete($id)) {
			$this->Session->setFlash(__('Carrier deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Carrier was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Carrier->recursive = 0;
		$this->set('carriers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid carrier', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('carrier', $this->Carrier->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Carrier->create();
			if ($this->Carrier->save($this->data)) {
				$this->Session->setFlash(__('The carrier has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrier could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid carrier', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Carrier->save($this->data)) {
				$this->Session->setFlash(__('The carrier has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The carrier could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Carrier->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for carrier', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Carrier->delete($id)) {
			$this->Session->setFlash(__('Carrier deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Carrier was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
