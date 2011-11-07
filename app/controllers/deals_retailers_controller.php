<?php
class DealsRetailersController extends AppController {

	var $name = 'DealsRetailers';

	function index() {
		$this->DealsRetailer->recursive = 0;
		$this->set('dealsRetailers', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid deals retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dealsRetailer', $this->DealsRetailer->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DealsRetailer->create();
			if ($this->DealsRetailer->save($this->data)) {
				$this->Session->setFlash(__('The deals retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals retailer could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid deals retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DealsRetailer->save($this->data)) {
				$this->Session->setFlash(__('The deals retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals retailer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DealsRetailer->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for deals retailer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DealsRetailer->delete($id)) {
			$this->Session->setFlash(__('Deals retailer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Deals retailer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->DealsRetailer->recursive = 0;
		$this->set('dealsRetailers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid deals retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dealsRetailer', $this->DealsRetailer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->DealsRetailer->create();
			if ($this->DealsRetailer->save($this->data)) {
				$this->Session->setFlash(__('The deals retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals retailer could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid deals retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DealsRetailer->save($this->data)) {
				$this->Session->setFlash(__('The deals retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The deals retailer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DealsRetailer->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for deals retailer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DealsRetailer->delete($id)) {
			$this->Session->setFlash(__('Deals retailer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Deals retailer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
