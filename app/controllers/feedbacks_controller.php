<?php
class FeedbacksController extends AppController {

	var $name = 'Feedbacks';

	function index() {
		$this->Feedback->recursive = 0;
		$this->set('feedbacks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid feedback', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('feedback', $this->Feedback->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Feedback->create();
			if ($this->Feedback->save($this->data)) {
				$this->Session->setFlash(__('The feedback has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback could not be saved. Please, try again.', true));
			}
		}
		$deals = $this->Feedback->Deal->find('list');
		$retailers = $this->Feedback->Retailer->find('list');
		$users = $this->Feedback->User->find('list');
		$this->set(compact('deals', 'retailers', 'users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid feedback', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Feedback->save($this->data)) {
				$this->Session->setFlash(__('The feedback has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feedback->read(null, $id);
		}
		$deals = $this->Feedback->Deal->find('list');
		$retailers = $this->Feedback->Retailer->find('list');
		$users = $this->Feedback->User->find('list');
		$this->set(compact('deals', 'retailers', 'users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for feedback', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Feedback->delete($id)) {
			$this->Session->setFlash(__('Feedback deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Feedback was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->Feedback->recursive = 0;
		$this->set('feedbacks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid feedback', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('feedback', $this->Feedback->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Feedback->create();
			if ($this->Feedback->save($this->data)) {
				$this->Session->setFlash(__('The feedback has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback could not be saved. Please, try again.', true));
			}
		}
		$deals = $this->Feedback->Deal->find('list');
		$retailers = $this->Feedback->Retailer->find('list');
		$users = $this->Feedback->User->find('list');
		$this->set(compact('deals', 'retailers', 'users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid feedback', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Feedback->save($this->data)) {
				$this->Session->setFlash(__('The feedback has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The feedback could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Feedback->read(null, $id);
		}
		$deals = $this->Feedback->Deal->find('list');
		$retailers = $this->Feedback->Retailer->find('list');
		$users = $this->Feedback->User->find('list');
		$this->set(compact('deals', 'retailers', 'users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for feedback', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Feedback->delete($id)) {
			$this->Session->setFlash(__('Feedback deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Feedback was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
