<?php
class Brandpage
{
	function insertBrand(){
	
		$name=$_POST['brandname'];		
		$desc=$_POST['branddesc'];
		$link=$_POST['brandlink'];


		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/brand/$imagename";
		
		//actual server destination folder
		$dest = "../images/brand/$imagename";
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
						$sql= "insert into brand (brandName,brandImagePath,brandDesc,brandLink) values ('$name','$path','$desc','$link');";
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

	function editBrand(){

		$id=$_POST['id'];
		$nm=$_POST['nm'];
		$link=$_POST['lnk'];
		$desc=$_POST['desc'];

		include("connect1.php");

		if(isset($nm) && $nm !=Null){
			$sqlup=mysqli_query($connect, "Update brand Set brandName='$nm' where brandID='$id'");	
		}
		if(isset($desc)&& $desc !=Null){
			$sqlup=mysqli_query($connect, "Update brand Set brandDesc='$desc' where brandID='$id'");	
		}
		if(isset($link)&& $link !=Null){
			$sqlup=mysqli_query($connect, "Update brand Set brandLink='$link' where brandID='$id'");	
		}

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		//echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/brand/$imagename";
		
		//actual server destination folder
		$dest = "../images/brand/$imagename";
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

			$sql1="Select * from brand where brandID='$id';";
			$res=mysqli_query($connect, $sql1);
			while($row1 = mysqli_fetch_array($res))
			{
 				 //echo $row1['headingImagePath'];
 				 $imgs=$row1['brandImagePath'];
 				 //echo $imgs;
 				 //echo $row1['headingImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 //echo $arr[2];
 				 $cdr=getcwd();
 				 chdir("../images/brand");
 				unlink($arr[2]);
 			}
 			chdir($cdr);
 			//echo "Recent dir: ".getcwd();
 			copy($tmpimage,$dest);
			$sqlup=mysqli_query($connect, "Update brand Set brandImagePath='$path' where brandID='$id'");	

		}
			//copy the temporarily uploaded file to the server destination (actual upload)
		}
		}
	}	
}
}
$Brandpage = new Brandpage();
?>