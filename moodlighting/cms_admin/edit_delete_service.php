<?php
    include("connect.php");

        /* if(!isset($_SESSION['Login_Name'])){
            header("Location:index.php");
            exit();
        }

    else{ */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
    <html xmlns="http://www.w3.org/1999/xhtml">
        <head>
            <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
            <title> Service</title>
            <link href="css/style.css" rel="stylesheet" type="text/css" />
            <link href="css/menu.css" rel="stylesheet" type="text/css" />
        </head>

        <body>
            <div id="wrapper">
                <div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
                <div class="header"><a href="#" style="text-decoration:none; color:#333;">Edit/Delete Service</a></div>
                <div class="header2">
                    <?php
                        include('class/menu.php');
                    ?>
                </div>
                <div class="form_wrapper">
                    <h1>Service</h1>
                    <div class="form2">
                    <font style="font-size:24px; padding-bottom:0px;">List of Services</font><br/><br/>
                    <?php
                        $sql= "select * from service;";
                        $res=mysqli_query($connect,$sql) or die ("error in mysql :".mysqli_error());
                        while ($row=mysqli_fetch_array($res))
                            {
                    ?>
                                <div style="border-style:outset; padding:10px 0px 10px 0px; font-family:Arial, Helvetica, sans-serif; font-size:20px;" >
                                Service Title: <?php echo $row['serviceName'] ?>&nbsp;&nbsp;&nbsp;<a style="text-decoration:none;" href="edit_service.php?ed=<?php echo $row['serviceID']  ?>">EDIT </a>    | &nbsp;&nbsp;&nbsp;<a style="text-decoration:none;" href="delete_service.php?dele=<?php echo $row['serviceID']  ?>">DELETE</a>
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
//}
?>