<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST">
		<input type="text" name="pasta">
		<input type="submit" name="a">
	</form>
	<?php
		if (isset($_POST['a'])) {
			$pasta = $_POST['pasta'];
			if (is_dir($pasta))
			{
				echo "Abrindo Pasta";
			}else
			{
				mkdir($pasta);
			}
		}
	?>
</body>
</html>