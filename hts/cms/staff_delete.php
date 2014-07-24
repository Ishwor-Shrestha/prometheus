	<?php
	include("connect.php");
		if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
	$imgID=$_GET['id'];

		if(isset($imgID)){
			echo $imgID;
		
			$sql= "delete from staffimage where imageID='$imgID';";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:staff_image_delete.php');
		}
		}
		?>