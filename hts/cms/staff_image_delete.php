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
<title>Staff</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>



              
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Delete Staff Image</a></div>
<div class="header2">
    <?php
 include('class/menu.php');
 ?>
</div>

    <div class="form_wrapper">

    <div class="form1 style="padding-left:-20px">
    <?php
$imgName=array();
$imgPath=array();
$imageID=array();
                $query = "select * from staffimage;";
                $result = mysql_query($query);
        while ($row=mysql_fetch_array($result)){
            array_push($imgName, $row['imageName']);
            array_push($imgPath, $row['imagePath']);
            array_push($imageID, $row['imageID']);
            }
              ?>
        <table>
        <?php
            for($i=0;$i<sizeof($imgName);$i=$i+3){
             // echo $imgName[$i];
                ?>
                
<?php
                if (isset($imgName[$i])){

     ?>
     <tr>
    <td >
            <div><img src="<?php echo "../../hts/".$imgPath[$i]?>" height="200px" width ="200px"></div>
            <div style="width:290px;"><?php echo $imgName[$i]?></div>
            <a style="text-decoration:none;" href="staff_delete.php?id=<?php echo $imageID[$i]?>">Delete</a> 
            <div style="visibility:hidden"><?php echo $imageID[$i]?></div>
            </td>
     <?php           
               }
                if (isset($imgName[$i+1])){

     ?>
     <td >
            <div><img src="<?php echo "../../hts/".$imgPath[$i+1]?>" height="200px" width ="200px"></div>
            <div style="width:290px;"><?php echo $imgName[$i+1]?></div>
            <a style="text-decoration:none;" href="staff_delete.php?id=<?php echo $imageID[$i+1]?>">Delete</a> 
            <div style="visibility:hidden"><?php echo $imageID[$i+1]?></div>
            </td>
     <?php           
               }
                if (isset($imgName[$i+2])){
     ?>
     <td >
            <div><img src="<?php echo "../../hts/".$imgPath[$i+2]?>" height="200px" width ="200px"></div>
            <div style="width:290px;"><?php echo $imgName[$i+2]?></div>
            <a style="text-decoration:none;" href="staff_delete.php?id=<?php echo $imageID[$i+2]?>">Delete</a> 
            <div style="visibility:hidden"><?php echo $imageID[$i+2]?></div>
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
}
?>