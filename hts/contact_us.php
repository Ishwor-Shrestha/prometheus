	<?php
		include("include/db_connect.php");
	?>
	
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Modernizr -->
	  <script src="jquery/modernizr.js"></script><!DOCTYPE html>
	<html>
<head>
<script
src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDY0kkJiTPVd2U7aTOAwhc9ySH6oHxOIYM&sensor=false">
</script>

<script>
function initialize()
{
var mapProp = {
  center:new google.maps.LatLng(27.685698,85.31918),
  zoom:5,
  mapTypeId:google.maps.MapTypeId.ROADMAP
  };
var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
</script>
		<title>Hi-Tech Skills | Contact Us</title>
		<?php
			include("include/header.php")
		?>
		
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	</head>
	<body>
		
		<div class="custom-container">
			<div class="well">
				<div class="row">
					<div class="col-md-4">
						<h3>Contact Us!</h3>
                	<p class=""> 
	                  	<span>Address:</span> Jwagal,Lalitpur, Nepal<br />
	                    <span>Telephone:</span> +977-01-51011289<br />
	                    <span>Mob:</span> 9803743563<br />
	                    <span>E-mail:</span><a href="#">info@hitechskills.com</a> 
					</p>                             
						
				<form name="form" action="include/mail.php" method="post">
					<table>
						<tr>
							<td>
								<p>Name</p>
					    	</td>
							<td>
								<label for="name"></label>
								<input type="text" name="name" id="name">
							</td>
						</tr>
						<tr>
							<td>
								<p>E-mail</p>
							</td>
							<td>
								<label for="email"></label>
								<input type="text" name="email" id="email">
							</td>
						</tr>
						<tr>
							<td>
								<p>Website</p>
							</td>
							<td>
								<label for="website"></label>
								<input type="text" name="website" id="website">
							</td>
						</tr>
						<tr>
							<td>
								<p>Your Message</p>								
							</td>
							<td>
								<label for="message"></label>
								<textarea name="message" id="message" cols="45"  placeholder="Your Message"rows="5"></textarea>
							</td>
						</tr>
						<tr>
							<td>&nbsp</td>
							<td>&nbsp</td>
						</tr>
						<tr>
							<td></td>
							<td style="float:right;"><input class="btn btn-primary" type="submit" name="submit" id="submit" value="Submit"></td>
						</tr>
					</table>
				</form>
					</div>
					<div class="col-md-6">
						<div class="well wel-sm">
								<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:500px;"><div id="gmap_canvas" style="height:500px;width:500px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.mapsembed.com/redcoon-gutschein/" id="get-map-data">http://www.mapsembed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(27.685698246365988,85.31901750115821),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(27.685698246365988, 85.31901750115821)});infowindow = new google.maps.InfoWindow({content:"<b>Hi-Tech skills</b><br/>Jwagal<br/> Lallitpur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>	
						</div>
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