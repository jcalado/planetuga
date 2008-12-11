<?php
class SitemapsController extends AppController{

	var $name = 'Sitemaps';
	var $uses = array('Posts');
	var $helpers = array('Time');
	var $components = array('RequestHandler');


	function index (){	
		$this->set('posts', $this->Post->find('all'));
//debug logs will destroy xml format, make sure were not in debug mode
Configure::write ('debug', 0);
	}
}
?>