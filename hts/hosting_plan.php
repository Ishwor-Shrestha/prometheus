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
					<h1>Web Hosting</h1>
						<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
						consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

					<table class="table table-bordered table-hover">
							<tr>
								<td class="success">Web Hosting Plans</td>
								<th>Quota Features</th>
								<th>Charge (Per Year)</th>
								<th>Number of Mails</th>
								<th>Band Per Month</th>
							</tr>
						<?php
					$query = "select * from hosting;";
				$result = mysql_query($query);
				$z=0;
				while ($row=mysql_fetch_array($result)){
					$z=$z+1;
					$a1=$row['features_Quota'];
					$a2=$row['chargePerYear'];
					$a3=$row['no_Email'];
					$a4=$row['band_PM'];
					?>
					<tr>
								<td class="success">Plan <?php echo $z ?></td>
								<th><?php echo $a1 ?></th>
								<th><?php echo $a2 ?></th>
								<th><?php echo $a3 ?></th>
								<th><?php echo $a4 ?></th>
							</tr>

					<?php
				}
					?>
						

						
						</table>

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