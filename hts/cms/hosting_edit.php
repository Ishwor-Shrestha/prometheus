<?php
include("connect.php");
include("class/hostingpage.class.php");

if(isset($_POST['submit'])){
	$Hostingpage -> editHosting();
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hosting</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" /></head>

<body>
<div id="wrapper">
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Add Hosting Plan</a></div>
<div class="header2">
    <?php
 include('class/menu.php');
 ?>
</div>

<form method="post" action="">

<div class="form2">
 <table>
    <tr>
 	<th style="padding-left:5px;"> Features/Quota </th>
    <th style="padding-left:18px;"> Charge Per Year(NRS) </th>
    <th style="padding-left:25px;"> No of Emails (POP3) </th>
    <th style="padding-left:10px;"> Bandwidth Per Month </th>
     </tr>
	
   <?php
   //echo "hello";
   $a=0;
   $sql1="select * from hosting;";
   $result1=mysql_query($sql1) or die("error in mysql :".mysql_error());
   while($row1=mysql_fetch_array($result1))
   {
   $a = $a+1;
   ?>
   <tr>
   
    <td><input type="text" name="fea<?php echo $a ?>" value="<?php echo $row1['features_Quota'] ?>" style="width:130px;" autofocus required/></td>
    <td> <input type="text" name="cpy<?php echo $a ?>" value="<?php echo $row1['chargePerYear'] ?>" style="width:160px;" required/></td>
    <td> <input type="text" name="noe<?php echo $a ?>" value="<?php echo $row1['no_Email'] ?>" style="width:150px;" required/></td>
    <td> <input type="text" name="bpm<?php echo $a ?>" value="<?php echo $row1['band_PM'] ?>" style="width:150px;" required/></td>
	<td><a href="hosting_delete.php?dele=<?php echo $row1['hostingID']?>" name="del<?php echo $a ?>" >Delete</a></td>
  <td> <input type="text" name="host<?php echo $a ?>" value="<?php echo $row1['hostingID'] ?>" style="width:1px; visibility:hidden;" required/></td>
  </tr>
   <?php
   }
   ?>
    
   
 </table>
</div>
<input type="submit" value="Edit" name="submit" style="width:100px; height:30px; font-size:16px; margin:16px;" />
</form>
</div>
</body>
</html>
