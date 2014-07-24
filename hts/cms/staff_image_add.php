<?php
include("connect.php");
include("class/staffpage.class.php");
	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

	else{
		if(isset($_POST['submit'])){
			$Staffpage  -> insertStaffImage();
			}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>UStaff</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Upload Staff Image</a></div>
<div class="header2">
   <?php
 include('class/menu.php');
 ?>
</div>

		<div class="form_wrapper">

		
<form method="post" action=""  enctype="multipart/form-data">
    <div class="form1">
        <table>
            <tr>
                <td> Image Title/Name: </td>
                <td> <input type="text" name="iname" autofocus required/></td>
            </tr>
           <td>Image Description: </td>
        <td> <textarea cols="20px" rows="10px" name="desc" required ></textarea></td>
    </tr>
                <td> Image Picture: </td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
            </tr>
         </table>
		 
		 
    </div>
    <div class="sendbutton">  
    <input type="submit" value="Upload Image" name="submit" />
	</div>
    
</form>
		</div>
</div>
</body>
</html>
<?php
}
?>