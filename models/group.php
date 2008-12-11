<?

class Group extends AppModel {
	var $actsAs = array('Acl' => array('requester'));
	var $hasMany = 'User';

	function parentNode() {
	    return null;
	}
}

?>