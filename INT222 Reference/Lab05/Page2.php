<?php ob_start();
session_start();?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title>Sessions Display</title>
	</head>
	<body>
		<p>Username: <?php print $_SESSION['username']; ?></p>
		<p><a href="Login.php">Back to Login Page!</a></p>
	</body>
</html>