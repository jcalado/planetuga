<? 

// Configure the mysql database access for the Chyrp Database

$database	= "cake";		// MySQL Database name
$host		= "localhost";	// Mysql hostname
$username	= "root";		// MySQL Database user
$password	= "root";		// MySQL Database password

$wp_conn = mysql_connect($host, $username, $password)
or die (mysql_error());

$db = mysql_select_db($database)
or die (mysql_error());



function title_slug( $title )
{
$slug = $title;

$bad = array( 'Š','Ž','š','ž','Ÿ','À','Á','Â','Ã','Ä','Å','Ç','È','É','Ê','Ë','Ì','Í','Î','Ï','Ñ',
'Ò','Ó','Ô','Õ','Ö','Ø','Ù','Ú','Û','Ü','Ý','à','á','â','ã','ä','å','ç','è','é','ê',
'ë','ì','í','î','ï','ñ','ò','ó','ô','õ','ö','ø','ù','ú','û','ü','ý','ÿ',
'Þ','þ','Ð','ð','ß','Œ','œ','Æ','æ','µ',
'"',"'",'“','_');

$good = array( 'S','Z','s','z','Y','A','A','A','A','A','A','C','E','E','E','E','I','I','I','I','N',
'O','O','O','O','O','O','U','U','U','U','Y','a','a','a','a','a','a','c','e','e','e',
'e','i','i','i','i','n','o','o','o','o','o','o','u','u','u','u','y','y',
'TH','th','DH','dh','ss','OE','oe','AE','ae','u',
'','','','-');

// replace strange characters with alphanumeric equivalents
$slug = str_replace( $bad, $good, $slug );

// remove any duplicate whitespace, and ensure all characters are alphanumeric
$slug = preg_replace( '/[?]/', '', $slug ); // remove all non-alphanumeric characters except for spaces and hyphens

$slug = str_replace( ' ', '-', $slug ); // substitute the spaces with hyphens

// and lowercase
$slug = strtolower($slug);

return $slug;
}

function slug($string){
	$slug = strtolower( $string ); // lower-case the string
	$slug = preg_replace( '/[^a-z0-9- ]/', '', $slug ); // remove all non-alphanumeric characters except for spaces and hyphens
	$slug = str_replace( ' ', '-', $slug ); // substitute the spaces with hyphens
	$i = ''; // start with no appended value
	while ( slugExists( $slug . $i ) ) { // if the slug already exists..
	    $i++; // increment the appended value
	    # it is bad practice to increment a string
	    # but in this case, it simplifies the code
	}
	$slug .= $i; // append the value to the real slug
	return $slug;
}

function slugExists( $slug ) {
    # this is just an example function;
    # the real function depends on the layout of your script
    $query = sprintf( 'SELECT * FROM posts WHERE slug = \'$slug\'', // write the MySQL query
        mysql_real_escape_string( $slug ) // escape the string correctly (make sure that magic_quotes_gpc is turned off)
    );
    $result = mysql_query( $query ); // assuming that we are connected to MySQL
    if ( mysql_num_rows( $result ) ) { // if a post with this slug was found..
        return TRUE; // ..this slug exists
    } else { // if not..
        return FALSE; // ..this slug does not exist
    }
}



$postsql = mysql_query("SELECT * FROM posts ORDER BY slug ASC");
	while($row = mysql_fetch_array($postsql)) {
	
		$slug	= $row["slug"];

		
		if ($slug == "") {
			
			$id		= $row["id"];
			$title	= $row["title"];
			
			$slug = slug("$title");
			echo "UPDATE posts SET slug ='$slug' WHERE id = '$id'";
			mysql_query("UPDATE posts SET slug = '$slug' WHERE id = '$id'");
			echo "Slugged!!!!<br/>\n";
		} else
		{
			echo "OK<br/>\n";
		}

}

?>