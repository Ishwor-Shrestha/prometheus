<?php
include("connect.php");
include("class/hostingpage.class.php");

if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{

if(isset($_POST['submit'])){
	$Hostingpage -> addHosting();
		}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Hosting</title>
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
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Add Hosting Plan</a></div>
<div class="header2">
    <?php
 include('class/menu.php');
 ?>
</div>

<form method="post" action="">

<div class="form2">
 <table>
    <tr style="display:block;" >
 	<th style="padding-left:5px;"> Features/Quota </th>
    <th style="padding-left:18px;"> Charge Per Year(NRS) </th>
    <th style="padding-left:25px;"> No of Emails (POP3) </th>
    <th style="padding-left:10px;"> Bandwidth Per Month </th>
     </tr>
   
   <?php
		for($a=1; $a<=5; $a++)
		{
		?>
    <tr id="slip" style="display:block;">
	<td><input type="text" name="fea<?php echo $a ?>"  style="width:110px;"/></td>
    <td> <input type="text" name="cpy<?php echo $a ?>" style="width:150px;"/></td>
    <td> <input type="text" name="noe<?php echo $a ?>" style="width:150px;"/></td>
    <td> <input type="text" name="bpm<?php echo $a ?>" style="width:150px;"/></td>   
	
    
    <?php
	if ($a==5)
	{
		?>
        <td> <img src="image/addbutton.png" id="addbutton" onclick="javascript:Add('slip5','addbutton')" style="width:20px; height:20px;"  />
        <?php
	}
	?>
    </tr>
	<?php
	}
	$b=5;
	$c=6;
	for ($i=1; $i<=10; $i++)
	{
	?>
    <tr id="slip<?php echo $b ?>" style="display:none;">
   	<td><input type="text" name="fea<?php echo $c ?>"  style="width:110px;"/></td>
    <td> <input type="text" name="cpy<?php echo $c ?>" style="width:150px;"/></td>
    <td> <input type="text" name="noe<?php echo $c ?>" style="width:150px;"/></td>
    <td> <input type="text" name="bpm<?php echo $c ?>" style="width:150px;"/></td>    
    
    <td> <img src="image/addbutton.png" id="addbutton<?php echo $b ?>" onclick="javascript:Add('slip<?php echo $c ?>','addbutton<?php echo $b ?>')" style="height:20px;width:20px;" /></td>
    <?php
	$b=$b+1;
	$c=$c+1;
	}	
	?>
    </tr>
 </table>
</div>
<input type="submit" value="Add" name="submit" style="width:100px; height:30px; font-size:16px; margin:16px;" />
</form>
</div>
</body>
</html>
<?php
}
?>
