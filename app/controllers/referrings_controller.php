<?php
class ReferringsController extends AppController {

	var $name = 'Referrings';

	function index() {
		$this->Referring->recursive = 0;
		$this->set('referrings', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid referring', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('referring', $this->Referring->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Referring->create();
			if ($this->Referring->save($this->data)) {
				$this->Session->setFlash(__('The referring has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referring could not be saved. Please, try again.', true));
			}
		}
		$images = $this->Referring->Image->find('list');
		$this->set(compact('images'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid referring', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Referring->save($this->data)) {
				$this->Session->setFlash(__('The referring has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referring could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Referring->read(null, $id);
		}
		$images = $this->Referring->Image->find('list');
		$this->set(compact('images'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for referring', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Referring->delete($id)) {
			$this->Session->setFlash(__('Referring deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Referring was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Referring->recursive = 0;
		$this->set('referrings', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid referring', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('referring', $this->Referring->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Referring->create();
			if ($this->Referring->save($this->data)) {
				$this->Session->setFlash(__('The referring has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referring could not be saved. Please, try again.', true));
			}
		}
		$images = $this->Referring->Image->find('list');
		$this->set(compact('images'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid referring', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Referring->save($this->data)) {
				$this->Session->setFlash(__('The referring has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The referring could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Referring->read(null, $id);
		}
		$images = $this->Referring->Image->find('list');
		$this->set(compact('images'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for referring', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Referring->delete($id)) {
			$this->Session->setFlash(__('Referring deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Referring was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
