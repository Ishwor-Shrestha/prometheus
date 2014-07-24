<?php
include("connect.php");
	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{

?>

<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />	       					
			<?php
			$q2 =$_GET['q2'];		
			
           $query2="select * from servicesub where subName='$q2'";	//subName
			$result2 = mysql_query($query2,$connect);
				$row1 = mysql_num_rows($result2 );
				if($row1>0){
					while($row2=mysql_fetch_array($result2)){
					?>	
						
			
          <table border="2px" width="300px">
				<br>

				<tr>
						<td> Sub Name: </td>
						<td ><?php echo $row2['subName']?></td>
					</tr>
					<tr>
						<td> Sub Description: </td>
						<td><?php echo $row2['subDescription']?></td>
					</tr>
					<tr>
						<td> SubImage: </td>
						<td><img  src="<?php echo "../../hts/".$row2['subImagePath']?>" height="120px" width="100px"></td>
					</tr>
					<tr>
						<td> Sub Image Name </td>
						<td><?php echo $row2['subImageName']?></td>
					</tr>
					
					
		    </table> 
			<br> 
						
               <?php
			   			}			
					}
					}
					
            	?>
          
      