<?php
class AppController extends Controller {
		var $components = array(
		        'Auth' => array(
		            'authorize' => 'actions',
		            'actionPath' => 'controllers/',
		            'loginAction' => array(
		                'controller' => 'users',
		                'action' => 'login',
		                'plugin' => false,
		               'admin' => false,
		                ),
		             ),
		         'Session'
		    );

		function beforeFilter(){
			// layout per l'admin
			if(!empty($this->params['prefix']) && $this->params['prefix'] == 'admin'){
				$this->layout = 'admin';
			}
			
			// Authenticate
			Security::setHash('sha1'); // or sha1 or sha256. 
			$this->Auth->fields = array('username' => 'email', 'password'=>'password');
			$this->Auth->loginAction = array('controller' => 'pages', 'action' => 'login');
			$this->Auth->loginRedirect = array('controller' => 'users', 'action' => 'dashboard');
			$this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'index');
			$this->Auth->redirect = array('admin'=>true,'controller' => 'pages', 'action' => 'dashboard');
			$this->Auth->authError = "Non hai i permessi per accedere in questa sezione.";
			$this->Auth->loginError = 'No Username / Password found.';
			
			
			// Check if the user is logged in
			if ( $this->Auth->user() ) {
				$this->set('isLogged', TRUE );
			} else {
				$this->set('isLogged', FALSE );
			}
			
			
			// Permission
//			$this->Auth->allow('index', 'how_it_works', 'blog', 'browse_deals', 'login', 'join');
			$this->Auth->allow('*');
//			$this->Auth->deny('*');
		}

		function beforeRender(){
			// settare ora italiana
	 		setlocale(LC_TIME, 'ita', 'it_IT');

			$admin = $this->Auth->user();
			if(!empty($admin)){
				$this->set('autenticato', 'admin');
			}

			if(!empty($this->params['prefix']) && $this->params['prefix'] == 'admin'){
				$this->layout = 'admin';
				/* controllo ulteriore all'AUTH */
//				$this->checkPermission();
			}
		}


		function checkPermission(){
			$admin = $this->Auth->user();
			if(empty($admin)){
				$this->Session->setFlash('Non sei autorizzato ad accedere', 'default', array('class' => 'message'));
				$this->redirect(array('admin'=>false, 'controller'=>'pages', 'action' => 'index'));
			}
		}
		
	
}
