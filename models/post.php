<?php

class Post extends AppModel {
    var $name = 'Post';                
    var $belongsTo = array(
		'Feed' => array(
    		'className'    => 'Feed',
    		'foreignKey'    => 'feed_id'
	),        
		'User' => array(
            'className'    => 'User',
            'foreignKey'    => 'user_id'
        )

    ); 

	function increaseHits($id) {
	  $this->data = $this->read('hits', $id);
	  $this->data['Post']['hits']++;
	  $this->save();
	}
	
	function promote($id) {
	  $this->data = $this->read('featured', $id);
	  $this->data['Post']['featured'] = "1";
	  $this->save();
	}
	
	function demote($id) {
	  $this->data = $this->read('featured', $id);
	  $this->data['Post']['featured'] = "0";
	  $this->save();
	}
	
	function createSlug ($string, $id=null) {
		$slug = Inflector::slug ($string,'-');
		$slug = low ($slug);
		$i = 0;
		$params = array ();
		$params ['conditions']= array();
		$params ['conditions'][$this->name.'.slug']= $slug;
		if (!is_null($id)) {
			$params ['conditions']['not'] = array($this->name.'.id'=>$id);
		}
		while (count($this->find ('all',$params))) {
			if (!preg_match ('/-{1}[0-9]+$/', $slug )) {
				$slug .= '-' . ++$i;
			} else {
				$slug = preg_replace ('/[0-9]+$/', ++$i, $slug );
			}
			$params ['conditions'][$this->name . '.slug']= $slug;
		}
		return $slug;
	}
}
?>
