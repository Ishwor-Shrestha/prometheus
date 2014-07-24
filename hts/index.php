	<?php
		include("cms/connect.php");
	?>
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script> -->


 

	<!-- Modernizr -->
	  <script src="jquery/modernizr.js"></script>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Hi-Tech Skills | Home</title>
		<!-- -----------Tab------------------------- -->

		<script src="jquery/tab/jquery-1.7.1.min.js" type="text/javascript"></script> 
	  	<script src="jquery/tab/jquery.hashchange.min.js" type="text/javascript"></script>
	  	<script src="jquery/tab/jquery.easytabs.min.js" type="text/javascript"></script>
		<link rel="stylesheet" href="css/tabs.css" type="text/css" media="screen" />
		<script type="text/javascript">
		    $(document).ready( function() {
		      $('#tab-container').easytabs();
		    });
  		</script>
  		<!-- -----------End Tab------------------------- -->
		<?php
			include("include/header.php")
		?>
		
		
		

		
	</head>
	<body>
	
	<div class="custom-container">	
		<div class="row">
			<div class="col-lg-8">
				
					<section class="slider">
			        <div class="flexslider">
			          <ul class="slides">
			            <?php
			          	$query = "select * from sliderimage;";
						$result = mysql_query($query);
				while ($row=mysql_fetch_array($result)){
					//echo $row['imagePath']
					?>
						<li>
			             <img src="<?php echo $row['imagePath']?>" />

			            </li>
			            <?php
			        }
			          ?>
			           </ul>
			        </div>
			      </section>

			     		<!-- jQuery -->
			  			 <!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> -->
			  			<script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
						
			  			<!-- FlexSlider -->
			  			<script defer src="jquery/jquery.flexslider.js"></script>

			  			<script type="text/javascript">
			    			$(function(){
			      				SyntaxHighlighter.all();
			    			});
			    			$(window).load(function(){
			      			$('.flexslider').flexslider({
			        			animation: "slide",
			       	 			start: function(slider){
			          		$('body').removeClass('loading');
			        		}
			      			});
			    			});
			  				</script>


			  			<!-- Syntax Highlighter -->
			  			<script type="text/javascript" src="jquery/shCore.js"></script>
			  			<script type="text/javascript" src="jquery/shBrushXml.js"></script>
			  			<script type="text/javascript" src="jquery/shBrushJScript.js"></script>

			  			<!-- Optional FlexSlider Additions -->
			  			<script src="jquery/jquery.easing.js"></script>
			  			<script src="jquery/jquery.mousewheel.js"></script>
				</div>
			
			<div class="col-lg-4">
				<div class="well">
						<h1 style="color:#001945;">Welcome!</h1>
							<p align="justify">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque 
							placerat a urna eget dictum. Phasellus nulla ipsum, pretium sed diam eget, 
							varius semper neque. Quisque blandit sodales laoreet. Nulla et leo sed arcu
						feugiat dictum. Phasellus vel diam id quam dapibus porttitor in vitae justo</p>

						<a class="btn btn-primary btn-md" href="about_us.php">More about Hi Tech</a>
				</div>
			</div>
		</div>

		
			<div class="well">
			<script type="text/javascript">
					$(#tab-container ul li)
			</script>
				<div id="tab-container" class='tab-container'>
  					<ul class='etabs'>
					   <li class="tab color1"><a href="#tabs1">Our Valuable Clients</a></li>
					   
					   <li class="tab color2"><a href="#tabs2">News & Events</a></li>
  					</ul>
  					<div class='panel-container'>
    					<div id="tabs1">
						<div class="row" style="text-align:center">
						
						<?php
						$querycus = "select * from customer;";
						$resultcus = mysql_query($querycus);
						while ($rowcus=mysql_fetch_array($resultcus)){
				?>
						
      							<div class="col-md-2">
      								<p><?php echo $rowcus['customerName'] ?></p>
      								<a href="<?php echo $rowcus['customerLink'] ?>"><img src="<?php echo $rowcus['customerImagePath'] ?>" alt="<?php echo $rowcus['customerName'] ?>" class="img-thumbnail"></a>
      							</div>
								<?php
								}
								?>
      							

      						</div>
    					</div>
					    
					    <div id="tabs2">
					      <div class="media">
						  <?php
						  $querynews = "select * from news;";
						$resultnews = mysql_query($querynews);
						$rowcountnews = mysql_num_rows($resultnews );
						if ($rowcountnews > 0) {
						while ($rownews=mysql_fetch_array($resultnews)){
						?>
					      	<h3><?php echo $rownews['newsTitle'] ?></h3>
					      	<img src="<?php echo $rownews['newsImagePath'] ?>" alt="<?php echo $rownews['newsImageName'] ?>" class="pull-left";>
					      		<div class="media-body">
					      			<p>
					      				<?php echo $rownews['newsDescription'] ?>
					      			</p>
					      		</div>
								<?php
								}
								}
								else
								{
								?>
								<div style="text-align:center">
								<h3>No Latest News</h3>
					      	<img src="" alt="" class="pull-left";>
					      		<div class="media-body">
					      			<p>
					      				Come back later.
					      			</p>
					      			<img src="images/nonews.jpg" alt="no news" class="img-rounded" style="width:30%;" />
					      		</div>
								</div>
								<?php
								}
								?>
					      	
					      </div>
					    </div>
  					</div>
				</div>
				
				<div class="row">
				<?php
				$query = "select * from cmodule;";
				$result = mysql_query($query);
				while ($row=mysql_fetch_array($result)){
				?>
				<div class="col-md-4">
					<h3 align="center"><?php echo $row['ModuleTitle'] ?></h3>
					<div class="image-wrapper"><img src="<?php echo $row['Image']?>" height="50px;"></div>
					<p align="justify"><?php echo $row['ModuleDecs'] ?></p>
					<?php
						$link=strtolower($row ['ModuleTitle']);
						$reallink=str_replace(' ', '_', $link);
					?>
					<p class="label label-danger" style="float:right; font-size:14px;"><a href="<?php echo $reallink ?>.php" style="color:#fff; text-decoration:none;">More about <?php echo $row['ModuleTitle'] ?></a></p>

				</div>
				<?php
}
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

	