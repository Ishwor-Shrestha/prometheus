<?php
    include("connect.php");

    include("class/projectpage.class.php");

    /*  if(!isset($_SESSION['Login_Name'])){
            header("Location:index.php");
            exit();
        }

    else{ */
    if(isset($_POST['update'])){
        $Projectpage -> editProject();
    }
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title>Project</title>
            <link href="css/style.css" rel="stylesheet" type="text/css" />
            <link href="css/menu.css" rel="stylesheet" type="text/css" />
            <script src="ckeditor/ckeditor.js"> </script>
        </head>

        <body>
            <div id="wrapper">
                <div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
                <div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit Project</a></div>
                <div class="header2">
                    <?php
                    include('class/menu.php');
                    ?>
                </div>      
                <div class="form2">      
                    <form method="post" action="" enctype="multipart/form-data">
                        <?php
                            $a=$_GET['ed'];
                          //echo $a;
                            $sql2="select * from project where projectID='$a';";
                            $res2=mysqli_query($connect, $sql2) or die ("error in mysql :".mysqli_error());
                            $row2=mysqli_fetch_array($res2);
                        ?>
                        <table>
                            <tr>
                                <td> Project Name: </td>
                                <td> <input type="text" name="nm" value="<?php echo $row2['projectName']?>" placeholder="Update Name"></td>
                            </tr>
                            <tr>
                                <td> Description: </td>
                                <td> <textarea  class="ckeditor"  name="desc"><?php echo $row2['projectDesc']?></textarea></td>
                            </tr>
                            <tr>
                                <td>Project Image:<br> <img style="width:130px; height:100px;" src="<?php echo "../".$row2['projectImagePath'] ?>"/></td>
                                <td> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="newsimg" /></td>
                            </tr>
                            <tr style="visibility:hidden">
                                <td> Project ID: </td>
                                <td> <input type="text" name="id" value="<?php echo $row2['projectID']?>" style="visibility:hidden;"></td>
                            </tr>
                        </table>     
                        <input type="submit" name="update" value="Update Changes" />
                    </form>
                </div>
            </div>
       </body>
    </html>
<?php
//}
?>