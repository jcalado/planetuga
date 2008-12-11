<?php
header('Content-type:text/html; charset=UTF-8');

require_once('inc/simplepie.inc');


$database	= "cake";	// MySQL Database name

$host		= "localhost";	// Mysql hostname
$username	= "root";		// MySQL Database user
$password	= "root";		// MySQL Database password

$ligacao = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", $username, $password)
or die ("Erro na ligação à  base de dados. Verifique o estado do servidor MySQL!");

$db = mysql_select_db($database)
or die (mysql_error());

//require "Arc90/Service/Twitter.php";
//$twitter = new Arc90_Service_Twitter('planetuga', 'ik3tnYa');

$numero = 0;

error_reporting(E_ALL);
date_default_timezone_set('Europe/Lisbon');

// List all feeds
$sql = mysql_query("SELECT * FROM feeds ORDER BY id ASC;");
	$numberfeeds = mysql_num_rows($sql);
	while($l = mysql_fetch_array($sql)) {
		
		$feed_id = $l["id"];
		$feed_name = $l["name"];
	

		$feed = new SimplePie();
		$feed->set_feed_url("$l[feed]");
		$feed->set_cache_duration(200);
		$feed->init();


		foreach ($feed->get_items() as $item) {

			$rsstitle		= $feed->get_title();
			$title 			= $item->get_title();
			$permalink		= $item->get_permalink();
			$created_at		= $item->get_date('Y-m-d H:i:s');

			if ($category= $item->get_category())
				{
					$label = $category->get_label();
				}


			$content	= $item->get_content();
			$content	= addslashes($content);

		// Slashes

		$title      = addslashes($title);
		$rsstitle	= addslashes($rsstitle);
		
		if (isset($label)) {
			$label		= addslashes($label);
		} else {
			$label = "";
		}



		// Check if it already exists using the permalink
		$check = mysql_query("SELECT * FROM posts WHERE permalink = '$permalink'") or die(mysql_error());
		if (mysql_num_rows($check) == "0") {

			// Insert post into the database
			$insert = "INSERT INTO posts (feed_id,user_id,title,permalink,created_at,label,content) VALUES (\"$feed_id\",\"$feed_id\",\"$title\",'$permalink','$created_at','$label','$content')";
			mysql_query($insert) or die(mysql_error());
			
			// Shorten the URL using tinyURL :)
		//	$shortlink = tinyurl("http://planetuga.com/redir/$slug");
			
			// echo
			echo "$permalink - $shortlink";
			
			// Tweet it
		//	$twitter->updateStatus("$title - $shortlink");

		
		} 
	}
$numero++;
echo "Actualizado: $feed_name<br/>\n\n";

}
echo "Actualizei $numero de um total de $numberfeeds feeds.";

?>