<?php
class SliderPage
{
	function insertImage(){
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/bigslider/$imagename";
		
		//actual server destination folder
		$dest = "../images/bigslider/$imagename";
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
			if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
			{	
					//copy the temporarily uploaded file to the server destination (actual upload)
				if(file_exists($dest)){
					echo "an image with that name already exists.. Please change your file";
				}
				else{
						copy($tmpimage,$dest);
						include("connect1.php");
						$sql= "insert into sliderimage (sliderimageImagePath) values ('$path');";
						mysqli_query($connect, $sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error());
						echo "data sucessfully added";
					
					//@rename($dest,"../studpics/$id.$ext");	
				}
				
			}
			else
			{
				echo "invalid photo! try again.";
				exit;
			}
				//upload script ends.
		
		
					
		//header('location:add_slider1.php');
	}

	
}
$Sliderpage = new Sliderpage();
?>