<?php


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<img src="img/pemandangan.jpg">
<form method = "post">
	<label>
		Username :
		<input type="text" name="username">
	</label>
	<br>
	<label>
		password :
		<input type="password" name="password">
	</label>
	<input type="submit">
	<br>
	<?php 
	echo"Nama : ".$_POST["username"];
	?>
</form>
</body>
</html>