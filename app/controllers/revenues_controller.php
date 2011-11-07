<?php
class RevenuesController extends AppController {

	var $name = 'Revenues';

	function index() {
		$this->Revenue->recursive = 0;
		$this->set('revenues', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid revenue', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('revenue', $this->Revenue->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Revenue->create();
			if ($this->Revenue->save($this->data)) {
				$this->Session->setFlash(__('The revenue has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revenue could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid revenue', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Revenue->save($this->data)) {
				$this->Session->setFlash(__('The revenue has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revenue could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Revenue->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for revenue', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Revenue->delete($id)) {
			$this->Session->setFlash(__('Revenue deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Revenue was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Revenue->recursive = 0;
		$this->set('revenues', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid revenue', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('revenue', $this->Revenue->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Revenue->create();
			if ($this->Revenue->save($this->data)) {
				$this->Session->setFlash(__('The revenue has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revenue could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid revenue', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Revenue->save($this->data)) {
				$this->Session->setFlash(__('The revenue has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The revenue could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Revenue->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for revenue', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Revenue->delete($id)) {
			$this->Session->setFlash(__('Revenue deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Revenue was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
