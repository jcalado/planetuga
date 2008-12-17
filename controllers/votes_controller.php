<?php
class VotesController extends AppController {

	var $name = 'Votes';
	var $helpers = array('Time','Html', 'Form');

	function index() {
		$this->Vote->recursive = 0;
		$this->set('votes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Vote.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('vote', $this->Vote->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vote->create();
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(__('The Vote has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Vote could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Vote->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(__('The Vote has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vote->read(null, $id);
		}
		$users = $this->Vote->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vote->del($id)) {
			$this->Session->setFlash(__('Vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Vote->recursive = 0;
		$this->set('votes', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Vote.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('vote', $this->Vote->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Vote->create();
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(__('The Vote has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Vote could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Vote->User->find('list');
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vote->save($this->data)) {
				$this->Session->setFlash(__('The Vote has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Vote could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vote->read(null, $id);
		}
		$users = $this->Vote->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Vote', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vote->del($id)) {
			$this->Session->setFlash(__('Vote deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}
	
	function admin_ready(){
		$this->Vote->recursive = 0;
		$this->set('votes', $this->paginate());
	}
	
	function up($id = null){
		$userid = $this->Auth->user('id');
		if ($this->Vote->voteup($id,$userid) == false) {
			$this->Session->setFlash(__('You have already voted!', true));
		}
		$this->redirect(array('action'=>'index'));
	}
	
	function down($id = null){
		$userid = $this->Auth->user('id');
		if ($this->Vote->votedown($id,$userid) == false) {
			$this->Session->setFlash(__('You have already voted!', true));
		}
		$this->redirect(array('action'=>'index'));
	}

}
?>