<?php ob_start();
include "include.php"?>
<!DOCTYPE html>
<?php
    session_start();
    $usr_name = $_POST['Username'];
    $password = $_POST['Password'];
	
	$user = new User($usr_name, $password);
	if(!isset($_SESSION['username'])) {
		if(isset($_POST)) {
			$user->match_send();
			if($user->isFull == true) {
				$_SESSION['username'] = $user->usName;
				$_SESSION['password'] = $user->psWord;
			    header('Location: '.$user->location);
			}
		}
	}
	else header('Location: '.$user->location);
?>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Login Service</title>
		<style>
		body {
			font-size: 12pt;
			line-height: 1.5;
		}
		
		table {
			border: 2px solid #174C4C;
			background-color: #4DFFFF;
		}
		</style>
	</head>
	<body>
		<h3>Chen's Login Service</h3>
		<form method="POST" action="<?php echo $_SERVER['PHP_SELF'];?>">
			<table class="login">
				<tr>
				<td>Username:</td>
				<td><input name="Username" type="text" 
				value="<?php if(isset($_POST['Username'])) echo $_POST['Username'];?>"></td>
				</tr><tr>
				<td>Password:</td>
				<td><input name="Password" type="password" 
				value="<?php if(isset($_POST['Password'])) echo $_POST['Password'];?>"></td>
				</tr><tr>
				<td><input name="Submit" type="submit" value="Login"></td>
				<td><input name="Reset" type="reset" value="Clear"></td>
				</tr>
			</table>
		</form>
		<p></p>
		<p><a href="Send_Email.php">Forgot your password?</a></p>
		<?php
		if($_POST) {
			echo "<p>Your username or password is incorrect! <a href=''>Redo</a></p>";
		}?>
	</body>
</html>