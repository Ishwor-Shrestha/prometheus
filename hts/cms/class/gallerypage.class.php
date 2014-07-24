<?php
class Gallerypage
{
	
	
	
	function insertGalleryImage(){
		$iName=$_POST['iname'];	
		$iDesc=$_POST['desc'];
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/portfolio/$imagename";
		
		//actual server destination folder
		$dest = "../images/portfolio/$imagename";
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
		
		
		//the php script to upload the thumbnailimage
		$imagename1 = $_FILES["newimg"]["name"];
		$tmpimage1 = $_FILES["newimg"]["tmp_name"];

		//path to put into the database table
		$path1 = "images/portfolio/thumbnail/$imagename";
		
		//actual server destination folder
		$dest1 = "../images/portfolio/thumbnail/$imagename";
		$arr1 = explode(".",$imagename);
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
		
		
			
		$sql= "insert into galleryimage (imageName, imageDescription,imageThumbnail, imagePath) values ('$iName','$iDesc','$path1','$path');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:gallery_image_add.php');
	}
	
	
	}
$Gallerypage = new Gallerypage();
?>