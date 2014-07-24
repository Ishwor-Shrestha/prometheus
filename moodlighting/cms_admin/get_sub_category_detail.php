<?php
include("connect.php");
/*	session_start();
if(!session_is_registered(Login_Name)){
//if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{ */
/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{ */

?>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />	       					
			<?php
			$q2 =$_GET['q2'];		
			
           $query2="select * from subcategory where subcategoryID='$q2'";	//subName
			$result2 = mysqli_query($connect,$query2);
				$row1 = mysqli_num_rows($result2 );
				if($row1>0){
					while($row2=mysqli_fetch_array($result2)){
					?>	
						
			
          <table border="2px" width="300px">
				<br>

					<tr>
						<td> Sub Name: </td>
						<td ><?php echo $row2['subcategoryName']?></td>
					</tr>
					<tr>
						<td> Sub Description: </td>
						<td><?php echo $row2['subcategoryDesc']?></td>
					</tr>
					<tr>
						<td> SubImage: </td>
						<td><img  src="<?php echo "../".$row2['subcategoryImagePath']?>" height="120px" width="100px"></td>
					</tr>
					
					
					
		    </table> 
			<br> 
						
               <?php
			   			}			
					}
				//	}
					
            	?>
          
      