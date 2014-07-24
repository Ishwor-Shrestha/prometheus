<?php

class Productpage
{
	function insertProduct(){
	
		$name=$_POST['productname'];		
		$price=$_POST['productprice'];
		$bid=$_POST['brandid'];
		$scid=$_POST['subcategoryid'];
		$desc=$_POST['productdesc'];
		$pdate=$_POST['productdate'];
		$pstatus=$_POST['productstatus'];
				

		//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/product/$imagename";
		
		//actual server destination folder
		$dest = "../images/product/$imagename";
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
					include("connect1.php");

					$sql= "insert into product (productName,productPrice,subcategoryID,brandID,productDesc,productImagePath,productEntryDate,productStatus) values ('$name','$price',$scid,$bid,'$desc','$path','$pdate','$pstatus');";
					mysqli_query($connect,$sql) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error());
					
					$sql2="select * from subcategory where subcategoryID=$scid;";
					
					$result2=mysqli_query($connect,$sql2) or die("Error in Mysql :".mysqli_error());
					if ($row2=mysqli_fetch_array($result2))
					{
						$cid=$row2['categoryID'];
						
						$sqlc="select * from brandcategory where brandID=$bid and categoryID=$cid;";
						//echo $sqlc;
						$resultc=mysqli_query($connect,$sqlc) or die("Error in Mysql :".mysqli_error());
						$countc=mysqli_num_rows($resultc);
						
						if ($countc<1) {
							$sql3= "insert into brandcategory (brandID, categoryID) values ($bid,$cid);";
							mysqli_query($connect,$sql3) or die("Error in SQL: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error());
							echo "data sucessfully added";
						}
					
						
					}
					//echo "data sucessfully added";
				}
			}
			else
			{
				echo "invalid photo! try again.";
				exit;
			}
				//upload script ends				
		
		
	}


	function editProduct(){
		include("connect1.php");
		$name=$_POST['nm'];
		$price=$_POST['price'];
		$brand=$_POST['brand'];
		$subcategory=$_POST['sub'];
		$date=$_POST['date'];
		$status=$_POST['status'];
		$desc=$_POST['desc'];
		$pid=$_POST['pid'];
		$bid=$_POST['bid'];
		$scid=$_POST['scid'];

		
		if(isset($name) && $name !=Null){
			$sqlup=mysqli_query($connect,"Update product Set productName='$name' where productID='$pid'");	
		}
		if(isset($price) && $price !=Null){
			$sqlup=mysqli_query($connect,"Update product Set productPrice='$price' where productID='$pid'");	
		}

		if(isset($desc)&& $desc !=Null){
			$sqlup=mysqli_query($connect,"Update product Set productDesc='$desc' where productID='$pid'");	
		}
		if(isset($date)&& $date !=Null){
			$sqlup=mysqli_query($connect,"Update product Set productDate='$date' where productID='$pid'");	
		}

		if($status !="-- Select --" && $status !=Null){			
			$sqlup=mysqli_query($connect,"Update product Set productStatus='$date' where productID='$pid'");	
		}

		if ($brand!="-- Select --" && $subcategory!="-- Select --"){

			$sql1="select * from subcategory where subcategoryID='$scid';";					
			$result1=mysqli_query($connect,$sql1) or die("Error in Mysql :".mysqli_error($connect));
			if ($row1=mysqli_fetch_array($result1))
					{
						$cid=$row1['categoryID'];
						$sql2="select * from product where brandID='$bid' and subcategoryID='$scid';";
						$result2=mysqli_query($connect,$sql2) or die("Error in Mysql line 116 :".mysqli_error($connect));
						$count2=mysqli_num_rows($result2);
						
						if ($count2>=2) {
							$b1=$brand;
							$sqlup1=mysqli_query($connect,"Update product Set brandID='$brand',subcategoryID='$subcategory' where productID='$pid'") or die("Error in Mysql : line 122".mysqli_error($connect));	

							$sql3="select * from subcategory where subcategoryID='$subcategory';";
							$result3=mysqli_query($connect,$sql3) or  die("Error in Mysql 123:".mysqli_error($connect));
							if ($row3=mysqli_fetch_array($result3))
							{ 
								$cid4=$row3['categoryID']; 
								$sql4="select * from brandcategory where brandID='$brand' and categoryID='$cid4';";
								$result4=mysqli_query($connect,$sql4) or die("Error in Mysql 128:".mysqli_error($connect));
								$count4=mysqli_num_rows($result4);

								if($count4<1)
								{
									$sql5= "insert into brandcategory (brandID, categoryID) values ($brand,$cid4);";
									mysqli_query($connect,$sql5) or die("Error in SQL 134: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error($connect));
									echo "data sucessfully added";
								}

							}
						}
						else
						{
							$sqldel6="delete from brandcategory where brandID='$bid' and categoryID='$cid';";
							mysqli_query($connect,$sqldel6) or die("Error in Mysql: 144".mysqli_error($connect));
							$sqlup1=mysqli_query($connect,"Update product Set brandID='$brand', subcategoryID='$subcategory' where productID='$pid'") or die("Error in Mysql : line 146".mysqli_error($connect));	

							$sql7="select * from subcategory where subcategoryID='$subcategory';";
							$result7=mysqli_query($connect,$sql7) or  die("Error in Mysql 146 :".mysqli_error($connect));
							if ($row7=mysqli_fetch_array($result7))
							{
								$cid8=$row7['categoryID']; 
								$sql8="select * from brandcategory where brandID='$brand' and categoryID='$cid8';";
								$result8=mysqli_query($connect,$sql8) or die("Error in Mysql 151:".mysqli_error($connect));
								$count8=mysqli_num_rows($result8);

								if($count8<1)
								{
									$sql9= "insert into brandcategory (brandID, categoryID) values ('$brand','$cid8');";
									mysqli_query($connect,$sql9) or die("Error in SQL 157: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error($connect));
									echo "data sucessfully added";
								}

							}


						}
					}
			
		}

		elseif($brand!="-- Select --" && $brand !=Null){
			
			$sql1="select * from subcategory where subcategoryID='$scid';";					
			$result1=mysqli_query($connect,$sql1) or die("Error in Mysql :".mysqli_error($connect));
			if ($row1=mysqli_fetch_array($result1))
					{
						$cid=$row1['categoryID'];
						$sql2="select * from product where brandID='$bid' and subcategoryID='$scid';";
						$result2=mysqli_query($connect,$sql2) or die("Error in Mysql line 116 :".mysqli_error($connect));
						$count2=mysqli_num_rows($result2);
						
						if ($count2>=2) {
							$sqlup1=mysqli_query($connect,"Update product Set brandID='$brand' where productID='$pid'");	

							/*$sql3="select * from subcategory where subcategoryID='$scid';";
							$result3=mysqli_query($connect,$sql3) or  die("Error in Mysql 123:".mysqli_error($connect));
							if ($row3=mysqli_fetch_array($result3))
							{ 
								$cid4=$row3['categoryID']; */
								$sql4="select * from brandcategory where brandID='$brand' and categoryID='$cid';";
								$result4=mysqli_query($connect,$sql4) or die("Error in Mysql 128:".mysqli_error($connect));
								$count4=mysqli_num_rows($result4);

								if($count4<1)
								{
									$sql5= "insert into brandcategory (brandID, categoryID) values ($brand,$cid);";
									mysqli_query($connect,$sql5) or die("Error in SQL 134: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error($connect));
									echo "data sucessfully added";
								}

							//}
						}
						else
						{
							$sqldel6="delete from brandcategory where brandID='$bid' and categoryID='$cid';";
							mysqli_query($connect,$sqldel6) or die("Error in Mysql: 144".mysqli_error($connect));
							$sqlup1=mysqli_query($connect,"Update product Set brandID='$brand' where productID='$pid'");	

							/*$sql7="select * from subcategory where subcategoryID='$scid';";
							$result7=mysqli_query($connect,$sql7) or  die("Error in Mysql 146 :".mysqli_error($connect));
							if ($row7=mysqli_fetch_array($result7))
							{
								$cid8=$row7['categoryID']; */
								$sql8="select * from brandcategory where brandID='$brand' and categoryID='$cid';";
								$result8=mysqli_query($connect,$sql8) or die("Error in Mysql 151:".mysqli_error($connect));
								$count8=mysqli_num_rows($result8);

								if($count8<1)
								{
									$sql9= "insert into brandcategory (brandID, categoryID) values ('$brand','$cid');";
									mysqli_query($connect,$sql9) or die("Error in SQL 157: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error($connect));
									echo "data sucessfully added";
								}

							//}


						}
					}
		}

		elseif($subcategory!="-- Select --" && $subcategory !=Null){
			
			$sql1="select * from subcategory where subcategoryID='$scid';";					
			$result1=mysqli_query($connect,$sql1) or die("Error in Mysql :".mysqli_error($connect));
			if ($row1=mysqli_fetch_array($result1))
					{
						$cid=$row1['categoryID'];
						$sql2="select * from product where brandID='$bid' and subcategoryID='$scid';";
						$result2=mysqli_query($connect,$sql2) or die("Error in Mysql line 116 :".mysqli_error($connect));
						$count2=mysqli_num_rows($result2);
						
						if ($count2>=2) {
							$sqlup1=mysqli_query($connect,"Update product Set subcategoryID='$subcategory' where productID='$pid'");	

							$sql3="select * from subcategory where subcategoryID='$subcategory';";
							$result3=mysqli_query($connect,$sql3) or  die("Error in Mysql 123:".mysqli_error($connect));
							if ($row3=mysqli_fetch_array($result3))
							{ 
								$cid4=$row3['categoryID']; 
								$sql4="select * from brandcategory where brandID='$bid' and categoryID='$cid4';";
								$result4=mysqli_query($connect,$sql4) or die("Error in Mysql 128:".mysqli_error($connect));
								$count4=mysqli_num_rows($result4);

								if($count4<1)
								{
									$sql5= "insert into brandcategory (brandID, categoryID) values ($bid,$cid4);";
									mysqli_query($connect,$sql5) or die("Error in SQL 134: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error($connect));
									echo "data sucessfully added";
								}

							}
						}
						else
						{
							$sqldel6="delete from brandcategory where brandID='$bid' and categoryID='$cid';";
							mysqli_query($connect,$sqldel6) or die("Error in Mysql: 144".mysqli_error($connect));
							$sqlup1=mysqli_query($connect,"Update product Set subcategoryID='$subcategory' where productID='$pid'");	

							$sql7="select * from subcategory where subcategoryID='$subcategory';";
							$result7=mysqli_query($connect,$sql7) or  die("Error in Mysql 146 :".mysqli_error($connect));
							if ($row7=mysqli_fetch_array($result7))
							{
								$cid8=$row7['categoryID']; 
								$sql8="select * from brandcategory where brandID='$bid' and categoryID='$cid8';";
								$result8=mysqli_query($connect,$sql8) or die("Error in Mysql 151:".mysqli_error($connect));
								$count8=mysqli_num_rows($result8);

								if($count8<1)
								{
									$sql9= "insert into brandcategory (brandID, categoryID) values ('$bid','$cid8');";
									mysqli_query($connect,$sql9) or die("Error in SQL 157: <a href='javascript:history.back()'> Click here to Go back </a> &nbsp;&nbsp;".mysqli_error($connect));
									echo "data sucessfully added";
								}

							}


						}
					}
		}


			//the php script to upload the image
		$imagename = $_FILES["newsimg"]["name"];
		echo $imagename;
		$tmpimage = $_FILES["newsimg"]["tmp_name"];

		//path to put into the database table
		$path = "images/product/$imagename";
		
		//actual server destination folder
		$dest = "../images/product/$imagename";
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

						$sql1="Select * from product where productID='$pid';";
						$res=mysqli_query($connect,$sql1);
						while($row1 = mysqli_fetch_array($res))
						{
			 				$imgs=$row1['productImagePath'];
			 				$arr=array();
			 				 $arr= (explode ("/",$imgs));
			 				 $cdr=getcwd();
			 				 chdir("../images/product");
			 				 unlink($arr[2]);
			 			}
			 			chdir($cdr);
			 			echo "Recent dir: ".getcwd();
			 			copy($tmpimage,$dest);
						$sqlup=mysqli_query($connect,"Update product Set productImagePath='$path' where productID='$pid'");	

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
	//end of image edit

		
		
		
	}

	function deleteProduct(){
		include("connect1.php");
		 $pid=$_POST['pid'];
		

		 $bid=$_POST['bid'];
		 $scid=$_POST['scid'];
		 $path=$_POST['imagepath'];
		 echo $pid.$bid.$scid;
		 $s1="Select * from product where brandID='$bid' and subcategoryID='$scid';";
		 $r1=mysqli_query($connect, $s1) or die("Error in mysql: ".mysqli_error($connect));
		 if($c1=mysqli_num_rows($r1)>1){
		 	$arr=array();
 			$arr= (explode ("/",$path));
 			chdir("../images/product");
 			unlink($arr[2]);
		 	$s2="Delete from product where productID='$pid';";
		 	mysqli_query($connect,$s2) or die("Error in mysql: ".mysqli_error($connect));
		 	echo "Product Deleted";
		 	header('location:edit_delete_product.php');

		 }
		 elseif ($c1=mysqli_num_rows($r1)==1) {
		 	$s3="Select * from subcategory where subcategoryID='$scid';";
		 	$r2=mysqli_query($connect,$s3) or die("Mysqli Error: ".mysqli_error($connect));
		 	while($qr1=mysqli_fetch_array($r2))
		 	{
		 		$cid=$qr1['categoryID'];
		 	}
		 	$s4="Delete from brandcategory where brandID='$bid' and categoryID='$cid';";
		 	mysqli_query($connect, $s4);

		 	$arr=array();
 			$arr= (explode ("/",$path));
 			chdir("../images/product");
 			unlink($arr[2]);

		 	$s2="Delete from product where productID='$pid';";
		 	mysqli_query($connect,$s2) or die("Error in mysql: ".mysqli_error($connect));
		 	echo "Product Deleted";
		 	header('location:edit_delete_product.php');



		 }
	}




	


	
	
	
	}
$Productpage= new Productpage();
?>