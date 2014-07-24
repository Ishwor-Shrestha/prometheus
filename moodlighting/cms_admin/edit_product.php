<?php
include("connect.php");
include("class/productpage.class.php");

	/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}


else{ */
  if(isset($_POST['delete'])){
    $Productpage->deleteProduct();
  }
  if(isset($_POST['edit'])){
    $Productpage->editProduct();
  }
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
<script src="ckeditor/ckeditor.js"> </script>

</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Product Information</a></div>
<div class="header2">
      <?php
      include('class/menu.php');
     ?>
  </div>
		<div class="form_wrapper">


 <div class="form2">
 <form method="post" action="" enctype="multipart/form-data">
                
      <?php
      $q2 =$_GET['ed'];
      $val=array();
      $val=explode("[",$q2);
      $nm= $val[0];
      $val2=array();
      $val2=explode("-",$nm);
      $idp=$val2[1];
      //echo $idp;

?>
      
      <?php
           $query2="select * from product where productID='$idp'";  
      $result2 = mysqli_query($connect,$query2);
        $row1 = mysqli_num_rows($result2 );

        if($row1>0){
          while($row2=mysqli_fetch_array($result2)){
          ?>  
          <table border="2px solid">
            <tr>
            <?php
            $b1=$row2['brandID'];
           
            $s1="Select * from brand where brandID='$b1';";
            $r1=mysqli_query($connect,$s1) or die("Mysqli Error: ". mysqli_error($connect));
            while ($qr=mysqli_fetch_array($r1)){
              $bnm=$qr['brandName'];
            }

            ?>
            <td>Brand Name : </td>
            <td>  <?php echo $bnm ?>
            </td>
            </tr>

            <tr>
            <?php
            
            $sb1=$row2['subcategoryID'];
            $s2="Select * from subcategory where subcategoryID='$sb1';";
            $r2=mysqli_query($connect,$s2) or die("Mysqli Error: ". mysqli_error($connect));
            while ($qr=mysqli_fetch_array($r2)){
              $snm=$qr['subcategoryName'];
            }

            ?>
            <td>Sub Category Name : </td>
            <td>  <?php echo $snm ?>
            </td>
            </tr>
          </table>
             
                      <table>      <tr>
                                <td> Product Name: </td>
                                <td> <input type="text" name="nm" value="<?php echo $row2['productName']?>" placeholder="Update Name"></td>
                            </tr>
                            <tr>
                                <td> Product Price: </td>
                                <td> <input type="text" name="price" value="<?php echo $row2['productPrice']?>" onkeypress="return isNumberKey(event)"></td>
                                  <script>
                                    function isNumberKey(evt){
                                      var charCode = (evt.which) ? evt.which : event.keyCode
                                      if (charCode > 31 && (charCode != 46 &&(charCode < 48 || charCode > 57)))
                                        return false;
                                      return true;
                                    }    
                                  </script>
                            </tr>
                              
                             <tr>
                                <td> Product Brand: </td>
                                <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                  $sqlbrand="select * from brand;";
                                  $resultbrand=mysqli_query($connect,$sqlbrand) or die("Error in Mysql :".mysql_error());
                                  if ($rowCount=mysqli_num_rows($resultbrand)>0){
                                    echo "<select name='brand' style='height:30px; font-size:16px;'>\n";
                                    echo "<option >-- Select --</option>\n";
                                    while ( $rowbrand=mysqli_fetch_array($resultbrand)){
                                      // Add a new option to the combo-box
                                     echo "<option value='$rowbrand[brandID]'>$rowbrand[brandName]</option>\n";
                                      // End the combo-box
                                     
                                  }
                                   echo "</select>\n";
                                  }
                                ?>
                                </td>
                            </tr>
                             <tr>
                                <td> Product Sub Category: </td>
                                 <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                <?php
                                  $sqlbrand="select * from subcategory;";
                                  $resultbrand=mysqli_query($connect,$sqlbrand) or die("Error in Mysql :".mysql_error());
                                  if ($rowCount=mysqli_num_rows($resultbrand)>0){
                                    echo "<select name='sub' style='height:30px; font-size:16px;'>\n";
                                    echo "<option >-- Select --</option>\n";
                                    while ( $rowbrand=mysqli_fetch_array($resultbrand)){
                                      // Add a new option to the combo-box
                                     echo "<option value='$rowbrand[subcategoryID]'>$rowbrand[subcategoryName]</option>\n";
                                      // End the combo-box
                                     
                                  }
                                   echo "</select>\n";
                                  }
                                ?>
                                </td>
                            </tr>
                           <tr>
                              <td> Product Entry Date: </td>
                              <td ><input type="date" name="date" value="<?php echo $row2['productEntryDate']?>" >
                              </td>
                            </tr>
                            <tr>
                              <td> Product Status: </td>
                              <td >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                      <select name="status" id="status">
                                       <option value="-- Select --">-- Select --</option>
                                        <option value="Defult">Defult</option>
                                        <option value="New">New</option>
                                        <option value="Popular">Popular</option>
                                        <option value="New_Popular">New & Popular</option>
                                      </select>         
                                    </td>
                              
                            </tr>
                            <tr>
                              <td> Product Description:</td>
                              <td><textarea class="ckeditor" name="desc"> <?php echo $row2['productDesc'];?></textarea></td>
                              
                            </tr> 
                            <tr>
                              <td>Product Image: <img src="<?php echo "../".$row2['productImagePath'] ?>" height="120" width="120"> </td>
                              <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
                            </tr>
                            <tr style="visibility:hidden">
                              <td> Product ID: </td>
                              <td ><input type="text" name="pid" value="<?php echo $row2['productID']?>" >
                             
                            </tr> 
                            <tr style="visibility:hidden">
                              <td> Brand ID: </td>
                              <td ><input type="text" name="bid" value="<?php echo $row2['brandID']?>" >
                              </td>
                            </tr>  
                            <tr style="visibility:hidden">
                              <td> Sub Category ID: </td>
                              <td ><input type="text" name="scid" value="<?php echo $row2['subcategoryID']?>" >
                              </td>
                            </tr> 
                            <tr style="visibility:hidden">
                              <td> Image Path: </td>
                              <td ><input type="text" name="imagepath" value="<?php echo $row2['productImagePath']?>" >
                              </td>
                            </tr>    
                            </table>
          

      <br> 
            
               <?php
              }     
          }
          //}
          
              ?>
               
              <div align="center">
              <input type="submit" name="delete" value="Delete" />
            <input type="submit" name="edit" value="Edit"/>
            </div>
              </form>
  
    </div>
  
		</div>
</div>
</body>
</html>
<?php
//}
?>