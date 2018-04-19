<?php ob_start();?>
<!DOCTYPE html>
<html lang="en">
<?php 
session_start(); ?>
	<head>
		<meta charset = "UTF-8">
		<title>Congratuations!</title>
	</head>
	<body>
		<p><?php print "You are logged in!"?></p>
		<p><a href="Login.php">Back to Login Page!</a></p>
		<p><a href="Page2.php">Sessions Display</a></p>
		<p><a href="Logout.php">Log out!</a></p>
	</body>
</html>