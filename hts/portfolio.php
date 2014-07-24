	<?php
		//include("include/db_connect.php");
		include("cms/connect.php");
	?>
	
<link href="css/template_style.css" rel="stylesheet" type="text/css" />


<link rel="stylesheet" href="css/lightbox.css" type="text/css" media="screen" />
	
<script src="js/prototype.js" type="text/javascript"></script>
<script src="js/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
<script src="js/lightbox.js" type="text/javascript"></script>
	<!-- Modernizr -->
	  <script src="jquery/modernizr.js"></script>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Hi-Tech Skills | Home</title>
		<?php
			include("include/header.php")
		?>
		
	</head>
	<body>
		
	<div class="custom-container">
	<div class="well">
	<div class="row">
		<div class="col-md-10">
		<h1>Portfolio</h1>
			<div id="template_main">

	<?php
		$imgName=array();
		$imgDesc=array();
		$imgPath=array();
		$imgThumb=array();
		$imageID=array();
		 $query = "select * from galleryimage;";
                $result = mysql_query($query);
        while ($row=mysql_fetch_array($result)){
            array_push($imgName, $row['imageName']);
			array_push($imgDesc, $row['imageDescription']);
            array_push($imgPath, $row['imagePath']);
			array_push($imgThumb, $row['imageThumbnail']);
            array_push($imageID, $row['imageID']);
            }
			for($i=0;$i<sizeof($imgName);$i=$i+3){
				if (isset($imgName[$i])){
			              ?>
    	
			<div class="col one_third gallery_box">
                <a href="<?php echo $imgPath[$i] ?>" rel="lightbox[portfolio]"><img src="<?php echo $imgThumb[$i] ?>" title="click here" alt="<?php echo $imgName[$i] ?>" class="image_frame"/></a>
                <h5><?php echo $imgDesc[$i] ?> </h5>
                <p><?php echo $imgName[$i] ?></p>
			</div>
			<?php
			}
			 if (isset($imgName[$i+1])){
			?>
			
            <div class="col one_third gallery_box">
                <a href="<?php echo $imgPath[$i+1] ?>" rel="lightbox[portfolio]"><img src="<?php echo $imgThumb[$i+1] ?>" title="click here" alt="<?php echo $imgName[$i+1] ?>" class="image_frame"/></a>
                <h5><?php echo $imgDesc[$i+1] ?></h5>
                <p><?php echo $imgName[$i+1] ?></p>
			</div>
			
			<?php
			}
			 if (isset($imgName[$i+2])){
			?>
			
            <div class="col one_third gallery_box no_margin_right">
                <a href="<?php echo $imgPath[$i+2] ?>" rel="lightbox[portfolio]"><img src="<?php echo $imgThumb[$i+2] ?>" title="click here" alt="<?php echo $imgName[$i+2] ?>" class="image_frame"/></a>
                <h5><?php echo $imgDesc[$i+2] ?></h5>
                <p><?php echo $imgName[$i+2] ?></p>
			</div>
			<?php
			}
			}
			?>
                       
            <div class="cleaner"></div>
          
    
    <div class="cleaner"></div>
    
    </div>
		</div>
		<div class="col-md-2">
			<?php 
				include("include/side_menu.php");
			?>
		</div>
	</div>
     <!-- END of main -->
    </div>
    
</div> <!-- END of wrapper -->     
        
		<!--foorer start-->
           
	
			<div class="cleaner"></div>
        </div>
		
        <div class="cleaner"></div>
    </div> <!-- END of footer -->
</div> <!-- END of footer wrapper -->
	</body>

	<?php
		include("include/footer.php")
	?>
	</html>