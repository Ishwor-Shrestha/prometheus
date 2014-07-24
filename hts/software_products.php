<?php
	include("cms/connect.php");
?>
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Modernizr -->
	  <script src="jquery/modernizr.js"></script>

<!DOCTYPE html>
	
	<html>

	<head>
		<title>Hi-Tech Skills | About Us</title>
		<?php
			include("include/header.php")
		?>
	</head>
	<body>
		<div class="custom-container">
			<div class="well">
				<div class="row">
					<div class="col-md-10">
					<ul class="media-list">
					<li class="media">
					<?php
					$query = "select * from serviceheading where headingTitle='Software Products ';";
				$result = mysql_query($query);
				while ($row=mysql_fetch_array($result)){
					$id1=$row['headingID'];
					$nm1=$row['headingTitle'];
					$dsc=$row['headingDescription'];
					$imgpt=$row['headingImagePath'];
					$imgnm=$row['headingImageName'];


				}

					?>
																
					<h3><?php echo $nm1 ?></h3>
					<img alt="<?php echo $imgnm?>" src="<?php echo $imgpt ?>" class="pull-left"/>
						<div class="media-body">
						<p align="justify"><?php echo $dsc ?></p>
						
						
						<?php
					$query = "select * from servicesub where headingID='$id1';";
				$result = mysql_query($query);
				while ($row=mysql_fetch_array($result)){
					$id1=$row['subName'];
					$nm1=$row['subDescription'];
					$imgpt1=$row['subImagePath'];
					$imgnm1=$row['subImageName'];


					?>
					<div class="media">
												
					<h4><?php echo $id1 ?></h4>
					<img alt="<?php echo $imgnm1?>" src="<?php echo $imgpt1 ?>" class="pull-left"/>
						
					<div class="media-body">
					<p align="justify"><?php echo $nm1 ?></p>
					</div>
						</div>
					
						
						
						<?php
					}
					?>

					</div>
					</li>
					</ul>
					
				</div>
				<div class="col-md-2">
						<?php
							include('include/side_menu.php');
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