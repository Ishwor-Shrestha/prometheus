<?php
include("connect.php");

	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Customer</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit/Delete Customer </a></div>
<div class="header2">
   <?php
 include('class/menu.php');
 ?>
</div>

        <div class="form_wrapper">
<h1>Edit/Delete Customer</h1>

 <div class="form2">
  <font style="font-size:24px; padding-bottom:0px;">List of Customer</font><br/><br/>
   <?php
   $sql= "select * from customer;";
   $res=mysql_query($sql) or die ("error in mysql :".mysql_error());
   while ($row=mysql_fetch_array($res))
   {
   ?>
   <div style="border-style:outset; padding:10px 0px 10px 0px; font-family:Arial, Helvetica, sans-serif; font-size:20px;" >
 
  News Heading: <?php echo $row['customerName'] ?>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;" href="customer_edit.php?ed=<?php echo $row['customerID']  ?>">EDIT</a>    | &nbsp;&nbsp;&nbsp;<a "style="text-decoration:none;" href="customer_del.php?dele=<?php echo $row['customerID']  ?>">DELETE</a>
  </div>
  <?php
  }
  ?>
  
  
    </div>
  
        </div>
</div>
</body>
</html>
<?php
}
?>