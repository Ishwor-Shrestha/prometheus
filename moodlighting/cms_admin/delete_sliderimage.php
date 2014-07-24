<?php
	include("connect1.php");
	/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}
	else{ */
	$a = $_GET['id'];
	if(isset($a)){
		$sql1="Select * from sliderimage where sliderimageID='$a';";
		$res=mysqli_query($connect, $sql1);
		while($row1 = mysqli_fetch_array($res))
			{
 				$imgs=$row1['sliderimageImagePath'];
 				$arr=array();
 				$arr= (explode ("/",$imgs));
 				chdir("../images/bigslider");
 				unlink($arr[2]);
 			}
		$sql2="delete from sliderimage where sliderimageID='$a';";
	   	$res2=mysqli_query($connect, $sql2) or die ("error in mysql :".mysqli_error());
		$row2=mysqli_fetch_array($res2);
		echo "file deleted";
		header('location:edit_delete_slider1.php');
	}
?>