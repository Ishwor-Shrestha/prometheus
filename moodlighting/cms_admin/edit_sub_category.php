<?php
include("connect.php");
include("class/categorypage.class.php");
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

	if(isset($_POST['delete'])){
	$Categorypage -> deleteSubCategory();
	}

	if(isset($_POST['edit'])){
	$Categorypage -> editSubCategory();
	}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Sub Category</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script src="ckeditor/ckeditor.js"> </script>
<style type="text/css">
th{background-color:#999;}
</style>
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit/Delete Sub Category</a></div>
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
		<td> Category ID: </td>
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
					xmlhttp.open("GET","get_sub_category_detail.php?q2="+str,true);
					xmlhttp.send();
					}
			</script> 

  
  
 <?php
 	$query = "SELECT * FROM subcategory where categoryID='$a';";
	if($result = mysqli_query($connect,$query))  {

      // If there are results returned, prepare combo-box
      if($success = mysqli_num_rows($result) > 0) {
	  
      
        // Start combo-box
        echo "<select name='subcategoryid' onchange='showUser(this.value)' style='height:30px; font-size:16px;'>\n";
		echo "<option >-- Sub Heading --</option>\n";
		
		
        
 // For each item in the results...
        while ($row = mysqli_fetch_array($result))
          // Add a new option to the combo-box
          echo "<option value='$row[subcategoryID]'>$row[subcategoryName]</option>\n";

        // End the combo-box
        echo "</select>\n";
      }
      // No results found in the database
       else { echo "<a href='edit_delete_subCategory.php'>No results found. Reload</a>"; }
    }
    // Error in the database
    else { echo "Failed to connect to database."; }

     
 ?> 
  <br>
 	<span id="txtHint2">  </span>
	
	<table>
		<tr>
			<td>Sub Category Name:</td>
			<td><input type="text" name="upsubname"><br></td>
		</tr>
		<tr>
			<td>Sub Category Description:</td>
			<td><textarea  class="ckeditor"  name="upsubdesc" ></textarea></td>
		</tr>
		<tr>
            <td> Sub Category Image: </td>
            <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
         </tr>
				
	</table>
	
	<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
 <input type="submit" name="edit" value="Edit" /> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type="submit" name="delete" value="Delete" /></form> 
<?
//header('location:edit_sub_category.phpsup='.$a);
?>

</div>
</body>
</html>
<?php
//}
?>
