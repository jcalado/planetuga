<?php
class Vote extends AppModel {

	var $name = 'Vote';
	var $validate = array(
		'name' => array('notEmpty'),
		'url' => array('url'),
		'feed' => array('url'),
		'description' => array('notEmpty'),
		'author' => array('notEmpty'),
		'email' => array('email')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);
	
	function voteup($id,$userid) {

		$this->data = $this->read('status, voters', $id);
 		$this->data['Vote']['status']++;
		$voters = explode(",", $this->data['Vote']['voters']);
		
		if (in_array("U$userid", $voters)) {
		    return false;
		}

 		$this->data['Vote']['voters'] .= "U$userid,";
		$this->save();
	}
	
	function votedown($id,$userid) {
 		$this->data = $this->read('status, voters', $id);
		$this->data['Vote']['status']--;
		$voters = explode(",", $this->data['Vote']['voters']);
		
		if (in_array("U$userid", $voters)) {
		    return false;
		}
		
		$this->data['Vote']['voters'] .= "U$userid,";
		$this->save();
	}

}
?>