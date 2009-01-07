<?
	App::import('Core', 'l10n');
	App::import('Sanitize');
	
class AppController extends Controller {

	var $components = array('Acl', 'Auth');

	


	function beforeFilter() {
			App::import('Model', 'User');
	    //Configure AuthComponent
	    $this->Auth->authorize = 'actions';
	    $this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	    $this->Auth->logoutRedirect = array('controller' => 'pages', 'action' => 'home');
	    $this->Auth->loginRedirect = array('controller' => 'posts', 'action' => 'index');
		$this->Auth->authError = "Não pode aceder a esta secção do site.";
		User::store($this->Auth->user());
	}

}

?>