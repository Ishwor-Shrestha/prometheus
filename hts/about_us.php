<?php
	include("cms/connect.php");
?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Modernizr -->
	  <script src="jquery/modernizr.js"></script>
	  
	  <script src="js/jquery-1.4.4.min.js" type="text/javascript"></script>

    <script src="js/jsCarousel-2.0.0.js" type="text/javascript"></script>

    <link href="css/jsCarousel-2.0.0.css" rel="stylesheet" type="text/css" />

    <script type="text/javascript">
        $(document).ready(function() {

           
            $('#carouselh').jsCarousel({ onthumbnailclick: function(src) { alert(src); }, autoscroll: false, circular: true, masked: false, itemstodisplay: 5, orientation: 'h' });
           

        });       
        
    </script>


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
					<div id="aboutthecomp">
						<ul class="media-list">
							<li class="media">
								<h2>About The Company</h2>
								<div class="media-body">
									<p align="justify">Lorem .</p>
								</div>								
							</li> 
							<li class="media">
								<h4>CEO</h4>
								<img src="images/magic.png" width="48px;" class="img-circle pull-left" style="width:10%; float:left; margin-right:10px;">
								<div class="media-body">
									<p>Lorem ipsum </p>
								</div>
							</li>
						</ul>	
							
						<div id="staffs">
							<h3>Staffs</h3>
				
                        	<div id="carouselh">
                        		<?php
	          						$query = "select * from staffimage;";
									$result = mysql_query($query);
									while ($row=mysql_fetch_array($result)){
									//echo $row['imagePath']
								?>
			 					<div>
	                                <img alt="<?php echo $row['imageName'] ?>" src="<?php echo $row['imagePath']?>"  /><br />
	                                <span class="thumb-text"><?php echo $row['imageName']?></span>
	                            </div>
	            				<?php
	        						}
	          					?>
                               
                        	</div>
                 
						</div>
					</div>
				</div>
				<div class="col-md-2">
					<?php 
						include("include/side_menu.php");
					?>
				</div>
			</div>
	</div>
</div>
		
</body>

	<?php
		include("include/footer.php")
	?>
</html>