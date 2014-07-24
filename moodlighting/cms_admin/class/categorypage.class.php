<?php

class Categorypage
{
	function insertCategory(){
	include("connect1.php");
		$name=$_POST['categoryname'];		
		$desc=$_POST['categorydesc'];
		

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/category/$imagename";
		
		//actual server destination folder
		$dest = "../images/category/$imagename";
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
			if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
			{
				if(file_exists($dest)){
				echo "an image with that name already exists.. Please change your file";
				}
			else{	
					//copy the temporarily uploaded file to the server destination (actual upload)
					copy($tmpimage,$dest);
					//@rename($dest,"../studpics/$id.$ext");

					$sql= "insert into category (categoryName,categoryImagePath,categoryDesc) values ('$name','$path','$desc');";
					mysqli_query($connect,$sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error());
					echo "data sucessfully added";
					
				}
			}
			else
			{
				echo "invalid photo! try again.";
				exit;
			}
				//upload script ends.
		
			
			
		
					
		header('location:add_category.php');
		
	}



	function editCategory(){
		include("connect1.php");
		$hid=$_POST['hid'];
		$name=$_POST['categoryname'];
		$desc=$_POST['categorydesc'];
		

		if(isset($name) && $name !=Null){
			$sqlup=mysqli_query($connect,"Update category Set categoryName='$name' where categoryID='$hid'");	
		}
		if(isset($desc)&& $desc !=Null){
			$sqlup=mysqli_query($connect,"Update category Set categoryDesc='$desc' where categoryID='$hid'");	
		}
		
		
		//the php script to upload the image
		
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/category/$imagename";
		
		//actual server destination folder
		$dest = "../images/category/$imagename";
		echo "Destination: ".$dest;
		
		if (isset($imagename) && $imagename!= Null)
		{
		
			$arr = explode(".",$imagename);
			//check whether the extention is correct
			$ext = $arr[1];
		
			if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
			{	
				if(file_exists($dest)){
				echo "an image with that name already exists.. Please change your file";
			}
			else{
				if(isset($path) && $path !=Null){

				$sql1="Select * from category where categoryID='$hid';";
				$res=mysqli_query($connect,$sql1);
				while($row1 = mysqli_fetch_array($res))
				{
 					 //echo $row1['headingImagePath'];
 				 	$imgs=$row1['categoryImagePath'];
 				 	//echo $imgs;
 				 	//echo $row1['headingImageName'];
 					$arr=array();
 				 	$arr= (explode ("/",$imgs));
 				 	echo $arr[2];
 				 	$cdr=getcwd();
 				 	chdir("../images/category");
 					unlink($arr[2]);
 				}
 				chdir($cdr);
	 			echo "Recent dir: ".getcwd();
 				copy($tmpimage,$dest);

				$sqlup=mysqli_query($connect,"Update category Set categoryImagePath='$path' where categoryID='$hid'");	

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
	
	

	
	function insertSubCategory(){
		include("connect1.php");
	
		$name=$_POST['subcategoryname'];		
		$desc=$_POST['subcategorydesc'];
		$categoryid=$_POST['mainheading'];
		

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/category/subcategory/$imagename";
		
		//actual server destination folder
		$dest = "../images/category/subcategory/$imagename";
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
			if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
			{	
				if(file_exists($dest)){
				echo "an image with that name already exists.. Please change your file";
				}
			else{
					//copy the temporarily uploaded file to the server destination (actual upload)
					copy($tmpimage,$dest);

					$sql1= "insert into subcategory (subcategoryName,subcategoryDesc, subcategoryImagePath, categoryID) values ('$name', '$desc','$path', $categoryid);";
					mysqli_query($connect,$sql1) or die("Error in mysql :".mysqli_error($connect));
					echo "data sucessfully added yolo"; 
			
					//@rename($dest,"../studpics/$id.$ext");
					}
				}
			else
			{
				echo "invalid photo! try again.";
				exit;
			}
				//upload script ends.
	
	}


	function editSubCategory()
	{
		include("connect1.php");
		$sub_id=$_POST['subcategoryid'];
		$sub_name=$_POST['upsubname'];
		$sub_desc=$_POST['upsubdesc'];
		
		if ($sub_name !=Null || $sub_name !=""){ 
		$sqlup=mysqli_query($connect,"Update subcategory Set subcategoryName='$sub_name' where subcategoryID='$sub_id'");
		}
		if ($sub_desc !=Null || $sub_desc !=""){ 
		$sqlup=mysqli_query($connect,"Update subcategory Set subDesc='$sub_desc' where subcategoryID='$sub_id'");
		}
		

			//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/category/subcategory/$imagename";
		
		//actual server destination folder
		$dest = "../images/category/subcategory/$imagename";
		echo "Destination: ".$dest;
		
		if (isset($imagename) && $imagename!= Null)
		{
		
		$arr = explode(".",$imagename);
		//check whether the extention is correct
		$ext = $arr[1];
		
		if(($ext=='jpg') or ($ext=='gif') or ($ext=='JPG') or ($ext=='GIF') or ($ext=='png') or ($ext=='PNG') or($ext==''))
		{	
				if(file_exists($dest)){
					echo "an image with that name already exists.. Please change your file";
				}
				else{
					if(isset($path) && $path !=Null){

						$sql1="Select * from subcategory where subcategoryID='$sub_id';";
						$res=mysqli_query($connect,$sql1);
						while($row1 = mysqli_fetch_array($res))
						{
			 				$imgs=$row1['subcategoryImagePath'];
			 				$arr=array();
			 				 $arr= (explode ("/",$imgs));
			 				 echo $arr[3];
			 				 $cdr=getcwd();
			 				 echo "Current Directory 1: ".$cdr;
			 				 chdir("../images/category/subcategory");
			 				 echo "After changing directory: ".getcwd();
			 				unlink($arr[3]);
			 			}
			 			chdir($cdr);
			 			echo "Recent dir: ".getcwd();
			 			copy($tmpimage,$dest);
						$sqlup=mysqli_query($connect,"Update subcategory Set subcategoryImagePath='$path' where subcategoryID='$sub_id'");	

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


	function deleteSubCategory(){
		include("connect1.php");
		 $subid=$_POST['subcategoryid'];
		 if(isset($subid)){
			//echo $imgID;
			$sql2="select * from product where subcategoryID='$subid';";
 			$result2=mysqli_query($connect, $sql2);
			$count2=mysqli_num_rows($result2);
			if($count2<=0){

				$sql1="Select * from subcategory where subcategoryID='$subid';";
				$res=mysqli_query($connect,$sql1);
				while($row1 = mysqli_fetch_array($res))
				{
	 				 echo $row1['subcategoryImagePath'];
	 				 $imgs=$row1['subcategoryImagePath'];
	 				 echo $imgs;
	 				
	 				$arr=array();
	 				 $arr= (explode ("/",$imgs));
	 				 echo $arr[3];
	 				 chdir("../images/category/subcategory");
	 				unlink($arr[3]);
	 			}

 			
		
				$sql= "delete from subcategory where subcategoryID='$subid';";
			
			mysqli_query($connect,$sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
			echo "data sucessfully deleted";
		}
		else{
		echo "Sorry this subcategory has products. Please delete them first to delete this subcategory  <a href='javascript:history.back()'> Click here to Go back </a>";
		
	}
	}
	


	
	
	
	}
	}
$Categorypage= new Categorypage();
?>