<?php
include("connect.php");
	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
$a = $_GET['dele'];

$sql2="delete from cmodule where SN='$a';";
   $res2=mysql_query($sql2) or die ("error in mysql :".mysql_error());
	$row2=mysql_fetch_array($res2);
	
	echo "file deleted";
	header('location:costum_model-edit-delete.php');
	
	

}
?>