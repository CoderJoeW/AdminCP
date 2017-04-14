<?
	session_start();
    
    $host = "<YOUR_DATABASE_URL>";
    $user = "<YOUR_USERNAME>";
    $pass = "<YOUR_PASSWORD>";
    $db = "<YOUR_DATABASE_NAME>";
    
    mysql_connect($host,$user,$pass) or die(mysql_error());
    mysql_select_db($db) or die(mysql_error());
?>
