<?php
class QuorumsController extends AppController {

	var $name = 'Quorums';

	function index() {
		$this->Quorum->recursive = 0;
		$this->set('quorums', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid quorum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('quorum', $this->Quorum->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Quorum->create();
			if ($this->Quorum->save($this->data)) {
				$this->Session->setFlash(__('The quorum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quorum could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid quorum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Quorum->save($this->data)) {
				$this->Session->setFlash(__('The quorum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quorum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Quorum->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for quorum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Quorum->delete($id)) {
			$this->Session->setFlash(__('Quorum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Quorum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Quorum->recursive = 0;
		$this->set('quorums', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid quorum', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('quorum', $this->Quorum->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Quorum->create();
			if ($this->Quorum->save($this->data)) {
				$this->Session->setFlash(__('The quorum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quorum could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid quorum', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Quorum->save($this->data)) {
				$this->Session->setFlash(__('The quorum has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The quorum could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Quorum->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for quorum', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Quorum->delete($id)) {
			$this->Session->setFlash(__('Quorum deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Quorum was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
