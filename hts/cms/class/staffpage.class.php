<?php
class Staffpage
{
	
	function insertStaffImage(){
		$iID=$_POST['iname'];	
		$iDesc=$_POST['desc'];
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/staffs/$imagename";
		
		//actual server destination folder
		$dest = "../images/staffs/$imagename";
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
		
		
			
		$sql= "insert into staffimage (imageName, imageDescription, imagePath) values ('$iID','$iDesc','$path');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:staff_image_add.php');
	}
	
	
	}
$Staffpage = new Staffpage();
?>