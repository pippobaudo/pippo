<?php
class RetailergroupsController extends AppController {

	var $name = 'Retailergroups';

	function index() {
		$this->Retailergroup->recursive = 0;
		$this->set('retailergroups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid retailergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('retailergroup', $this->Retailergroup->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Retailergroup->create();
			if ($this->Retailergroup->save($this->data)) {
				$this->Session->setFlash(__('The retailergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailergroup could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid retailergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Retailergroup->save($this->data)) {
				$this->Session->setFlash(__('The retailergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailergroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Retailergroup->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for retailergroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Retailergroup->delete($id)) {
			$this->Session->setFlash(__('Retailergroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Retailergroup was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Retailergroup->recursive = 0;
		$this->set('retailergroups', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid retailergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('retailergroup', $this->Retailergroup->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Retailergroup->create();
			if ($this->Retailergroup->save($this->data)) {
				$this->Session->setFlash(__('The retailergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailergroup could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid retailergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Retailergroup->save($this->data)) {
				$this->Session->setFlash(__('The retailergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailergroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Retailergroup->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for retailergroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Retailergroup->delete($id)) {
			$this->Session->setFlash(__('Retailergroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Retailergroup was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
