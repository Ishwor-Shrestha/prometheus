<?php
	
?>
	<link rel="stylesheet" href="css/tinycircleslider.css" type="text/css" media="screen"/>	
	<script type="text/javascript" src="js/jquery.tinycircleslider.js"></script>
	<script type="text/javascript">
		$(document).ready(function()
		{
			$('#rotatescroll').tinycircleslider({ interval: true, dotsSnap: true });
		});
	</script>
	<div>
	<div id="rotatescroll" style="float:right;">
		<div class="viewport">
			<ul class="overview">
				<li><a href="http://www.baijs.nl"><img src="images/hdr3.jpg" class="rounded-image" /></a></li>
				<li><a href="http://www.baijs.nl"><img src="images/hdr2.jpg" class="rounded-image" /></a></li>
				<li><a href="http://www.baijs.nl"><img src="images/hdr1.jpg" class="rounded-image" /></a></li>
				<li><a href="http://www.baijs.nl"><img src="images/hdr4.jpg" class="rounded-image" /></a></li>
				<li><a href="http://www.baijs.nl"><img src="images/hdr5.jpg" class="rounded-image" /></a></li>
			</ul>
		</div>

		<div class="dot"></div>
		<div class="overlay"></div>
		<div class="thumb"></div>
	</div>
	</div>