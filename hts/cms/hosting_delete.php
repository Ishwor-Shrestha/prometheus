<?php
	include("connect.php");
	
		if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
	$imgID=$_GET['dele'];

		if(isset($imgID)){
			
			$sql= "delete from hosting where hostingID='$imgID';";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully deleted";
			
		header('location:hosting_edit.php');
		
		}
		}
		?>