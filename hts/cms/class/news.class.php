<?php
class Newspage
{
	function addNews(){
		$neName=$_POST['nename'];	
		$iDesc=$_POST['desc'];
		$imgNm=$_POST['inm'];

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/news/$imagename";
		
		//actual server destination folder
		$dest = "../images/news/$imagename";
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
		
		
			
		$sql= "insert into news (newsTitle, newsDescription, newsImagePath, newsImageName) values ('$neName','$iDesc','$path', '$imgNm');";
		
		mysql_query($sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysql_error());
		echo "data sucessfully added";
		
			
		header('location:newsadd.php');
	}
	
	
	function editNews(){
		$hid=$_POST['hid'];
		$iID=$_POST['iid'];
		$desc=$_POST['desc'];
		$imgnm=$_POST['inm'];

		if(isset($iID) && $iID !=Null){
			$sqlup=mysql_query("Update news Set newsTitle='$iID' where newsID='$hid'");	
		}
		if(isset($desc)&& $desc !=Null){
			$sqlup=mysql_query("Update news Set newsDescription='$desc' where newsID='$hid'");	
		}
		if(isset($imgnm)&& $imgnm !=Null){
			$sqlup=mysql_query("Update news Set newsImageName='$imgnm' where newsID='$hid'");	
		}
		
		//the php script to upload the image
		
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/news/$imagename";
		
		//actual server destination folder
		$dest = "../images/news/$imagename";
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

			$sql1="Select * from news where newsID='$hid';";
			$res=mysql_query($sql1);
			while($row1 = mysql_fetch_array($res))
			{
 				 //echo $row1['headingImagePath'];
 				 $imgs=$row1['newsImagePath'];
 				 //echo $imgs;
 				 //echo $row1['headingImageName'];
 				$arr=array();
 				 $arr= (explode ("/",$imgs));
 				 echo $arr[2];
 				 $cdr=getcwd();
 				 chdir("../../hts//images/news");
 				unlink($arr[2]);
 			}
 			chdir($cdr);
 			echo "Recent dir: ".getcwd();
 			copy($tmpimage,$dest);
			$sqlup=mysql_query("Update news Set newsImagePath='$path' where newsID='$hid'");	

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
	
	$Newspage = new Newspage();
	?>