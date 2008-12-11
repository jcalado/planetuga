<?

for ($i=2; $i <= 80; $i++) {
	$o = $i - 1; 
	echo "$o => array(<br/>";
	echo "'parent_id' => 1,<br/>";
	echo "'model' => 'User',<br/>";
	echo "'foreign_key' => $i<br/>";
	echo "),<br/>";	
}





?>