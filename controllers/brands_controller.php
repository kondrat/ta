<?php
class BrandsController extends AppController {

	var $name = 'Brands';
	//var $helpers = array('Html', 'Form');
	var $uses = array('Brand');

//--------------------------------------------------------------------	
  function beforeFilter() {
        $this->Auth->allow('preg','index','view','mytest','add');
        parent::beforeFilter(); 
        $this->Auth->autoRedirect = false;
        //debug($this->Session->read() );
    }
//--------------------------------------------------------------------

	function index() {
		$this->Brand->recursive = 0;
		$this->set('brands', $this->paginate());
	}
	function preg() {
		App::import('Core', 'HttpSocket');
		$HttpSocket = new HttpSocket();
		$results = $HttpSocket->get('http://www.vimar.ru//shop_model2/10971.html',array() );
		/*
			$handle = fopen("http://www.vimar.ru/download.phtml?id=1&type_id=114&count=160", "rb");
			$newfile = fopen("files/testfile.pdf", "wb");
			$contents = '';
			//$contents = 'tes';
			
			while (!feof($handle)) {
			  $contents .= fread($handle, 8192);
			}
			
		   if (fwrite($newfile, $contents) === FALSE) {
		        echo "Не могу произвести запись в файл ($newfile)";
		        exit;
		    }
    
    		echo "Ура! Записали  в файл ($newfile)";
    		fclose($handle);
   			fclose($newfile);
		*/	
			
		//debug($results);
		/*
			shop_model2 parse
		$shop_model2 = "/shop_model2\/[a-z0-9\.]+/i";
		preg_match_all($shop_model2, $results, $c);
		foreach($c as $k => $v) {
			
		}
		$g = json_encode($c);
		debug(json_decode($g));
		*/
		//single item parse

		$arr = array();
		$str = '';
		$new = iconv("cp1251", "UTF-8", $results);
		//echo $new;
		$new2 = preg_replace(array("/\n/","/\r\n/","/\r/","/\t/"), '', $new);
		$new2 = preg_replace(array("/> +/"),'>',$new2);

		//echo $new2;
		$item = "/(boldText>)([a-z\x80-\xFF ]+)/";
		//$item = "/<td class=\"normaltext\" colspan=\"2\">/";
		preg_match_all($item, $new2, $c);	
			/*
		foreach( $c['0'] as $k => $v ) {
			$new = iconv("cp1251", "UTF-8", $v);
			$arr[$k] = $new;
			$str .= $v."\n";
		}
 
		
			$newfile = fopen("files/testfile3.txt", "wb");
			fwrite($newfile, $str);
			fclose($newfile);
			*/
		debug($c);
		//$g = json_encode($c);
		//debug(json_decode($g));
		
		
	}
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Brand.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('brand', $this->Brand->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Brand->create();
			if ($this->Brand->save($this->data)) {
				
				
				$parentAco = $this->Acl->Aco->findByAlias('Brands');
				$this->Acl->Aco->create( array(
											'alias' =>  'Brand::'.$this->Brand->id,
											'model' => 'Brands',
											'foreign_key' => $this->Brand->id,
											'parent_id' => $parentAco['Aco']['id']
											) 
										);
				$this->Acl->Aco->save();
				//$this->Acl->allow( array('alias' => 'user'), 'Brand::'.$this->Brand->id , 'read');	
				$this->Acl->allow( array('model' => 'User', 'foreign_key' => $this->Session->read('Auth.User.id') ) , 'Brand::'.$this->Brand->id, '*');				
				
				
				
				
				
				
				
				$this->Session->setFlash(__('The Brand has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Brand could not be saved. Please, try again.', true));
			}
		}
	}
//-----------------------------------------------------------------------
	function edit($id = null) {
		Configure::write('debug',0);
		//$this->Brand->id = $id;
		//debug($this->Brand->id);
		
		$brand_id = 'Brand::'.$id;
		//debug($brand_id);
		
		if ( $this->Acl->check( array('model' => 'User', 'foreign_key' => $this->Session->read('Auth.User.id') ) , $brand_id , 'update' ) ) {
			
			if (!$id && empty($this->data)) {
				$this->Session->setFlash(__('Invalid Brand', true));
				$this->redirect(array('action'=>'index'));
			}
			if (!empty($this->data)) {
				if ($this->Brand->save($this->data)) {
					$this->Session->setFlash(__('The Brand has been saved', true));
					$this->redirect(array('action'=>'index'));
				} else {
					$this->Session->setFlash(__('The Brand could not be saved. Please, try again.', true));
				}
			}
			if (empty($this->data)) {
				$this->data = $this->Brand->read(null, $id);
			}
		
		} else {
			$this->Session->setFlash(__('No permissions for you, sorry.', true));
			$this->redirect( array('action' => 'index') );
		}
	}
//------------------------------------------------------------------------
	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Brand', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Brand->del($id)) {
			$this->Session->setFlash(__('Brand deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
//------------------------------------------------------------------------
	function mytest () {
		$myTest = $this->Brand->find('all', array('conditions' => array() ) );
		
		$this->set('myTest', $myTest);
		
	}

}
?>