<?


// Configure the mysql database access for the Chyrp Database

$database	= "cake";		// MySQL Database name
$host		= "localhost";	// Mysql hostname
$username	= "root";		// MySQL Database user
$password	= "root";			// MySQL Database password

$wp_conn = mysql_connect($host, $username, $password)
or die (mysql_error());

$db = mysql_select_db($database)
or die (mysql_error());



$postsql = mysql_query("SELECT * FROM posts WHERE permalink LIKE '%gesbanha%' AND category = 'tiago'") or die(mysql_error());
	while($row = mysql_fetch_array($postsql)) {
		
		$id = $row['id'];
		
		mysql_query("UPDATE posts SET category = '' WHERE id = '$id'");

	}

?>

