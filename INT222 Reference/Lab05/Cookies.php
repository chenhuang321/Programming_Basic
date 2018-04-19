<?php 
ob_start();
include "include.php"?>
<!DOCTYPE html>
<?php
	$cookie_name = trim($_POST['CookieName']);
    $cookie_value = trim($_POST['CookieValue']);
	if($_POST && isValid($cookie_name, $cookie_value) == true) {
	    setcookie("VisitTime", $visit_time,   time() + 120, "/", "", 0);
        setcookie($cookie_name, $cookie_value, time() + 120, "/", "", 0); // Name, value and domain address
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
        <?php if(!$_POST || isValid($cookie_name, $cookie_value) == false) { ?>
        <form method="POST" action="">
            <table class="login">
                <tr>
                <td>Cookie Name:</td>
                <td><input name="CookieName"  type="text"
                value="<?php if(isset($_POST['CookieName']))  echo $_POST['CookieName'];?>"></td>
                </tr><tr>
                <td>Cookie Value:</td>
                <td><input name="CookieValue" type="text" 
                value="<?php if(isset($_POST['CookieValue'])) echo $_POST['CookieValue'];?>"></td>
                </tr><tr>
                <td><input name="Submit" type="submit" value=" Send "></td>
                <td><input name="Reset"  type="reset"  value=" Clear "></td>
                </tr>
        </table>
        </form>
        <?php 
		}
        else {
		?>  <h2>Welcome back ...</h2>
            <p>You visited this page <?php dspVisitTime(); ?> times!<a href="">Add a new cookie!</a></p>
			<h4>My Cookie List</h4>
			<ol><?php
            foreach ($_COOKIE as $key=>$subValue) {
				if($key == 'PHPSESSID');
				else echo "<li>" .$key." is ".$subValue."</li>\n";
            }
		}
        ?></ol>
    </body>
</html>