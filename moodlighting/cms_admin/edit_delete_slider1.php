<?php
include("connect.php");
/*	session_start();
if(!session_is_registered(Login_Name)){

		header("Location:index.php");
		exit();
	}

else{ */
    /*
if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{*/
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>BigSlider</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>



              
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Delete BigSlider Image</a></div>
<div class="header2">
    <?php
 include('class/menu.php');
 ?>
</div>

		<div class="form_wrapper">

		

    <div class="form1 style="margin-left:-90px">
    <?php
        $imgPath=array();
        $imageID=array();
        $query = "select * from sliderimage;";
        $result = mysqli_query($connect, $query);
        while ($row=mysqli_fetch_array($result)){
            array_push($imgPath, $row['sliderimageImagePath']);
            array_push($imageID, $row['sliderimageID']);
            }
	?>
        <table >
        <?php
            for($i=0;$i<sizeof($imageID);$i=$i+3){
                ?>
                
<?php
                if (isset($imageID[$i])){

     ?>
     <tr>
     <td >
            <div style="margin-left:-60; margin-right:50"><img src="<?php echo "../".$imgPath[$i]?>" height="170px" width ="170px" ></div>
          <a style="text-decoration:none;" href="delete_sliderimage.php?id=<?php echo $imageID[$i]?>">Delete</a> 
          <div style="visibility:hidden"><?php echo $imageID[$i]?></div>
            </td>
     <?php           
               }
                if (isset($imageID[$i+1])){

     ?>
     <td >
            <div style="margin-left:-60;"><img src="<?php echo "../".$imgPath[$i+1]?>" height="170px" width ="170px" ></div>
          <a style="text-decoration:none;" href="delete_sliderimage.php?id=<?php echo $imageID[$i+1]?>">Delete</a> 
          <div style="visibility:hidden"><?php echo $imageID[$i]?></div>
            </td>
     <?php           
               }
                if (isset($imageID[$i+2])){
     ?>
   <td >
            <div style="margin-left:-60;"><img src="<?php echo "../".$imgPath[$i+2]?>" height="170px" width ="170px" ></div>
          <a style="text-decoration:none;" href="delete_sliderimage.php?id=<?php echo $imageID[$i+2]?>">Delete</a> 
          <div style="visibility:hidden"><?php echo $imageID[$i]?></div>
            </td>
            </tr>
     <?php           
               }    
            }
        ?>
           
         </table>
		 
		 
    </div>
		</div>
</div>
</body>
</html>
<?php
//}
?>