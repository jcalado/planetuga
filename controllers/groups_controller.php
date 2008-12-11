<?

class GroupsController extends AppController {
	
	var $name = "Groups";
	var $hasMany = 'User';
	
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('*');
	}
	
	function index() {
        $groups = $this->Group->find('all'); 
        if(isset($this->params['requested'])) { 
             return $groups; 
        } 
		$this->set('groups', $this->paginate('Group')); 

	}

	
	function admin_index() {
	
        $posts = $this->Group->find('all'); 
        if(isset($this->params['requested'])) { 
             return $groups; 
        } 
		$this->set('groups', $this->paginate('Group')); 

	}
	
	function admin_add() {
		if (!empty($this->data)) {
			if ($this->Group->save($this->data)) {
				$this->flash('Novo grupo adicionado!.', '/admin/groups');
			}
		}
	}
	
	function admin_delete($id) {
		$this->Group->del($id);
		$this->flash('O grupo com id: '.$id.' foi eliminado.', '/admin/groups');
	}
	
	function admin_edit($id = null) {
		$this->Group->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Group->read();
		} else {
			if ($this->Group->save($this->data)) {
				$this->flash('Grupo editado.','/admin/groups');
			}
		}
	}
	
	function admin_view() {
        $posts = $this->Group->find(); 
        if(isset($this->params['requested'])) { 
             return $groups; 
        } 
		$this->set('group', $this->Group->find()); 

	}
	

	function view() {
        $posts = $this->Group->find(); 
        if(isset($this->params['requested'])) { 
             return $groups; 
        } 
		$this->set('group', $this->Group->find()); 

	}
	
}

?>