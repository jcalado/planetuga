<?php
class AnnouncesController extends AppController {

	var $name = 'Announces';
	
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('index', 'latest');
	}
	
	function index() {
			
        $announces = $this->Announce->find('all'); 
        if(isset($this->params['requested'])) { 
             return $announces; 
        } 
        $this->set('announces', $announces);

	}
	
	function latest() {

        $announces = $this->Announce->find(); 
        if(isset($this->params['requested'])) { 
             return $announces; 
        } 
        $this->set('announces', $this->Announce->find());

	}
	
	function featured() {

        $announces = $this->Announce->find('featured = 1'); 
        if(isset($this->params['requested'])) { 
             return $announces; 
        } 
        $this->set('announces', $this->Announce->find());

	}
	
	function admin_index() {
			
		// Find all the freaking announces :)
		$this->set('announces', $this->Announce->find('all'));

	}
	
	function admin_view($id = null) {
		
		$this->Announce->id = $id;
		$this->set('feed', $this->Announce->read());
	}
	
	function admin_add() {
		
		
			if (!empty($this->data)) {
				if ($this->Announce->save($this->data)) {
					$this->flash('Your feed has been saved.', '/admin/announces');
				}
			}
	}
		
	
	function admin_delete($id) {
		
		$this->Announce->del($id);
		$this->flash('The announce with id: '.$id.' has been deleted.', '/admin/announces');
	}
	
	
	function admin_edit($id = null) {
	
		$this->Announce->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Announce->read();
		} else {
			if ($this->Announce->save($this->data)) {
				$this->flash('Your feed has been updated.','/admin/announces');
			}
		}
	}
	
}
?>