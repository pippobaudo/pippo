<?php
class ProposalsController extends AppController {

	var $name = 'Proposals';

	function index() {
		$this->Proposal->recursive = 0;
		$this->set('proposals', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$retailers = $this->Proposal->Retailer->find('list');
		$deals = $this->Proposal->Deal->find('list');
		$purchasinggaps = $this->Proposal->Purchasinggap->find('list');
		$this->set(compact('retailers', 'deals', 'purchasinggaps'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$retailers = $this->Proposal->Retailer->find('list');
		$deals = $this->Proposal->Deal->find('list');
		$purchasinggaps = $this->Proposal->Purchasinggap->find('list');
		$this->set(compact('retailers', 'deals', 'purchasinggaps'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Proposal->delete($id)) {
			$this->Session->setFlash(__('Proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Proposal->recursive = 0;
		$this->set('proposals', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('proposal', $this->Proposal->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Proposal->create();
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		$retailers = $this->Proposal->Retailer->find('list');
		$deals = $this->Proposal->Deal->find('list');
		$purchasinggaps = $this->Proposal->Purchasinggap->find('list');
		$this->set(compact('retailers', 'deals', 'purchasinggaps'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid proposal', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Proposal->save($this->data)) {
				$this->Session->setFlash(__('The proposal has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The proposal could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Proposal->read(null, $id);
		}
		$retailers = $this->Proposal->Retailer->find('list');
		$deals = $this->Proposal->Deal->find('list');
		$purchasinggaps = $this->Proposal->Purchasinggap->find('list');
		$this->set(compact('retailers', 'deals', 'purchasinggaps'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for proposal', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Proposal->delete($id)) {
			$this->Session->setFlash(__('Proposal deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Proposal was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
