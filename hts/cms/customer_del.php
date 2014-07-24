	<?php
	include("connect.php");
		if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
	$imgID=$_GET['dele'];

		if(isset($imgID)){
			$sql1="Select * from customer where customerID='$imgID';";
			$res=mysql_query($sql1);
			while($row1 = mysql_fetch_array($res))
			{
 				 echo $row1['customerImagePath'];
 				 $imgs=$row1['customerImagePath'];
 				 
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 echo $arr[2];
 				 chdir("../../hts//images/customer");
 				unlink($arr[2]);
 			}
		
			$sql= "delete from customer where customerID='$imgID';";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully deleted";
			
		header('location:customer_edit_delete.php');
		
		}
		}
		?>