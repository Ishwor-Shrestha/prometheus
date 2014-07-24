<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mood Lighting - Contact Us</title>
</head>

<body>
	<?php
		include('include/header.php')
	?>
	<div class="custom-container">
		<h2>Contact Us</h2>
		<p align="justify">
			Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
			tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
			quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
			consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
			cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
			proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			<hr>
		</p>
		<div class="row">
			<div class="col-md-6">
				<div class="well">
					<h4> Mood Lighting Pvt. Ltd.</h4>
					<p>
						Addressx: Krishna Baba Complex, 4th Floor,<br />
		           		Tripureshwor, Kathmandu, Nepal<br />
		                Email: moodlight@gmail.com<br />
		                Phone No.: +977-1-4101091<br />
		                P.O.Box No: 20037
	                </p>                
					<form name="form" action="include/mail.php" method="post">
						<table>
							<tr>
								<td><p>Name</p></td>
								<td></td>
								<td><input type="text" name="name" id="name" placeholder="Name" style="width:100%;"></td>
							</tr>
							<tr>
								<td><p>E-mail</p></td>
								<td></td>
								<td><input type="text" name="email" id="email" placeholder="E-mail" style="width:100%;"></td>
							</tr>
							<tr>
								<td><p>Subject</p></td>
								<td></td>
								<td><input type="text" name="subject" id="subject" placeholder="Subject" style="width:100%;"></td>
							</tr>
							<tr>
								<td><p>Your Message</p></td>
								<td></td>
								<td><textarea name="message" id="message" cols="45"  placeholder="Your Message"rows="5"></textarea></td>
							</tr>
							<tr>
								<td>&nbsp</td>
								<td>&nbsp</td>
								<td>&nbsp</td>
							</tr>
							<tr>
								<td></td>
								<td></td>
								<td style="float:right;"><input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit"></td>
							</tr>
						</table>
					</form>
				</div>
			</div>			
			<div class="col-md-6" style="text-align:center;">				
				<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:600px;text-align:center;"><div id="gmap_canvas" style="height:500px;width:600px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.mapsembed.com/mytoys-gutschein/" id="get-map-data">http://www.mapsembed.com/mytoys-gutschein/</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:17,center:new google.maps.LatLng(27.69177334548258,85.31632779484562),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(27.69177334548258, 85.31632779484562)});infowindow = new google.maps.InfoWindow({content:"<b>Mood Lighting</b><br/><br/> kathmandu" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>		
			</div>
		</div>
	</div>
</body>
	<?php
		include('include/footer.php')
	?>
</html>