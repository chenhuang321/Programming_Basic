<!DOCTYPE html>
<?php
    $cookie_name = $_POST['CookieName'];
    $cookie_value = $_POST['CookieValue'];
	//$address = "http//zenit.senecac.on.ca:14260/cgi-bin/lab5/"；
    setcookie($cookie_name, $cookie_value, "/"); // Name, value and domain address
	
	function isValid($value1, $value2) {
		$valid = true;
		if($value1 != "" && $value2 != "") {
			$valid = false; 
		}
		return $valid;
	}
	
	function dspVisitTime() {
        $count = 0;
        if(file_exists("count.txt"))
            $count=file_get_contents("count.txt"); 
        $count++;
        echo $count;
        file_put_contents("count.txt", $count);
		setcookie("Visit Time", $count, $address);
	}
?>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Set Cookies</title>
        <style>
        body {
            font-size: 12pt;
            line-height: 1.5;
        }
		
        table {
            border: 2px solid #7A0000;
            background-color: #CCCCB2;
        }
        </style>
    </head>
    <body>
        <h3>Set Cookies</h3>
        <?php if(!$_POST || !$isValid($cookie_name, $cookie_value)) { ?>
        <form method="POST" action="">
            <table class="login">
                <tr>
                <td>Cookie Name:</td>
                <td><input name="CookieName" type="text"
                value="<?php if(isset($_POST['CookieName'])) echo $_POST['CookieName'];?>"></td>
                </tr><tr>
                <td>Cookie Value:</td>
                <td><input name="CookieValue" type="text" 
                value="<?php if(isset($_POST['CookieValue'])) echo $_POST['CookieValue'];?>"></td>
                </tr><tr>
                <td><input name="Submit" type="submit" value="Login"></td>
                <td><input name="Reset" type="reset" value="Clear"></td>
                </tr>
        </table>
        </form>
        <?php }
        else {?>
            <h2>Welcome back ...</h2>
            <p>You visited this page <?php dspVisitTime(); ?> times!<a href="">Add a new cookie!</a></p><?php
            foreach ($_COOKIE as $key=>$subValue) {
                echo "<p>" .$key." is ".$subValue."</p>\n";
            }
		}
        ?>
    </body>
</html>