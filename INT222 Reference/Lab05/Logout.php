<?php
session_start();
// Check my login environment
if(isset($_SESSION['username'])){
	// Set session to null
    $_SESSION = array();
    // If the cookie value exist, delete it
    if(isset($_COOKIE[session_name()])){
        setcookie(session_name(),'',time()-3600);
    }
    session_destroy();
}
// Relocate to login page
$home_url = 'Login.php';
header('Location:'.$home_url);
?>