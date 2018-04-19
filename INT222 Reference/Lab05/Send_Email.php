<?php ob_start(); include "include.php"?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset = "UTF-8">
		<title>Password Service</title>
		<?php
		    $email = $_POST['E-mail'];
			$valid = false;
			// Start to check if database contains user's input
			if($_POST) {
			    $password = find_password($_POST['E-mail']);
			    if($password == "") {
					$home_url = 'Login.php';
                    header('Location:'.$home_url);
				} else {
			    	$valid = true;
			    # print $password; // Test if password can be read by this site
			    // Send an email to the email address
				$arr = split('\.|@',$email);
				$message = "Hello, " . $arr[0] . "! your password hint is: " . $password;
				$subject = "New Message: " . $arr[0] . "'s password!";
				$header = "From: doNotReply@example.com" . "\r\n";
                mail($email, $subject, $message, $header);				
			    }
			}
		?>
	</head>
	<body>
	<form method = "Post" action = "<?php echo $_SERVER['PHP_SELF'];?>">
		<h2>Chen's Password Service</h2>
		<input name = "E-mail" type = "email" 
		value="<?php if(isset($_POST['E-mail'])) echo $_POST['E-mail'];?>">
		<input name = "Submit" type = "submit" value = "Send Me Email">
	</form>
	<p><a href="Login.php">Back to Login Page!</a></p>
	<p><?php if($_POST && $password != ""){
		echo "Your E-mail has successfully been sent to ". $email ."!";
	}?></p>
	</body>
</html>