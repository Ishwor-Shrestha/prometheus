<?php
	include('cms_admin/connect1.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utfs-8">
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
				<h3 style="margin-top:-3px;">Our Products</h3>
				<div class="row" align="center">
				<?php
					$sql1="select * from product;";
					$sql2=mysqli_query($connect, $sql1) or die("Error in Mysql :".mysqli_error($connect));

					while ($row1=mysqli_fetch_array($sql2)) {
						$img=$row1['productImagePath'];
						$product=$row1['productName'];
						$price=$row1['productPrice'];
					?>			
				
				<!-------------- Repeat -------------->
					<div class="col-md-3 product-list">
						<img src="<?php echo $img; ?>" alt="<?php echo $product; ?>" class="img-thumbnail">
							<div class="product-details">
								<h4><?php echo $product;?></h4>
								<p><?php echo $price;?></p>															
								<a href="#"><p class="btn btn-danger">Learn More</p></a>
							</div>
					</div>
					
				<!-------------- Repeat -------------->	
					<?php
						}
					?>		
				</div>
				<div id="pagination-controls"></div>
			</div>
		</div>
	<!------------------------ Main CONTENT ends here  ------------------------>

    </div>
</body>
<?php
	include('include/footer.php');
?>
</html>