<?php 
    App::import('Core', array('HttpSocket')); 

    class TinyurlComponent extends Object { 

        function __construct() { 
            $this->Http =& new HttpSocket(); 
        } 

         /** 
         * Returns shortened link by tinyurl. 
         * @param string url The URL to shorten
         */ 
        function shorten($url) { 
			
			$url = "http://tinyurl.com/api-create.php?url=" . "$url";

            return $this->Http->get($url); 
        } 

   
   } 
?>