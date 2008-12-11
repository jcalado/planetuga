<?php
class FeedsController extends AppController {

	var $name = 'Feeds';
	var $paginate = array('limit' => 10, 'page' => 1, 'order' => 'Feed.id'); 
	

	function index() {
		
        $feeds = $this->Feed->find('all'); 
        if(isset($this->params['requested'])) { 
             return $feeds; 
        } 
        $feeds = $this->Feed->find('all');
		$this->set('feeds', $this->paginate('Feed')); 

	}

	
	function admin_index() {
	
		// Find all the freaking feeds :)
		$this->set('feeds', $this->paginate('Feed'));


	}
	
	function admin_view($id = null) {
		
		$this->Feed->id = $id;
		$this->set('feed', $this->Feed->read());
	}
	
	function admin_add() {
		
		$this->set('users', $this->Feed->User->find('list')); 
		if (!empty($this->data)) {
			if ($this->Feed->save($this->data)) {
				$this->flash('Your feed has been saved.', '/admin/feeds');
			}
		}
	}
		
	
	function admin_delete($id) {
		
		$this->Feed->del($id);
		$this->flash('A feed com o id: '.$id.' foi apagada.', '/admin/feeds');
	}
	
	
	function admin_edit($id = null) {
		
		$this->Feed->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Feed->read();
		} else {
			if ($this->Feed->save($this->data)) {
				$this->flash('A feed foi actualizada.','/admin/feeds');
			}
		}
	}
	
}
?>