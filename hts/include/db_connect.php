<?php

	session_start();

	$server = "localhost";
	$user = "root";
	$pass = "";
	$db = "hts_db";

	$con = mysql_pconnect($server, $user, $pass);
	mysql_select_db($db, $con);

?>