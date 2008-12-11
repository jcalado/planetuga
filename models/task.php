<?php
class Task extends AppModel {

	var $name = 'Task';
	var $validate = array(
		'user_id' => array('numeric'),
		'assigned_to' => array('numeric'),
		'priority' => array('range'),
		'subject' => array('alphanumeric'),
		'task' => array('alphanumeric')
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $belongsTo = array(
			'User' => array('className' => 'User',
								'foreignKey' => 'user_id', 'assigned_to',
								'conditions' => '',
								'fields' => '',
								'order' => ''
			)
	);

}
?>