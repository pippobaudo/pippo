<?php
class RetailersController extends AppController {
	var $components = array('Uploader');
	var $name = 'Retailers';

	function index() {
		/*
		$this->Retailer->recursive = 0;
		$this->set('retailers', $this->paginate());
		*/
		$this->Retailer->Deal->recursive = 0;
		$this->set('deals', $this->Retailer->Deal->find('all'));
		
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('retailer', $this->Retailer->read(null, $id));
	}

	function login(){
		$this->Auth->userModel = 'Retailers';
		if($this->Auth->login($this->data)){
			$this->Session->setFlash('You are logged in!', 'default', array('class' => 'success'));
			$this->redirect($this->Auth->loginRedirect);
		}
	}

	function signup(){
		if(!empty($this->data)){
			$this->data['Retailer']['password'] =  $this->Auth->password($this->data['Retailer']['password']);
			$this->data['Retailer']['deals_ok'] = 0;
			$this->data['Retailer']['deals_ko'] = 0;
			$this->data['Retailer']['lat'] = 0;
			$this->data['Retailer']['lon'] = 0;
			$this->data['Retailer']['feedback_ok_counter'] = 0;
			
			$this->data['Retailer']['registration_date'] = date('Y:m:d H:i:s');
			
			//inserimento immagine 
			$tmp = $this->uploadThisImage($this->data['Retailer']['company_name']);
			$image = array('original_path'=>substr($tmp['original']['path'], 1), 'thumb_path'=>substr($tmp['thumb'],1), 'type'=>$tmp['original']['type'], 'size'=>$tmp['original']['size']);
			
			if($this->Retailer->Image->save($image)){
				$this->data['Retailer']['image_id'] = $this->Retailer->Image->id;
				unset($this->data['Retailer']['image']);
				if($this->Retailer->save($this->data)){
					$this->Session->setFlash(__('The retailer has been saved', true), 'default', array('class' => 'success'));
					$this->redirect(array('controller'=>'pages', 'action' => 'index'));
				}else{
					$this->Session->setFlash(__('The retailer not has been saved', true), 'default', array('class' => 'error'));
					$this->redirect(array('controller'=>'pages', 'action' => 'index'));
				}
			}
		}
	}
	
	function uploadThisImage($dir = null){
		$this->Uploader->maxFileSize = '2M'; // 2 Megabytes
		$this->Uploader->uploadDir = 'files/companies/'.$dir;
		$this->Uploader->tempDir = 'files/tmp/';
		$data = $this->Uploader->upload('image', array('overwrite' => true));
		$crop = $this->Uploader->crop(array('width'=>270, 'height'=>162, 'append'=>'_cropped', 'quality'=>100, 'location'=>'center'));
		return array('original'=>$data, 'thumb'=>$crop);
	}

/*
	function add() {
		if (!empty($this->data)) {
			$this->Retailer->create();
			if ($this->Retailer->save($this->data)) {
				$this->Session->setFlash(__('The retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailer could not be saved. Please, try again.', true));
			}
		}
		$carriers = $this->Retailer->Carrier->find('list');
		$referrings = $this->Retailer->Referring->find('list');
		$deals = $this->Retailer->Deal->find('list');
		$images = $this->Retailer->Image->find('list', array('fields'=>array('original_path')));
		$this->set(compact('carriers', 'referrings', 'deals', 'images'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Retailer->save($this->data)) {
				$this->Session->setFlash(__('The retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Retailer->read(null, $id);
		}
		$carriers = $this->Retailer->Carrier->find('list');
		$referrings = $this->Retailer->Referring->find('list');
		$deals = $this->Retailer->Deal->find('list');
		$images = $this->Retailer->Image->find('list');
		$this->set(compact('carriers', 'referrings', 'deals', 'images'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for retailer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Retailer->delete($id)) {
			$this->Session->setFlash(__('Retailer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Retailer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
*/

	function admin_index() {
		$this->Retailer->recursive = 0;
		$this->set('retailers', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('retailer', $this->Retailer->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Retailer->create();
			if ($this->Retailer->save($this->data)) {
				$this->Session->setFlash(__('The retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailer could not be saved. Please, try again.', true));
			}
		}
		$carriers = $this->Retailer->Carrier->find('list');
		$referrings = $this->Retailer->Referring->find('list');
		$deals = $this->Retailer->Deal->find('list');
		$this->set(compact('carriers', 'referrings', 'deals'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid retailer', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Retailer->save($this->data)) {
				$this->Session->setFlash(__('The retailer has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The retailer could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Retailer->read(null, $id);
		}
		$carriers = $this->Retailer->Carrier->find('list');
		$referrings = $this->Retailer->Referring->find('list');
		$deals = $this->Retailer->Deal->find('list');
		$this->set(compact('carriers', 'referrings', 'deals'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for retailer', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Retailer->delete($id)) {
			$this->Session->setFlash(__('Retailer deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Retailer was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
