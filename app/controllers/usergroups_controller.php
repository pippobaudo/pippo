<?php
class UsergroupsController extends AppController {

	var $name = 'Usergroups';

	function index() {
		$this->Usergroup->recursive = 0;
		$this->set('usergroups', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usergroup', $this->Usergroup->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Usergroup->create();
			if ($this->Usergroup->save($this->data)) {
				$this->Session->setFlash(__('The usergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usergroup could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usergroup->save($this->data)) {
				$this->Session->setFlash(__('The usergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usergroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usergroup->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usergroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usergroup->delete($id)) {
			$this->Session->setFlash(__('Usergroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usergroup was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Usergroup->recursive = 0;
		$this->set('usergroups', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid usergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('usergroup', $this->Usergroup->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Usergroup->create();
			if ($this->Usergroup->save($this->data)) {
				$this->Session->setFlash(__('The usergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usergroup could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid usergroup', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Usergroup->save($this->data)) {
				$this->Session->setFlash(__('The usergroup has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The usergroup could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Usergroup->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for usergroup', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Usergroup->delete($id)) {
			$this->Session->setFlash(__('Usergroup deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Usergroup was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
