<?php
include("connect.php");

include("class/indexpage.class.php");

	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
if(isset($_POST['update'])){
	$Indexpage -> editCustomModule();
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Module</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit Module Title</a></div>
<div class="header2">
   <?php
 include('class/menu.php');
 ?>
</div>

		


 <div class="form2">
 

       
          <form method="post" action="">
		  <?php
		  $a=$_GET['ed'];
		  //echo $a;
   
   $sql2="select * from cmodule where SN='$a';";
   $res2=mysql_query($sql2) or die ("error in mysql :".mysql_error());
	$row2=mysql_fetch_array($res2);
 
   
   ?>		 <table>
            <tr>
                <td> Module Title: </td>
                <td> <input type="text" name="upmtitle" value="<?php echo $row2['ModuleTitle']?>" placeholder="Update Title"></td>
            </tr>
           <td>Module Description: </td>
        <td> <textarea cols="20px" rows="10px" name="upmdesc"><?php echo $row2['ModuleDecs']?></textarea></td>
    </tr>
             <tr style="visibility:hidden">
                <td> Heading Title: </td>
                <td> <input type="text" name="upsn" value="<?php echo $row2['SN']?>" style="visibility:hidden;"></td>
            </tr>
         </table>  	  



  
<input type="submit" name="update" value="Update Module" /></form>
          
          </div>
    </div>
  
		</div>
</div>

</body>
</html>
<?php
}
?>