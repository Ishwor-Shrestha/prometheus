<?php
	include("connect1.php");
	/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}
	else{ */
	$a = $_GET['dele'];
	$sql2="delete from service where serviceID='$a';";
   	$res2=mysqli_query($connect, $sql2) or die ("error in mysql :".mysqli_error());
	$row2=mysqli_fetch_array($res2);
	echo "file deleted";
	header('location:edit_delete_service.php');
?>