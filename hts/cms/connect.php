
<?php
/* session_start(); *
	/*This PHP file is meant to be included at the top of every PHP page of this system because it does two things:
	
	1. start the session i.e. session_start(). Session must be started at the TOP of every page.
	2. establish the database connection.
	*/
	session_start();	
	
	$server = "localhost";
	$user = "root";
	$password = "";
	$db = "hts_db";
	
	$connect = mysql_pconnect($server,$user,$password);
	mysql_select_db($db,$connect);
	
?>