<?php 
class UsersController extends AppController
{
	var $name = "Users";
	var $helpers = array('Html', 'Form');
	var $paginate = array('limit' => 10, 'page' => 1); 
	var $actsAs = array('Acl' => array('requester'));
	var $components = array('Email');
	
	var $avatar = array('size' => 204800, 'type' => 'png');

	
	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('register', 'logout','initDB','admin_add','reset','verify');
	}

	function parentNode() {
	    if (!$this->id && empty($this->data)) {
	        return null;
	    }
	    $data = $this->data;
	    if (empty($this->data)) {
	        $data = $this->read();
	    }
	    if (!$data['User']['group_id']) {
	        return null;
	    } else {
	        return array('Group' => array('id' => $data['User']['group_id']));
	    }
	}
	
	function initDB() {
	    $group =& $this->User->Group;
	    // Admins
	    $group->id = 1;     
	    $this->Acl->allow($group, 'controllers');

	    // Bloggers
	    $group->id = 2;
	    $this->Acl->deny($group, 'controllers');
	    $this->Acl->allow($group, 'controllers/Posts');
	    $this->Acl->allow($group, 'controllers/Users/view');
		$this->Acl->allow($group, 'controllers/Feeds/index');
		$this->Acl->allow($group, 'controllers/Users/index');
		$this->Acl->allow($group, 'controllers/Users/changepassword');
		$this->Acl->allow($group, 'controllers/Users/avatar');
		

	    // Users 
	    $group->id = 3;
	    $this->Acl->deny($group, 'controllers');        
		$this->Acl->allow($group, 'controllers/Pages');
		$this->Acl->allow($group, 'controllers/Announces/index');
		$this->Acl->allow($group, 'controllers/Announces/latest');
		$this->Acl->allow($group, 'controllers/Feeds/index');
		
	    $this->Acl->allow($group, 'controllers/Posts/index');
		$this->Acl->allow($group, 'controllers/Posts/archive');
		$this->Acl->allow($group, 'controllers/Posts/widget');
				
	    $this->Acl->allow($group, 'controllers/Users/view');
		$this->Acl->allow($group, 'controllers/Users/changepassword');
	}
	
	function index() {
        $posts = $this->User->find('all'); 
        if(isset($this->params['requested'])) { 
             return $users; 
        } 
		$this->set('users', $this->paginate('User')); 

	}


	/**
	 * Admin methods
	 * 
	 **/
	
	
	function admin_login() {
		$this->login();
		$this->render('login');
	}

	function admin_logout() {
		$this->logout();
	}

	
	function admin_index() {
	
        $posts = $this->User->find('all'); 
        if(isset($this->params['requested'])) { 
             return $users; 
        } 
		$this->set('users', $this->paginate('User')); 

	}
	
	function admin_add() {
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->flash('Novo utilizador adicionado!.', '/admin/users');
			}
		}
	}
	
	function admin_delete($id) {
		$this->User->del($id);
		$this->flash('O utilizador com id: '.$id.' foi eliminado.', '/admin/users');
	}
	
	function admin_edit($id = null) {
		$this->User->id = $id;
		if (empty($this->data)) {
			$this->data = $this->User->read();
		} else {
			if ($this->User->save($this->data)) {
				$this->flash('Utilizador editado.','/admin/users');
			}
		}
	}
	
	function register(){
		if ($this->data) {
	        if ($this->data['User']['password'] == $this->Auth->password($this->data['User']['confirm_password'])) {
	            $this->User->create();
	            $this->User->save($this->data);
	
				// Insert user into the AROS
					$aro = new Aro();

					//Here are our user records, ready to be linked up to new ARO records
					//This data could come from a model and modified, but we're using static
					//arrays here for demonstration purposes.

					$users = array(
						0 => array(
							'parent_id' => 3,
							'model' => 'User',
							'foreign_key' => $this->User->id,
					));

					//Iterate and create AROs (as children)
					foreach($users as $data)
					{
						//Remember to call create() when saving in loops...
						$aro->create();

						//Save data
						$aro->save($data);
					}

					//Other action logic goes here...
	        }
	    }
	}

	function login() {
	    //Auth Magic
	}

	function logout() {
		$this->Session->setFlash('Saiu da sua conta.');
		$this->redirect($this->Auth->logout());
	}

	function view() {
        $posts = $this->User->find(); 
        if(isset($this->params['requested'])) { 
             return $users; 
        } 
		$this->set('user', $this->User->find()); 

	}
	
	function avatar(){
		if (empty($this->data))
			  {
			   
			  }
			  else
			  {
			    if (!empty($this->data['User']['Avatar']['name'])) {
			      $fileName = $this->Auth->user('id');
				move_uploaded_file($this->data['User']['Avatar']['tmp_name'], '/home/admin/domains/planetuga.com/public_html/app/webroot/img/avatars/'.$fileName.'.png');
				  $this->Session->setFlash('O seu avatar foi actualizado.');
				}  

			  }
	}
	
	
	function changepassword() 
	{ 
	        if (!empty($this->data)) { 
				
				$userid 	=  $this->Auth->user('id');
				$username 	=  $this->Auth->user('username');
				
				$newdata['User']['username'] = $username;
				$newdata['User']['password'] = $this->data['User']['password'];
				$newhashes = $this->Auth->hashPasswords($newdata);
	
	                if($this->data['User']['password'] != $this->data['User']['repeat_password']){ 
	                        $this->User->invalidate('password', 'Your passwords do not match'); 
	                        $this->User->invalidate('repeat_password', 'Your passwords do not match');
					} else { 
	                        $this->data['User']['id'] = $userid;
						    $this->data['User']['username'] = $username;
							$this->data['User']['password'] = $newhashes['User']['password'];
					}                               
	                if ($this->User->save($this->data)){ 
	                        $this->flash('Password updated, please login again.','/users/logout'); 
	                } else { 
	                        $this->render(); 
	                }                                                       
	        }
	}	
	
	/* Password recovery */
	
	function reset() {
			if(!empty($this->data['User']['email'])) {

				$email = $this->data['User']['email'];
				if(empty($email)) {
					$this->Session->setFlash('Por favor introduza um email.');
					$this->set('error',array('email_missing' => true));
					$this->render(); exit;
				}

				$this->User->recursive = -1;
				if ($this->User->findCount(array('User.email' => $email), -1)) {
					$this->User->saveTempPassword($email);
					$user = $this->User->find(array('User.email' => $email));
					$this->Email->to = $user['User']['email'];
					$this->Email->from = Configure::read('Site.email');
					$this->Email->subject = Configure::read('Site.name') . ': pedido de nova password' ;
					$this->Email->template = null;

					$content[] = 'Foi recebido um pedido para uma nova password.';
					$content[] = 'Visite o seguinte URL e terá a sua password enviada para este endereço.';
					$content[] = Router::url('/users/verify/reset/'.$user['User']['email_token'], true);

					if($this->Email->send($content)) {
						$this->Session->setFlash('Recebeu um email com instruções para alterar a sua password.');
						$this->set($user);
						$this->redirect('/', null, true);
					}
				} else {
					$this->User->invalidate('email', 'O Email introduzido não foi encontrado.');
				}
			}
		}

		function verify($type = 'email') {
			if(isset($this->passedArgs['1'])){
				$token = $this->passedArgs['1'];
			} else {
				$this->Session->setFlash('Invalid verification token.');
				$this->render(); exit;
			}
			if($type === 'email') {
				$data = $this->User->validateToken($token);
			} elseif($type === 'reset') {
				$data = $this->User->validateToken($token, true);
			} else {
				$this->Session->setFlash('There url you accessed is no longer valid');
				$this->redirect(array('action' => 'login'));
			}

			$password = $data['User']['password'];
			$data = $this->Auth->hashPasswords($data);

			if($data !== false){
				$email = $data['User']['email'];
				unset($data['User']['email']);
				if($this->User->save($data, false)) {
					if($type === 'reset'){
				        $this->Email->to = $email;
						$this->Email->from = Configure::read('Site.email');
						$this->Email->subject = Configure::read('Site.name') . ' password reset' ;
						$this->Email->template = null;
						$content[] = 'A sua password foi alterada';
						$content[] = 'Por favor faça login com os seguintes dados';
						$content[] = 'Username: ' . $data['User']['username'];
						$content[] = 'Password: ' . $password;
						$this->Email->send($content);
						$this->Session->setFlash('A sua password foi enviada para o seu email.');
					} else {
						$this->Session->setFlash('O seu email foi validado, pode fazer login.');
						$this->redirect(array('action' => 'login'));
					}
				} else {
					$this->Session->setFlash('There was an error trying to validate, check your email and the url entered');
				}
			} else {
				$this->Session->setFlash('There url you accessed is no longer valid');
				$this->redirect(array('action' => 'login'));
			}
		}
}

?>