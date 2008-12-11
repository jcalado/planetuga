<?php
Header('Content-type: text/xml; charset=UTF-8');

$database	= "cake";	// MySQL Database name

$host		= "localhost";	// Mysql hostname
$username	= "root";		// MySQL Database user
$password	= "root";		// MySQL Database password

$ligacao = mysql_connect(":/Applications/MAMP/tmp/mysql/mysql.sock", $username, $password)
or die ("Erro na ligação à  base de dados. Verifique o estado do servidor MySQL!");

$db = mysql_select_db($database)
or die (mysql_error());

$s = $_GET['s'];
$cat = $_GET['cat'];

echo "<?xml version=\"1.0\" encoding=\"UTF-8\"?>\n";
echo "<rss version='2.0' xmlns:atom='http://www.w3.org/2005/Atom'>\n";
echo "<channel>\n";
echo "<atom:link href=\"http://www.planetuga.com/feed\" rel=\"self\" type=\"application/rss+xml\"/>\n";

if (isset($s)) { echo "<title>Planetuga - $s</title>\n"; }

if (isset($cat)) { echo "<title>Planetuga - $cat</title>\n"; }

if (!isset($s) && !isset($cat)) { echo "<title>Planetuga</title>"; }


echo "	<link>http://www.planetuga.com</link>\n";
echo "	<description>A Internet, em Português.</description>\n";
echo "	<language>pt-PT</language>\n";
echo "	<generator>Planetuga 1.0</generator>\n";

// Ler os dados das noticias em loop

if ($s == null && $cat == null) {	$sql = mysql_query("SELECT * FROM posts ORDER BY created_at DESC LIMIT 50;"); }

if (isset($s)) { $sql = mysql_query("SELECT * FROM posts WHERE title LIKE '%$s%' ORDER BY created_at DESC LIMIT 50;"); }

if (isset($cat)) { $sql = mysql_query("SELECT * FROM posts WHERE label = '$cat' ORDER BY created_at DESC LIMIT 50;"); }


	while($l = mysql_fetch_array($sql)) {

		$feed_id 	= $l["feed_id"];
		$permalink	= $l["permalink"];
		$title 	    = $l["title"];
		$created_at	= date('D, d M Y H:i:s O', strtotime($l["created_at"]));
		$content	= $l["content"];
		$id			= $l["id"];
		
		$sqla = mysql_query("SELECT user_id FROM feeds WHERE id = \"$feed_id\" LIMIT 1;");
			while($a = mysql_fetch_array($sqla)) {
				
				$user_id = $a["user_id"];
				 }
		
		$sqlu = mysql_query("SELECT name FROM users WHERE id = '$user_id' LIMIT 1;");
					while($u = mysql_fetch_array($sqlu)) {

						$name = $u["name"];
						 }

echo "	<item>\n";
echo "		<title>$name: $title</title>\n";
echo "		<guid>http://cake.planetuga.com/posts/view/$id</guid>\n";
echo " 		<pubDate>$created_at</pubDate>\n";
echo "		<description> <![CDATA[ $content ]]> </description>\n";
echo "		<author>$name</author>\n";
echo "	</item>\n";

}

echo "</channel>\n";
echo "</rss> ";

?>