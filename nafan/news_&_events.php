<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>NAFAN - News & Events</title>
	<?php 
		include('include/header.php');
	?>
</head>
<body>
	<div class="custom-container">
		<div class="well">
			<div class="row">
				<div class="col-md-8">
					<h3 class="custom-heading">News & Events</h2>
					<div id="1"></div>
					<ul class="media-list">
						<li class="media">
							<h4>News 1</h4>
							<img src="images/1.png" alt="image" class="media-object pull-left" />
								<div class="media-body">
									<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
									tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
									quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
									consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
									cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
									proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
								</div>
						</li>
					</ul>
				</div>
				<div class="col-md-4">
				
					<?php
						include('include/ads.php');
					?>
				</div>
			</div>
			
			
		</div>
	</div>	
</body>
<?php
	include('include/footer.php');
?>
</html>
