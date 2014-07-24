<?php
include("connect.php");

include("class/careerpage.class.php");
	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
	if(isset($_POST['submit'])){
		$Careerpage -> addCareerSubHeading();
		}

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Sub Heading Career</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script language="javascript">
function Add(add1,hide1)
{
	if (document.getElementById(add1).style.display == 'none')
	{
		document.getElementById(add1).style.display = 'block';
		document.getElementById(hide1).style.display = 'none';
	}
}
</script>
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Add Sub Heading Career</a></div>
<div class="header2">
    <?php
 include('class/menu.php');
 ?></div>

 <div class="form_wrapper">

<form method="post" action=""  enctype="multipart/form-data">

<div class="form1">
 <br /><br />
 <?php
 	$query = "SELECT * FROM careerheading;";
	if($result = mysql_query($query))  {

      // If there are results returned, prepare combo-box
      if($success = mysql_num_rows($result) > 0) {
      
        // Start combo-box
        echo "<select name='mainheading' style='height:30px; font-size:16px;'>\n";
        echo "<option >-- Choose Title --</option>\n";
        
 // For each item in the results...
        while ($row = mysql_fetch_array($result))
          // Add a new option to the combo-box
          echo "<option value='$row[headingID]'>$row[headingTitle]</option>\n";

        // End the combo-box
        echo "</select>\n";
      }
      // No results found in the database
      else { echo "No results found."; }
    }
    // Error in the database
    else { echo "Failed to connect to database."; }

    
 ?> 
 <table>
       
  
    <table id="slip" style="display:block;">
	<tr>
	<td>SubTitle Name</td>
   	<td><input type="text" name="subname" autofocus required /></td>
	</tr>
    <tr>
	<td>SubTitle Description</td>
	<td> <textarea  cols="2" rows="5"  name="subdesc" required/></textarea></td>
	</tr>
	<tr>
	<td>Sub Image </td>
	<td>  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
	</tr>	
    <tr>
	<td>SubTitle Image Name</td>
	<td> <input type="text" name="subimgname" required/></td>
	</tr>    
	<td> <input type="text" style="visibility:hidden;" name="" /></td> 
	</tr>
   
   </table>
	
</div>
<input type="submit" value="Send" name="submit" style="width:300px; height:40px; font-size:16px; margin:16px 16px 16px 0px;" />
</form>
</div>
</div>
</body>
</html>
<?php
}
?>