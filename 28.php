<!DOCTYPE html>
<html>
	<head>
		<title>Мой сайт</title>
		<meta charset="UTF-8">
	</head>
	<body>
	<form action="28.php" method="get">
		<input type="text" name="userName" placeholder ="Enter your name:"/><br>
		<input type="email" name="userEmail" placeholder ="Enter your email:"/><br>
		<input type="text" name="userPhone" placeholder ="Enter your phone"/><br>
		<input type = "submit"/>
	</form>
<?php
	print_r($_GET)
?>
	</body>
</html>
