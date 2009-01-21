<?php
class TasksController extends AppController {

	var $name = 'Tasks';
	var $helpers = array('Html', 'Form');
	var $components = array('Email');

	function index() {
		$this->Task->recursive = 0;
		$this->set('tasks', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Task.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('task', $this->Task->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Task->create();
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The Task has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Task could not be saved. Please, try again.', true));
			}
		}
		$users = $this->Task->User->find('list');
		$this->set(compact('users'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Task', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The Task has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Task could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Task->read(null, $id);
		}
		$users = $this->Task->User->find('list');
		$this->set(compact('users'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Task', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Task->del($id)) {
			$this->Session->setFlash(__('Task deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}


	function admin_index() {
		$this->Task->recursive = 0;
		$this->set('tasks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid Task.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->set('task', $this->Task->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Task->create();
	
			$this->data["Task"]["user_id"] = $this->Auth->user('id');
		
			if ($this->Task->save($this->data)) {
				
				// Mail the user the task was assigned to
				$this->Email->from    = Configure::read('Site.name') . " <" . Configure::read('Site.email') . ">";
				$this->Email->to    = User::get('email');
				$this->Email->subject = __('New Task', true);
				$this->Email->send(__('There is a new task waiting for you.', true));
		
				$this->Session->setFlash(__('The Task has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Task could not be saved. Please, try again.', true));
			}
		}
		$conditions = array('conditions' => array('User.group_id' => '1'));
		$users = $this->Task->User->find('list', $conditions);
		$this->set(compact('users'));
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid Task', true));
			$this->redirect(array('action'=>'index'));
		}
		if (!empty($this->data)) {
			if ($this->Task->save($this->data)) {
				$this->Session->setFlash(__('The Task has been saved', true));
				$this->redirect(array('action'=>'index'));
			} else {
				$this->Session->setFlash(__('The Task could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Task->read(null, $id);
		}
		$users = $this->Task->User->find('list');
		$this->set(compact('users'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for Task', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Task->del($id)) {
			$this->Session->setFlash(__('Task deleted', true));
			$this->redirect(array('action'=>'index'));
		}
	}

}
?>