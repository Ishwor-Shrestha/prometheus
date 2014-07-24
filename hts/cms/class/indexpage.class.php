<?php
class Indexpage
{
	function insertmodule(){
	
		$mTitle=$_POST['mtitle'];
		
		$mDesc=$_POST['mdesc'];
		
		//upload scipt start
		
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];
		
		//path to put into the database table
		$path = "images/$imagename";
		
		//actual server destination folder
		$dest = "../images/$imagename";
		$arr = explode(".",$imagename);
		
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or($ext==''))
		{	
				//copy the temporarily uploaded file to the server destination (actual upload)
				copy($tmpimage,$dest);
				
				//@rename($dest,"../studpics/$id.$ext");
		}
		else
		{
			echo "invalid photo! try again.";
			exit;
		}
		//upload script ends.
	
	
		//upload script ends.
		
		
			
		$sql= "insert into cmodule (ModuleTitle,Image,ModuleDecs) values ('$mTitle','$path','$mDesc');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:custom-module.php');
	
	
	}
	
	function editCustomModule()
	{
		$module_sn=$_POST['upsn'];
		$module_title=$_POST['upmtitle'];
		$module_desc=$_POST['upmdesc'];
		
		

		if ($module_title !=Null || $module_title !=""){ 
		$sqlup=mysql_query("Update cmodule Set ModuleTitle='$module_title' where SN='$module_sn'");
		}
		if ($module_desc !=Null || $module_desc !=""){ 
		$sqlup=mysql_query("Update cmodule  Set ModuleDecs='$module_desc' where SN='$module_sn'");
		}
		
		
	echo $module_sn;
	
		echo "data sucessfully added";
		
	
	}
	
	
	
	function insertSliderImage(){
		$iID=$_POST['iid'];	
		$iDesc=$_POST['desc'];
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/$imagename";
		
		//actual server destination folder
		$dest = "../images/$imagename";
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or($ext==''))
		{	
				//copy the temporarily uploaded file to the server destination (actual upload)
				copy($tmpimage,$dest);
				
				//@rename($dest,"../studpics/$id.$ext");
		}
		else
		{
			echo "invalid photo! try again.";
			exit;
		}
				//upload script ends.
		
		
			
		$sql= "insert into sliderimage (imageName, imageDescription, imagePath) values ('$iID','$iDesc','$path');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:slider_image_add.php');
	}
	
	function addCustomer(){
		$cName=$_POST['cname'];	
		$cLink=$_POST['clink'];
		

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/customer/$imagename";
		
		//actual server destination folder
		$dest = "../images/customer/$imagename";
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
		{	
				//copy the temporarily uploaded file to the server destination (actual upload)
				copy($tmpimage,$dest);
				
				//@rename($dest,"../studpics/$id.$ext");
		}
		else
		{
			echo "invalid photo! try again.";
			exit;
		}
				//upload script ends.
		
		
			
		$sql= "insert into customer (customerName, customerImagePath, customerLink) values ('$cName','$path', '$cLink');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:addcustomer.php');
	}
	
	function editCustomer(){
		$hid=$_POST['hid'];
		$cName=$_POST['cname'];
		$cLink=$_POST['clink'];
		

		if(isset($cName) && $cName !=Null){
			$sqlup=mysql_query("Update customer Set customerName='$cName' where customerID='$hid'");	
		}
		if(isset($cLink)&& $cLink !=Null){
			$sqlup=mysql_query("Update customer Set customerLink='$cLink' where customerID='$hid'");	
		}
		
		
		//the php script to upload the image
		
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/customer/$imagename";
		
		//actual server destination folder
		$dest = "../images/customer/$imagename";
		echo "Destination: ".$dest;
		
		if (isset($imagename) && $imagename!= Null)
		{
		
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png')  or ($ext=='PNG') or($ext==''))
		{	
				if(file_exists($dest)){
			echo "an image with that name already exists.. Please change your file";
		}
		else{
			if(isset($path) && $path !=Null){

			$sql1="Select * from customer where customerID='$hid';";
			$res=mysql_query($sql1);
			while($row1 = mysql_fetch_array($res))
			{
 				 //echo $row1['headingImagePath'];
 				 $imgs=$row1['customerImagePath'];
 				 //echo $imgs;
 				 //echo $row1['headingImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 echo $arr[2];
 				 $cdr=getcwd();
 				 chdir("../../hts//images/customer");
 				unlink($arr[2]);
 			}
 			chdir($cdr);
 			echo "Recent dir: ".getcwd();
 			copy($tmpimage,$dest);
			$sqlup=mysql_query("Update customer Set customerImagePath='$path' where customerID='$hid'");	

		}
			//copy the temporarily uploaded file to the server destination (actual upload)
		}
		}
		else
		{
			echo "invalid photo! try again.";
			exit;
		}	
		}		
		
		//echo "Data updated successfully";
		
	}
	

	
	
	
	}
$Indexpage = new Indexpage();
?>