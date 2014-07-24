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
				<h3 style="margin-top:-2px;">Product Name</h3>
					<div class="row">
						<div class="col-md-6">
							<img src="img/1.jpg" alt="" class="pro-details img-thumbnail" style="margin-bottom:8px;" rel="zoom">
						</div>
						<div class="col-md-6">
							<h4 style="color:#005E40; margin-top:-3px;">Product Name Here</h4>
							<h4 style="color:#BC0000">Rs 1 Million</h4>
							
							<h4>Overview</h4>
							<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
							tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
							quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
							consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
							cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
							proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>						

							<table class="table table-bordered table-hover">
								<tr>
									<td><strong>Category</strong></td>
									<td>Category Name</td>								
								</tr>
								<tr>
									<td><strong>Sub - Category</strong></td>
									<td>Sub-category Name</td>
								</tr>
								<tr>
									<td><strong>Brand</strong></td>
									<td>Brand Name</td>
								</tr>
							</table>
						</div>
					</div>
					<hr>					
						<h4>Related Products</h4>
						<div class="row">
							<div class="col-md-3">
								<a href=""><img src="img/1.jpg" alt="" class="img-thumbnail"></a>
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