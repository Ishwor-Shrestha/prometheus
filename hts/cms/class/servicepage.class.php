<?php
class Servicepage
{
	function addServiceHeading(){
		$iID=$_POST['iid'];	
		$iDesc=$_POST['desc'];
		$imgNm=$_POST['inm'];

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/service/$imagename";
		
		//actual server destination folder
		$dest = "../images/service/$imagename";
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
		
		
			
		$sql= "insert into serviceheading (headingTitle, headingDescription, headingImagePath, headingImageName) values ('$iID','$iDesc','$path', '$imgNm');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:service_main_add.php');
	}
	function editServiceHeading(){
		$hid=$_POST['hid'];
		$iID=$_POST['iid'];
		$desc=$_POST['desc'];
		$imgnm=$_POST['inm'];

		if(isset($iID) && $iID !=Null){
			$sqlup=mysql_query("Update serviceheading Set headingTitle='$iID' where headingID='$hid'");	
		}
		if(isset($desc)&& $desc !=Null){
			$sqlup=mysql_query("Update serviceheading Set headingDescription='$desc' where headingID='$hid'");	
		}
		if(isset($imgnm)&& $imgnm !=Null){
			$sqlup=mysql_query("Update serviceheading Set headingImageName='$imgnm' where headingID='$hid'");	
		}
		
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/service/$imagename";
		
		//actual server destination folder
		$dest = "../images/service/$imagename";
		echo "Destination: ".$dest;
		
		if (isset($imagename) && $imagename!= Null)
		{		
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or($ext==''))
		{	
				if(file_exists($dest)){
			echo "an image with that name already exists.. Please change your file";
		}
		else{
			if(isset($path) && $path !=Null){

			$sql1="Select * from serviceheading where headingID='$hid';";
			$res=mysql_query($sql1);
			while($row1 = mysql_fetch_array($res))
			{
 				 //echo $row1['headingImagePath'];
 				 $imgs=$row1['headingImagePath'];
 				 //echo $imgs;
 				 //echo $row1['headingImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 echo $arr[2];
 				 $cdr=getcwd();
 				 chdir("../../hts//images/service");
 				unlink($arr[2]);
 			}
 			chdir($cdr);
 			echo "Recent dir: ".getcwd();
 			copy($tmpimage,$dest);
			$sqlup=mysql_query("Update serviceheading Set headingImagePath='$path' where headingID='$hid'");	

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
	
		function addServiceSubHeading(){
		$mainHeading=$_POST['mainheading'];
		$subName=$_POST['subname'];	
		$subDesc=$_POST['subdesc'];
		$subImgNm=$_POST['subimgname'];

		//the php script to upload the image
		$imagename1 = $_FILES["newimg"]["name"];
		$tmpimage1 = $_FILES["newimg"]["tmp_name"];

		//path to put into the database table
		$path1 = "images/service/$imagename1";
		
		//actual server destination folder
		$dest1 = "../images/service/$imagename1";
		$arr1 = explode(".",$imagename1);
		//check whether the extention is correct
		$ext1 = $arr1[1];
		
		if(($ext1=='jpg') or ($ext1=='gif') or ($ext1=='JPG') or ($ext1=='GIF') or ($ext1=='png') or($ext1==''))
		{	
				//copy the temporarily uploaded file to the server destination (actual upload)
				copy($tmpimage1,$dest1);
				
				//@rename($dest,"../studpics/$id.$ext");
		}
		else
		{
			echo "invalid photo! try again.";
			exit;
		}
				//upload script ends.
		
				
		$sql= "insert into servicesub (headingID, subName, subDescription, subImagePath, subImageName) values ('$mainHeading', '$subName', '$subDesc','$path1', '$subImgNm');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		//header('location:service_sub_add.php');
	}
	
	
	
	
	function deleteSubService(){
		 $subname=$_POST['pname'];
		 if(isset($subname)){
			//echo $imgID;
			$sql1="Select * from servicesub where subName='$subname';";
			$res=mysql_query($sql1);
			while($row1 = mysql_fetch_array($res))
			{
 				 echo $row1['subImagePath'];
 				 $imgs=$row1['subImagePath'];
 				 echo $imgs;
 				 echo $row1['subImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 echo $arr[2];
 				 chdir("../../hts//images/service");
 				unlink($arr[2]);
 			}
		
			$sql= "delete from servicesub where subName='$subname';";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully deleted";
		}
		
	}
	
	function editSubService()
	{
		$shid=$_POST['sid'];
		$subtitle_name=$_POST['pname'];
		$sub_name=$_POST['upsubname'];
		$sub_desc=$_POST['upsubdesc'];
		$sub_img_name=$_POST['upsubimgname'];
		
		
		
		if ($sub_name !=Null || $sub_name !=""){ 
		$sqlup=mysql_query("Update servicesub Set subName='$sub_name' where subID='$shid'");
		}
		if ($sub_desc !=Null || $sub_desc !=""){ 
		$sqlup=mysql_query("Update servicesub Set subDescription='$sub_desc' where subID='$shid'");
		}
		if ($sub_img_name !=Null || $sub_img_name !=""){ 
		$sqlup=mysql_query("Update servicesub Set subImageName='$sub_img_name' where subID='$shid'");
		}	
		
			//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/service/$imagename";
		
		//actual server destination folder
		$dest = "../images/service/$imagename";
		echo "Destination: ".$dest;
		
		if (isset($imagename) && $imagename!= Null)
		{		
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or($ext==''))
		{	
				if(file_exists($dest)){
			echo "an image with that name already exists.. Please change your file";
		}
		else{
			if(isset($path) && $path !=Null){

			$sql1="Select * from servicesub where subID='$shid';";
			$res=mysql_query($sql1);
			while($row1 = mysql_fetch_array($res))
			{
 				 //echo $row1['headingImagePath'];
 				 $imgs=$row1['subImagePath'];
 				 //echo $imgs;
 				 //echo $row1['headingImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 echo $arr[2];
 				 $cdr=getcwd();
 				 chdir("../../hts//images/service");
 				unlink($arr[2]);
 			}
 			chdir($cdr);
 			echo "Recent dir: ".getcwd();
 			copy($tmpimage,$dest);
			$sqlup=mysql_query("Update servicesub Set subImagePath='$path' where subID='$shid'");	

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
		
	}
	
	
	
	}
$Servicepage = new Servicepage();
?>