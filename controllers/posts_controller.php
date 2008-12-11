<?php
class PostsController extends AppController {

	var $name = 'Posts';
	var $paginate = array('limit' => 10, 'page' => 1, 'order' => 'Post.created_at DESC'); 
	var $belongsTo = 'Feed';
	var $helpers = array('Text','Time','Bookmark');
	var $components = array('Twitter','Tinyurl');

	function beforeFilter() {
	    parent::beforeFilter(); 
	    $this->Auth->allowedActions = array('index', 'view','update','top','latest','recent','featured','category','feed','test');
	}

	function index() {
        $posts = $this->Post->find('all'); 
        if(isset($this->params['requested'])) { 
             return $posts; 
        } 
		$this->set('posts', $this->paginate('Post')); 

	}
	
	
	function recent() {

        $posts = $this->Post->find('all',array( 
		    'order' => 'Post.created_at DESC',
		 	'limit' => '5'
		)); 
        if(isset($this->params['requested'])) { 
             return $posts; 
        } 

	}
	
	
	function top() {
		
		$today = date("Y-m-d H:i:s");

		$pastweek = strtotime("-1 week");
		$pastweek = date("Y-m-d H:i:s",$pastweek);
		
        $posts = $this->Post->find('all',array(
	 		'conditions' => "Post.created_at BETWEEN '$pastweek' AND '$today'",
		    'order' => 'hits DESC',
		 	'limit' => '5'
		)); 
        if(isset($this->params['requested'])) { 
             return $posts; 
        } 
        $this->set('posts', $this->Post->find('all',array(
			'conditions' => "Post.created_at BETWEEN $pastweek AND $today",
		    'order' => 'hits DESC',
		 	'limit' => '5'
		)));

	}
	
	function category() {

		$category = $this->params['pass']['0'];
        $this->set('posts', $this->paginate('Post',"category LIKE '%$category%'"));

	}
	
	
	function featured() {
		
		$today = date("Y-m-d H:i:s");
		$pastweek = strtotime("-1 week");
		$pastweek = date("Y-m-d H:i:s",$pastweek);

        $posts = $this->Post->find('all',array(
			'conditions' => "Post.featured = 1 AND Post.created_at BETWEEN '$pastweek' AND '$today'",
		    'order' => 'Post.created_at DESC',
			'limit' => '5'
		));
        if(isset($this->params['requested'])) { 
             return $posts; 
        } 
	}
	
	function view($slug = null) {
		$this->set('posts', $this->Post->find("Post.slug = '$slug'"));
		$posts = $this->Post->find("Post.slug = '$slug'");
		$id = $posts["Post"]["id"];
		$this->Post->increaseHits($id);
	}
	
	function search() { 
		
	        $this->Line->recursive = 1; 
	        $conditions = array(); 

	        if (isset($this->passedArgs)) { 

	            $input = $this->passedArgs[0]; 

	            App::import('Sanitize'); 
	            $q = Sanitize::escape($input); 

	            $conditions = array("Post.title LIKE '%$q%' OR Post.content LIKE '%$q%'"); 
	        } 

	        $this->set('posts', $this->paginate('Post', $conditions)); 

	}
	
	function delete($id) {
		if ($this->Auth->user('id') == $this->Post->id) {
			$this->Post->del($id);
			$this->flash('O post foi apagado.', '/posts');
		} else {
			$this->flash('Não pode apagar posts que não são seus.', '/posts');
		}
	}
	
	function promote($id) {
		if ($this->Auth->user('group_id') == "1") {
			$this->Post->promote($id);
			$this->flash('O artigo foi promovido.', '/posts');
		} else {
			$this->flash('Não pode promover posts.', '/posts');
		}
	}


	function feed() 
    { 
        $this->layout = 'xml';
        $this->set('posts', $this->Post->find('all',array( 
		    'order' => 'Post.created_at DESC',
		 	'limit' => '50'
		)));
    }

	
	function archive(){
		
		$this->layout = 'archive';
		
		if (isset($this->passedArgs[0])) {
			$year = $this->passedArgs[0];
		}
		
		if (isset($this->passedArgs[1])) {
			$month = $this->passedArgs[1];
		}
		
		if (isset($this->passedArgs[2])) {
			$day = $this->passedArgs[2];
		}
		
		
		if (isset($year) && !isset($month) && !isset($day)) {
			$conditions = array("Post.created_at LIKE '$year%'"); 
		}
		
		if (isset($year) && isset($month) && !isset($day)) {
			$conditions = array("Post.created_at LIKE '$year-$month%'"); 
		}
		
		if (isset($year) && isset($month) && isset($day)) {
			$conditions = array("Post.created_at LIKE '$year-$month-$day%'"); 
		}
		
		if (!isset($year) && !isset($month) && !isset($day)) {
			$conditions = array("Post.created_at LIKE '%%'");
		}
				
		$this->set('posts', $this->paginate('Post', $conditions)); 
		
	}
		
		
	
	function update(){
		
		require_once('inc/simplepie.inc');

		//require "Arc90/Service/Twitter.php";
		//$twitter = new Arc90_Service_Twitter('planetuga', 'ik3tnYa');

		$numero = 0;

		// List all feeds
		$sql = mysql_query("SELECT * FROM feeds ORDER BY id;");
			$numberfeeds = mysql_num_rows($sql);
			while($l = mysql_fetch_array($sql)) {

				$feed_id 	= $l["id"];
				$feed_name	= $l["name"];
				$user_id 	= $l["user_id"];


				$feed = new SimplePie();
				$feed->set_feed_url("$l[feed]");
				$feed->set_cache_duration(200);
				$feed->init();


				foreach ($feed->get_items() as $item) {

					$rsstitle		= $feed->get_title();
					$title 			= $item->get_title();
					$permalink		= $item->get_permalink();
					$created_at		= $item->get_date('Y-m-d H:i:s');

					if ($category = $item->get_category())
						{
							$category = "";
							foreach ($item->get_categories() as $cat)
							{
								$category .=  $cat->get_label();
								$category .= ",";

							}
						}

					$category = addslashes($category);
					$content	= $item->get_content();
					$content	= addslashes($content);

				// Slashes

				$title      = addslashes($title);
				$slug		= $this->Post->createSlug($title);


				// Check if it already exists using the permalink
				$check = mysql_query("SELECT * FROM posts WHERE permalink = '$permalink'") or die(mysql_error());
				if (mysql_num_rows($check) == "0") {

					// Insert post into the database
					$insert = "INSERT INTO posts (feed_id,user_id,title,slug,permalink,created_at,category,content) VALUES (\"$feed_id\",\"$user_id\",\"$title\",\"$slug\",'$permalink','$created_at','$category','$content')";
					mysql_query($insert) or die(mysql_error());
					
					$id = mysql_insert_id();

					// Shorten the URL using tinyURL :)
					//$shortlink = $this->Tinyurl->shorten("http://cake.planetuga.com/posts/view/$id");

					// echo
					echo "$permalink<br/>\n";
					
					// Tweet it
					//$this->Twitter->status_update("$title - $shortlink");

				} 
			}
		$numero++;
		echo "Actualizados $numero: $feed_name<br/>\n\n";
		echo "-----------------------";

		}
		echo "Actualizei $numero de um total de $numberfeeds feeds.";
		
	}
	
	
	/**
	 * Admin methods
	 * 
	 **/

	function admin_index() {

		// Find all the freaking posts :)
		$this->set('posts', $this->paginate('Post')); 

	}
	
	function admin_view($id = null) {
		
		$this->Post->id = $id;
		$this->set('posts', $this->Post->read());
	}
	
	function admin_add() {
		
			if (!empty($this->data)) {
				if ($this->Post->save($this->data)) {
					$this->flash('Your feed has been saved.', '/admin/posts');
				}
			}
	}
		
	
	function admin_delete($id) {
		
		$this->Post->del($id);
		$this->flash('The feed with id: '.$id.' has been deleted.', '/admin/posts');
	}
	
	
	function admin_edit($id = null) {
		
		$this->Post->id = $id;
		if (empty($this->data)) {
			$this->data = $this->Post->read();
		} else {
			if ($this->Post->save($this->data)) {
				$this->flash('Your feed has been updated.','/admin/posts');
			}
		}
	}
	
	function admin_featured() {
		
		$today = date("Y-m-d H:i:s");
		$pastweek = strtotime("-1 week");
		$pastweek = date("Y-m-d H:i:s",$pastweek);

        $posts = $this->paginate('Post',"Post.featured = 1 AND Post.created_at BETWEEN '$pastweek' AND '$today'");
        if(isset($this->params['requested'])) { 
             return $posts; 
        } 
        $this->set('posts', $this->paginate('Post',"Post.featured = 1 AND Post.created_at BETWEEN '$pastweek' AND '$today'"));

	}
	
	function demote($id) {
		if ($this->Auth->user('group_id') == "1") {
			$this->Post->demote($id);
			$this->flash('O artigo foi despromovido.', '/admin/posts/featured');
		} else {
			$this->flash('Não pode despromover posts.', '/admin/posts/featured');
		}
	}
	
}
?>