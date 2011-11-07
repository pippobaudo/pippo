<?php
class PurchasinggapsController extends AppController {

	var $name = 'Purchasinggaps';

	function index() {
		$this->Purchasinggap->recursive = 0;
		$this->set('purchasinggaps', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid purchasinggap', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('purchasinggap', $this->Purchasinggap->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Purchasinggap->create();
			if ($this->Purchasinggap->save($this->data)) {
				$this->Session->setFlash(__('The purchasinggap has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchasinggap could not be saved. Please, try again.', true));
			}
		}
		$quorums = $this->Purchasinggap->Quorum->find('list');
		$priceranges = $this->Purchasinggap->Pricerange->find('list');
		$revenues = $this->Purchasinggap->Revenue->find('list');
		$this->set(compact('quorums', 'priceranges', 'revenues'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid purchasinggap', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Purchasinggap->save($this->data)) {
				$this->Session->setFlash(__('The purchasinggap has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchasinggap could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Purchasinggap->read(null, $id);
		}
		$quorums = $this->Purchasinggap->Quorum->find('list');
		$priceranges = $this->Purchasinggap->Pricerange->find('list');
		$revenues = $this->Purchasinggap->Revenue->find('list');
		$this->set(compact('quorums', 'priceranges', 'revenues'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for purchasinggap', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Purchasinggap->delete($id)) {
			$this->Session->setFlash(__('Purchasinggap deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Purchasinggap was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Purchasinggap->recursive = 0;
		$this->set('purchasinggaps', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid purchasinggap', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('purchasinggap', $this->Purchasinggap->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Purchasinggap->create();
			if ($this->Purchasinggap->save($this->data)) {
				$this->Session->setFlash(__('The purchasinggap has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchasinggap could not be saved. Please, try again.', true));
			}
		}
		$quorums = $this->Purchasinggap->Quorum->find('list');
		$priceranges = $this->Purchasinggap->Pricerange->find('list');
		$revenues = $this->Purchasinggap->Revenue->find('list');
		$this->set(compact('quorums', 'priceranges', 'revenues'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid purchasinggap', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Purchasinggap->save($this->data)) {
				$this->Session->setFlash(__('The purchasinggap has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The purchasinggap could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Purchasinggap->read(null, $id);
		}
		$quorums = $this->Purchasinggap->Quorum->find('list');
		$priceranges = $this->Purchasinggap->Pricerange->find('list');
		$revenues = $this->Purchasinggap->Revenue->find('list');
		$this->set(compact('quorums', 'priceranges', 'revenues'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for purchasinggap', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Purchasinggap->delete($id)) {
			$this->Session->setFlash(__('Purchasinggap deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Purchasinggap was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
