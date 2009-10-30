<?php
class AppController extends Controller {
	var $components      = array( 'Acl', 'Auth', 'RequestHandler', 'Email', 'Cookie');
    var $helpers         = array('Javascript', 'Html', 'Form', 'Menu', 'Tree');
    var $publicControllers = array('pages', 'test');


//--------------------------------------------------------------------
	function beforeFilter() {
        if( isset($this->Auth) ) {
								
            if($this->viewPath == 'pages') {
                $this->Auth->allow('*');
            } else {
                $this->Auth->authorize = 'actions';
                //$this->Auth->allow('*');
	            if ( in_array( low($this->params['controller']), $this->publicControllers) ) {
                	$this->Auth->allow('*');
                	$this->Auth->deny('pages/admin_index');
                }
            }
            $this->Auth->loginAction = array('admin' => false, 'controller' => 'users', 'action' => 'login');

        } 
		

	}
	


//--------------------------------------------------------------------

	function beforeRender() {
		/*
		if( ( (isset($this->params['prefix']) && $this->params['prefix'] == 'admin') or isset($this->params['admin']) ) && $this->Session->read('Auth.User.role') == 'admin' ) {
			
			$this->layout = 'admin';
		}
		$a = $this->Category->find('all', array( 'conditions' => array(), 'order' => array( 'Category.id' => 'asc'), 'fields' => array('name'), 'limit' => 12 ) );		
		$this->set('categories', $a );	
		*/
	}


//--------------------------------------------------------------------

}
?>