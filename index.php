<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mood Lighting</title>
</head>
<body>
	<?php
		include('include/header.php');
	?>
	<div class="custom-container">
		<div class="row">
			<div class="col-lg-8">
				<div id="slider">
					<section class="slider">
            			<div class="flexslider">
			            	<ul class="slides">
				                <li><img src="img/1.jpg" /></li>
				                <li><img src="img/2.jpg" /></li>
				                <li><img src="img/3.jpg" /></li>
				                <li><img src="img/4.jpg" /></li>
				                <li><img src="img/5.jpg" /></li>
			            	</ul>
            			</div>
          			</section>
          			<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
	               <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>
                    <!-- FlexSlider -->
                    <script defer src="js/jquery.flexslider.js"></script>
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
	                <script type="text/javascript" src="js/shCore.js"></script>
	                <script type="text/javascript" src="js/shBrushXml.js"></script>
	                <script type="text/javascript" src="js/shBrushJScript.js"></script>
	                <!-- Optional FlexSlider Additions -->
	                <script src="js/jquery.easing.js"></script>
	                <script src="js/jquery.mousewheel.js"></script>
				</div><!-- Slider ko div end -->
			</div>
			<div class="col-lg-4" style="margin-top:-2%">
				<h1>Mood Lighting</h1>
                <p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <a class="btn btn-primary btn-lg" href="#">Contact Info</a>
			</div>
		</div>
	<!------------------------ Main CONTENT starts here ------------------------>
		<?php
			include('include/tabs.php');
			
		?>		

	<!------------------------ Main CONTENT ends here  ------------------------>
		<div class="row">
			<div class="col-md-4">
				<h3>Message From Chairman</h3>
				<p align="justify">
					Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</p>
			</div>
			<div class="col-md-8">
				<h3 align="center">Our Brands </h3>				
					<?php
						include('include/our_brands.php');
					?>						
			</div>
		</div>
    </div>
</body>
<?php
	include('include/footer.php');
?>
</html>