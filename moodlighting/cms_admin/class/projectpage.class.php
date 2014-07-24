<?php
class Projectpage
{
	function insertProject(){
	
		$name=$_POST['nm'];		
		$desc=$_POST['desc'];
		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/project/$imagename";
		
		//actual server destination folder
		$dest = "../images/project/$imagename";
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
			if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
			{	
					if(file_exists($dest)){
					echo "an image with that name already exists.. Please change your file";
				}
				else{
						copy($tmpimage,$dest);
						include("connect1.php");
						$sql= "insert into project (projectName,projectDesc,projectImagePath) values ('$name','$desc','$path');";
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
		
		
					
		//header('location:add_brand.php');
	}

	function editProject(){

		$id=$_POST['id'];
		$nm=$_POST['nm'];
		$desc=$_POST['desc'];

		include("connect1.php");

		if(isset($nm) && $nm !=Null){
			$sqlup=mysqli_query($connect, "Update project Set projectName='$nm' where projectID='$id'");	
		}
		if(isset($desc)&& $desc !=Null){
			$sqlup=mysqli_query($connect, "Update project Set projectDesc='$desc' where projectID='$id'");	
		}
		

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		//echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/project/$imagename";
		
		//actual server destination folder
		$dest = "../images/project/$imagename";
		//echo "Destination: ".$dest;
		
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

			$sql1="Select * from project where projectID='$id';";
			$res=mysqli_query($connect, $sql1);
			while($row1 = mysqli_fetch_array($res))
			{
 				 //echo $row1['headingImagePath'];
 				 $imgs=$row1['projectImagePath'];
 				 //echo $imgs;
 				 //echo $row1['headingImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 //echo $arr[2];
 				 $cdr=getcwd();
 				 chdir("../images/project");
 				unlink($arr[2]);
 			}
 			chdir($cdr);
 			//echo "Recent dir: ".getcwd();
 			copy($tmpimage,$dest);
			$sqlup=mysqli_query($connect, "Update project Set projectImagePath='$path' where projectID='$id'");	

		}
			//copy the temporarily uploaded file to the server destination (actual upload)
		}
		}
	}	
}
}
$Projectpage = new Projectpage();
?>