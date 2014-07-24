<?php
include('cms_admin/connect1.php');
?>
<!-- Bootstrap core CSS and JS -->
    <link href="css/bootstrap.css" rel="stylesheet">    
    
<!-- Add custom CSS here and JS -->
	<link href="css/custom-css.css" rel="stylesheet">
    <link href="css/small-business.css" rel="stylesheet">
    <link href="css/menu.css" rel="stylesheet">    
    <link href="css/flexslider.css" rel="stylesheet" type="text/css" />
    <script src="js/ajax.googleapis"></script>
    <script src="js/jquery.flexslider.js" type="text/javascript"></script>
    <script src="js/modernizr.js"></script>    
    <link href="css/demo.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="js/modernizr.custom.17475.js" type="text/javascript"></script>
    <script src="js/bootstrap.js" type="text/javascript"></script>

<!-- Main Tab CSS and JS starts here-->
	<link type="text/css" rel="stylesheet" href="css/responsive-tabs.css" />
    <link type="text/css" rel="stylesheet" href="css/style.css" />    
<!-- Main Tab CSS and JS ends here-->

<!-- Smooth Zoom CSS and JS starts here-->
	<link rel="stylesheet" href="css/smoothzoom.css">

<!-- Smooth Zoom CSS and JS ends here-->

<!-- color box css and jquery -->
	<link rel="stylesheet" href="css/colorbox.css" />
	<script src="js/jquery.colorbox.js"></script>
	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
	<!-- color box css and jquery end -->

    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="row">
                <div class="col-md-3">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/logo2.png" alt="mood logo" width="250px;" style="margin-top:-16px;">
                        </a>
            		</div>
                </div>
                <div class="col-md-2">
                    <div class="input-group merged" style="margin-top:24px;">
                        <input type="text" class="form-control" placeholder="Search" />
                            <span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>
                    </div>
                </div>
                <div class="col-md-7">
                <!-- Collect the nav links, forms, and other content for toggling -->
            		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                		<ul class="nav navbar-nav navbar-right">
                    		<li><a href="index.php">Home</a></li>
		                    <li class="dropdown">
		                        <a id="drop1" class="dropdown-toggle" data-toggle="dropdown" role="button">Products<span class="caret"></span></a>
		                            <ul class="dropdown-menu" aria-labelledby="drop1" role="menu" style="left:0px;">
		                            <?php
			                            $sql1="select * from category;";
			                            $result1=mysqli_query($connect, $sql1) or die("Error in Mysql :".mysqli_error());
			                            while ($row1=mysqli_fetch_array($result1)){
		                            	?>

		                                <li role="presentation">
		                                    <a href="<?php echo "categories.php?id=".$row1['categoryID'];?>" tabindex="-1" role="menuitem"><?php echo $row1['categoryName'];?></a>
		                                </li>
		                            	<?php

		                            }

		                            ?>
		                                
                            		</ul>
		                    </li>
		                    <li>
		                        <a id="drop2" class="dropdown-toggle" data-toggle="dropdown" role="button">Services<span class="caret"></span></a>
		                            <ul class="dropdown-menu" aria-labelledby="drop2" role="menu" style="left:0px;">
		                             <?php
				                            $sql2="select * from service;";
				                            $result2=mysqli_query($connect, $sql2) or die("Error in Mysql :".mysqli_error());
				                            while ($row2=mysqli_fetch_array($result2)){
		                            	?>
			                                <li role="presentation">
			                                    <a href="<?php echo "service.php?id=".$row2['serviceID']; ?>" tabindex="-1" role="menuitem"><?php echo $row2['serviceName']; ?></a>
			                                </li>
		                                <?php
			                            }
			                            ?>
		                                
		                            </ul>
		                    </li>
                    		<li><a href="#">Projects</a></li>
		                    <li>
		                        <a id="drop3" class="dropdown-toggle" data-toggle="dropdown" role="button">Brands<span class="caret"></span></a>
		                            <ul class="dropdown-menu" aria-labelledby="drop3" role="menu" style="left:0px;">
		                                <?php
		                           			 $sql3="select * from brand;";
		                           			 $result3=mysqli_query($connect, $sql3) or die("Error in Mysql :".mysqli_error());
		                           			 while ($row3=mysqli_fetch_array($result3))
		                           			 {
		                            	?>
			                                <li role="presentation">
			                                    <a href="<?php echo "brands.php?id=".$row3['brandID']; ?>" tabindex="-1" role="menuitem"><?php echo $row3['brandName']; ?></a>
			                                </li>
		                                <?php
		                                }		                            
		                            	?>
							</ul>
		                    </li>
		                    <li><a href="#">About Us</a></li>
                    		<li><a href="contact_us.php">Contact</a></li>
                    
                		</ul>
            		</div> 
                </div>
            </div>        
            <!-- /.navbar-collapse -->
        </div>
    </nav>