<?php
class Servicepage
{
	function insertService(){
	
		$name=$_POST['nm'];		
		$desc=$_POST['desc'];

		include("connect1.php");
		$sql= "insert into service (serviceName,serviceDesc) values ('$name','$desc');";
		mysqli_query($connect, $sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error());
		echo "data sucessfully added";
		header('location:add_service.php');
	}

	function editService(){

		$id=$_POST['id'];
		$nm=$_POST['nm'];
		$desc=$_POST['desc'];
		include("connect1.php");

		if(isset($nm) && $nm !=Null){
			$sqlup=mysqli_query($connect, "Update service Set serviceName='$nm' where serviceID='$id'");	
		}
		if(isset($desc)&& $desc !=Null){
			$sqlup=mysqli_query($connect, "Update service Set serviceDesc='$desc' where serviceID='$id'");	
		}
		header('location:edit_delete_service.php');
}
}
$Servicepage = new Servicepage();
?>