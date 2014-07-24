<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>CSN-WIKI</title>
	 <?php

ini_set( "display_errors", 0); ?>
    <?php
		include("includes/head.php");
	?>
	<style type="text/css">
		body{
			width:100%;
		}
		#bahdo{
			margin: 0 auto;
			padding:0;
		}
		#clear{
			clear: both;
		}
		
        ul{
             list-style-type: none;
        }	
    
#toggleText{
    display:none;
}

ul.list{
    display:none;
}




   #right{
	   float:right;
	   padding:5px 0 5px 0;
   }
   
   .img-container{
    border: 1px solid silver;   
    padding: 8px;
    background-color:#FAFAFA;
    margin-right: 6px;
    margin-left: 10px;
     }
     
	
	<!--Banner-->
	#banner{
		height:450px;
		width:1000px;
		marin:0 auto;
		left:100px
	}
	
	#middle{
		width:1000px;
		height:auto;
		margin:auto;
		padding:0;
		margin-top:25px;
		background-color: #eee;
		-webkit-box-shadow: 0 0 5px #666;
		border-radius:10px;
		min-height: 600px;
		overflow: auto;
		margin-bottom:10px;
		}

    #list{
        border: 2px solid skyblue;
        float: left;
        width: 235px;
        font-size: 15px;
        border-radius:10px;
        padding: 3px;
        background-color:#F2F2F2;
        margin-right: 12px;
    }


        div.wiki-articles{
		width:965px;
		background-color:#FFFFFF;
		float:left;
        margin-top: 8px;	
        margin-left: 8px;		
		border-radius:10px;
        margin-bottom: 8px;
		
	}
        
    
	#category{
		width:520px;
		padding-left:30px;
		
	}
	
	#tabs{
		height:600px;
		height:400px;
		border-radius:10px;
		float:right;
	}
	#heading{
		margin:0;
		
		font-size:90px;
		font-family:Tahoma, Geneva, sans-serif;
		display:inline;
		color:#0d93bf;
	}
	h2{
		font-size:40px;
		font-family:Tahoma, Geneva, sans-serif;
		display:inline;
		color:#3297fd;
	}
	
	#sharing{
		margin:0 auto;
		padding:0;
		width:1000px;
		
	}
	#bhado{
		-webkit-box-shadow: 0 0 5px #666;
		margin:0 auto;
		padding:0;
	}
	
	/*box area*/
#social_box { float:right;display: inline;margin:0 auto; padding: 0;}
#social_box li { display: block; float:left; padding: 5px; }
#social_box li a { width: 24px; height:15px; margin-right: 5px; }
#social_box li a img{ height:60px; width:60px;}
/*end of box area*/

/*breadcrumbs starts here*/




</style>

    
	<!--Start jquery tabs-->
		
	<link rel="stylesheet" href="css/tabs.css">
	
    <script src='js/jquery.min.js'></script>
    <script src="js/organictabs.jquery.js"></script>
    <script>
        $(function() {
    
            $("#example-one").organicTabs();
            
            $("#example-two").organicTabs({
                "speed": 200
            });
			
    
        });
    </script>
	<!--End jquery tabs-->

 <!-- Start of Slider-->
   		<link rel="stylesheet" href="css/global.css">
	<link rel="stylesheet" href="css/sprite.css">
		
        <script src="http://gsgd.co.uk/sandbox/jquery/easing/jquery.easing.1.3.js"></script>
        <script src="js/slides.min.jquery.js"></script>
       	<script>
			$(function(){
				$('#slides').slides({
					preload: true,
					preloadImage: 'img/loading.gif',
					play: 5000,
					pause: 2500,
					hoverPause: true
				});
			});
		</script>
   	<!-- End of Slider-->
    
    <!-- Collapse-->
    <script language="javascript"> 
function toggle() {
	var ele = document.getElementById("toggleText");
	var text = document.getElementById("displayText");
	if(ele.style.display == "block") {
    		ele.style.display = "none";
		text.innerHTML = "Expand";
  	}
	else {
		ele.style.display = "block";
		text.innerHTML = "Collapse";
	}
} 
</script>
<!-- Collapse end-->


   
</head>

<body>
	
	<?php
		include("includes/login.php");
	?>
	
	<div id="topcontainer">
	
		<?php
			include("includes/header.php");

		
		?>	

	</div>
    <!--End of top Container-->
		
			
        	
	
	
    
     <!--Start of middle-->	 	
	  <div id="middle"> 
       <!--Start of content-->
           <div class="wiki-articles" style="padding: 8px;">
                <div style="padding: 8px;">
                <?php include ("articles.php"); ?>
                 </div>
           </div>
      </div>
      <!--ENd of middle-->	
			
			

	<!--Start Sharing-->
    
    	
    <!-- Stop Sharing-->
	
	




<!--Start of Footer element-->
	<?php
		include("includes/footer.php");
	?>
   <!--End of footer element-->  
</body>
</html>
