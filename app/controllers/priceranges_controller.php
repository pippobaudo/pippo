<?php
class PricerangesController extends AppController {

	var $name = 'Priceranges';

	function index() {
		$this->Pricerange->recursive = 0;
		$this->set('priceranges', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pricerange', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pricerange', $this->Pricerange->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pricerange->create();
			if ($this->Pricerange->save($this->data)) {
				$this->Session->setFlash(__('The pricerange has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricerange could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pricerange', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pricerange->save($this->data)) {
				$this->Session->setFlash(__('The pricerange has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricerange could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pricerange->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pricerange', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pricerange->delete($id)) {
			$this->Session->setFlash(__('Pricerange deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pricerange was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Pricerange->recursive = 0;
		$this->set('priceranges', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pricerange', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pricerange', $this->Pricerange->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Pricerange->create();
			if ($this->Pricerange->save($this->data)) {
				$this->Session->setFlash(__('The pricerange has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricerange could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pricerange', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pricerange->save($this->data)) {
				$this->Session->setFlash(__('The pricerange has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pricerange could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pricerange->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pricerange', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pricerange->delete($id)) {
			$this->Session->setFlash(__('Pricerange deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pricerange was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
