<form action='hash.php'>
	
	<input type='text' name='hash'>
	<input type='submit' value='Hash it!'>
	
</form>

<?
echo md5($_GET['hash']);

?>