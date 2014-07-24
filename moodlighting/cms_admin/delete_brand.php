<?php
	include("connect1.php");
	/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}
	else{ */
	$a = $_GET['dele'];
	if(isset($a)){
		$sql2="select * from product where brandID='$a';";
 			$result2=mysqli_query($connect, $sql2);
			$count2=mysqli_num_rows($result2);
			if($count2<=0){

				$sql1="Select * from brand where brandID='$a';";
				$res=mysqli_query($connect, $sql1);
				while($row1 = mysqli_fetch_array($res))
					{
		 				$imgs=$row1['brandImagePath'];
		 				$arr=array();
		 				$arr= (explode ("/",$imgs));
		 				chdir("../images/brand");
		 				unlink($arr[2]);
		 			}
				$sql2="delete from brand where brandID='$a';";
			   	$res2=mysqli_query($connect, $sql2) or die ("error in mysql :".mysqli_error());
				$row2=mysqli_fetch_array($res2);
				echo "file deleted";
				header('location:edit_delete_brand.php');
			}
			else
			{
				echo "Sorry this brand has products. Please delete them first to delete this brand  <a href='javascript:history.back()'> Click here to Go back </a>";
			}
	}
?>