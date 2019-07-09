<form action='' enctype='multipart/form-data' method='POST'>
	<input type="text" name="pasta">
	<input name='arquivo' size='200' type='file'>
	<input type='submit' value='Enviar'>
</form> 
<?php
	require_once 'upload.php';
	up(gerenciaPasta());
?>
