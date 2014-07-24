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
	<!------------------------ Main CONTENT starts here ------------------------>
	<div class="custom-container">
		<div class="row">
			<div class="col-lg-2" align="center">
				<?php
					include('include/sidebar.php');
				?>
			</div>
	
			<div class="col-lg-10">
				<ul class="media-list">
					<h3 style="margin-top:-3px;">Category Name</h3>
					<li class="media">
						<img src="images/thumbnails/thumb150.png" class="pull-left img-thumbnail" alt="cat-name">
						<div class="media-body">
							<p align="justify">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</li>
				</ul>
				<div class="custom-well">
				<h3>Brands</h3>
					<div class="row" align="center">
						<div class="col-md-3">

							<div class="cat-container" style="margin-bottom: 8px;">
								<a href="#"><img src="images/thumbnails/thumb125.png" class="img-thumbnail" style="margin-top:-60px;"></a>
								<h4>Brand 1</h4>
							</div>														
						</div>
						<div class="col-md-3">					
							<div class="cat-container" style="margin-bottom: 8px;">
								<a href="#"><img src="images/thumbnails/thumb125.png" class="img-thumbnail" style="margin-top:-60px;"></a>
								<h4>Brand 2</h4>
							</div>														
						</div>
						<div class="col-md-3">					
							<div class="cat-container" style="margin-bottom: 8px;">
								<a href="#"><img src="images/thumbnails/thumb125.png" class="img-thumbnail" style="margin-top:-60px;"></a>
								<h4>Brand 3</h4>
							</div>														
						</div>
						<div class="col-md-3">					
							<div class="cat-container" style="margin-bottom: 8px;">
								<a href="#"><img src="images/thumbnails/thumb125.png" class="img-thumbnail" style="margin-top:-60px;"></a>
								<h4>Brand 4</h4>
							</div>														
						</div>
						<div class="col-md-3">					
							<div class="cat-container" style="margin-bottom: 8px;">
								<a href="#"><img src="images/thumbnails/thumb125.png" class="img-thumbnail" style="margin-top:-60px;"></a>
								<h4>Brand 5</h4>
							</div>														
						</div>
					</div>
				</div>
			</div>
		</div>
	<!------------------------ Main CONTENT ends here  ------------------------>

    </div>
</body>
<?php
	include('include/footer.php');
?>
</html>