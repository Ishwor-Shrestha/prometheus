<?php
include("connect.php");

include("class/categorypage.class.php");

	/*session_start();
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

else{*/
	if(isset($_POST['update'])){
		$Categorypage  -> editCategory();
		}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Category</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script src="ckeditor/ckeditor.js"> </script>
</head>

<body>
  <div id="wrapper">
    <div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
    <div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit Category</a></div>
    <div class="header2">
       <?php
         include('class/menu.php');
       ?>
    </div>

  <div class="form2">     
    <form method="post" action="" enctype="multipart/form-data">
		  <?php
		    $a=$_GET['ed'];
		   
        $sql2="select * from category where categoryID='$a';";
        $res2=mysqli_query($connect,$sql2) or die ("error in mysql :".mysqli_error());
      	$row2=mysqli_fetch_array($res2);   
       ?>
      
       <table>
              <tr>
                  <td> Category Name: </td>
                  <td> <input type="text" name="categoryname" value="<?php echo $row2['categoryName']?>"/></td>
              </tr>
              <tr>
                 <td>Category Description: </td>
                 <td> <textarea cols="20px" rows="10px" name="categorydesc"><?php echo $row2['categoryDesc']?></textarea></td>
              </tr>
	             <tr>
                <td> Category Image: </br><img src="<?php echo "../".$row2['categoryImagePath']  ?> " style="height:120px; width:120px;"></td>
                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
               </tr>
            
                <tr style="visibility:hidden">
                  <td> Heading Title: </td>
                  <td> <input style="visibility:hidden" type="text" name="hid" value="<?php echo $row2['categoryID']?>"/></td>
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
//}
?>