<?
	session_start();
    
    $host = "localhost";
    $user = "kot90";
    $pass = "Glitchking12345";
    $db = "my_kot90";
    
    mysql_connect($host,$user,$pass) or die(mysql_error());
    mysql_select_db($db) or die(mysql_error());
?>
