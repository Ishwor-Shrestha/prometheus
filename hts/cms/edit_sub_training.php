<?php
include("connect.php");
include("class/trainingpage.class.php");

	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
	if(isset($_POST['delete'])){
	$Trainingpage -> deleteSubTraining();
	}

	if(isset($_POST['edit'])){
	$Trainingpage -> editSubTraining();
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit/Delete Sub Training</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<style type="text/css">
th{background-color:#999;}
</style>
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit/Delete Sub Training</a></div>
<div class="header2">
    <?php
 include('class/menu.php');
 ?>
</div>


  <div class="form2">
  <form method="post" action="" enctype="multipart/form-data">
 
  <br /><br />
  
  <?php
   $a=$_GET['ed'];
   ?>
   
   <table border="2px" width="300px">
	
	<tr>
		<td> Heading ID: </td>
		<td ><?php echo $a ?></td>
	</tr>
	
	
	</table><br>
   
  
  
  <script>
					function showUser(str)
					{
					if (str=="")
					  {
					  document.getElementById("txtHint2").innerHTML="";
					  return;
					  } 
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("txtHint2").innerHTML=xmlhttp.responseText;
						}
					  }
					xmlhttp.open("GET","get_sub_training_detail.php?q2="+str,true);
					xmlhttp.send();
					}
			</script> 

  
  
 <?php
 	$query = "SELECT distinct subName FROM trainingsub where headingID='$a';";
	if($result = mysql_query($query))  {

      // If there are results returned, prepare combo-box
      if($success = mysql_num_rows($result) > 0) {
	  
      
        // Start combo-box
        echo "<select name='pname' onchange='showUser(this.value)' style='height:30px; font-size:16px;'>\n";
		echo "<option >-- Sub Heading --</option>\n";
		
		
        
 // For each item in the results...
        while ($row = mysql_fetch_array($result))
          // Add a new option to the combo-box
          echo "<option value='$row[subName]'>$row[subName]</option>\n";

        // End the combo-box
        echo "</select>\n";
      }
      // No results found in the database
       else { echo "<a href='training_sub_edit-delete.php'>No results found. Reload</a>"; }
    }
    // Error in the database
    else { echo "Failed to connect to database."; }

     
 ?> 
  <br>
 	<span id="txtHint2">  </span>
	<?php
	$query = "SELECT * FROM trainingsub where headingID='$a';";
	$sql1= mysql_query($query) or die("error in sql :" .mysql_error());
	if($row1=mysql_fetch_array($sql1)){
	?>
	<table>
		<tr>
			<td>Sub Heading  Name:</td>
			<td><input type="text" name="upsubname" value="<?php  echo $row1['subName'] ?>"><br></td>
		</tr>
		<tr>
			<td>Sub Heading Description:</td>
			<td><textarea cols='45' rows='5' name="upsubdesc" value=""><?php  echo $row1['subDescription'] ?> </textarea></td>
		</tr>
		<tr>
                <td> Sub Heading Image: </td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
         </tr>
		<tr>
			<td>Sub Heading Image Name:</td>
			<td><input type="text" name="upsubimgname" value="<?php  echo $row1['subImageName'] ?>"><br></td>
		</tr>
		<tr>
                <td> Sub Heading ID: </td>
                <td> <input style="visibility:hidden" type="text" name="sid" value="<?php  echo $row1['subID'] ?>"/></td>
            </tr>
	</table>
	<?php
	}
	
	
	?>
	<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
 <input type="submit" name="edit" value="Edit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="delete" value="Delete" /></form> 
<?
header('location:edit_sub_training.phpsup='.$a);
?>

</div>
</body>
</html>
<?php
}
?>