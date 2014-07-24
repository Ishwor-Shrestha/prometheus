	<?php
	include("connect.php");
/*		session_start();
if(!session_is_registered(Login_Name)){
//if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{ */
/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{ */
	$imgID=$_GET['dele'];

		if(isset($imgID)){
			$sql3="Select * from subcategory where categoryID=$imgID;";
			$result3=mysqli_query($connect, $sql3);
			$count3=mysqli_num_rows($result3);
			if($count3<=0){


				$sql1="Select * from category where categoryID='$imgID';";
				$res=mysqli_query($connect,$sql1);
				while($row1 = mysqli_fetch_array($res))
				{
	 				$imgs=$row1['categoryImagePath'];
	 				$arr=array();
	 				$arr= (explode ("/",$imgs));
	 				chdir("../images/category");
	 				unlink($arr[2]);
	 			}
			

				$sql= "delete from category where categoryID='$imgID';";
			
			mysqli_query($connect,$sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
			echo "data sucessfully deleted";
			header('location:edit_delete_category.php');
		}
		else{
			echo "Sorry this category has subcategories. Please delete them first to delete this category  <a href='javascript:history.back()'> Click here to Go back </a>";
		}	
		
		
		}
		//}
		?>