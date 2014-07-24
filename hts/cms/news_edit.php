<?php
include("connect.php");

include("class/news.class.php");

	if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{
	if(isset($_POST['update'])){
		$Newspage -> editNews();
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>News</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit News</a></div>
<div class="header2">
   <?php
 include('class/menu.php');
 ?>
</div>

		


 <div class="form2">
 

       
          <form method="post" action="" enctype="multipart/form-data">
		  <?php
		  $a=$_GET['ed'];
		 // echo $a;
   
   $sql2="select * from news where newsID='$a';";
   $res2=mysql_query($sql2) or die ("error in mysql :".mysql_error());
	$row2=mysql_fetch_array($res2);
 
   
   ?>
            <table>
            <tr>
                <td> News Title: </td>
                <td> <input type="text" name="iid" value="<?php echo $row2['newsTitle']?>"/></td>
            </tr>
           <td>News Description: </td>
        <td> <textarea cols="20px" rows="10px" name="desc"><?php echo $row2['newsDescription']?></textarea></td>
    </tr>
	 <tr>
                <td> News Image: </td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
            </tr>
            <tr>
                <td> Image Title/Name: </td>
                <td> <input type="text" name="inm" value="<?php echo $row2['newsImageName']?>" /></td>
            </tr>
             <tr style="visibility:hidden">
                <td> Heading Title: </td>
                <td> <input style="visibility:hidden" type="text" name="hid" value="<?php echo $row2['newsID']?>"/></td>
            </tr>
         </table>  
<input type="submit" name="update" value="Update" /></form>
          
          </div>
    </div>
  
		</div>
</div>

</body>
</html>
<?php
}
?>