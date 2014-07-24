<?php
include("connect.php");

	/*if(!isset($_SESSION['Login_Name'])){
		header("Location:index.php");
		exit();
	}

else{ */
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Product</title>
<link href="css/style.css" rel="stylesheet" type="text/css" />
<link href="css/menu.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="wrapper">
<div style="text-align:right;"><a href="logout.php" style="font-size:20px; text-decoration:none;" > Logout </a></div>
<div class="header"><a href="#" style="text-decoration:none; color:#333;">Select Product</a></div>
<div class="header2">
      <?php
      include('class/menu.php');
     ?>
  </div>
		<div class="form_wrapper">


 <div class="form2">
  <font style="font-size:24px; padding-bottom:0px;">Type Product name to get the Hints</font><br/><br/>
   

<script>    //displaying suggestions of m_id
    function showHint(str)
    {
    if (str.length==0)
      { 
      document.getElementById("txtHint1").innerHTML="";
      return;
      }
    var xmlhttp=new XMLHttpRequest();
    xmlhttp.onreadystatechange=function()
      {
      if (xmlhttp.readyState==4 && xmlhttp.status==200)
      {
      document.getElementById("txtHint1").innerHTML=xmlhttp.responseText;
      }
      }
    xmlhttp.open("GET","gethint.php?q="+str,true); //go to gethint.php for fetching hint for m_id
    xmlhttp.send();
    }
</script>



   <div style="border-style:outset; padding:10px 0px 10px 0px; font-family:Arial, Helvetica, sans-serif; font-size:20px;" >
  <form method="post" action="viewmovie.php">   
          
            
            <table>
            <tr>
              <td>
                Product Name:
              </td>
              <td>
              <input style="color:red;"  type="text" name="pname" onKeyUp="showHint(this.value)"/> 
               <span id="txtHint1" style="color:red;"><br></span>
              
        
              </td>
            </tr>
            <tr>
            <td colspan="2">
            <input type="submit" name="submit" value="Search"/></td>
            </tr>
              
            <br/>
           
            
            
        </form>
    </div>
  
    </div>
  
		</div>
</div>
</body>
</html>
<?php
//}
?>