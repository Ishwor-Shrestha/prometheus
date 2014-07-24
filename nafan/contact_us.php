<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>NAFAN</title>
	<?php 
		include('include/header.php');
	?>
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
</head>
<body>
	<div class="custom-container">
		<div class="well">
			<div class="row">
				<div class="col-md-6">
					<h3 class="custom-heading">Contact Us!</h3>
                	<p class=""> 
	                  	<span>Address:</span> Pepsi cola Suncity Gothatar-8, Kathmandu, Nepal<br />
	                    <span>Telephone:</span> 123<br />
	                    <span>Mob:</span> 345<br />
	                    <span>E-mail:</span><a href="#">nafannepal8@gmail.com</a> 
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
				
					<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script><div style="overflow:hidden;height:500px;width:500px;"><div id="gmap_canvas" style="height:500px;width:500px;"></div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style><a class="google-map-code" href="http://www.mapsembed.com/redcoon-gutschein/" id="get-map-data">http://www.mapsembed.com</a></div><script type="text/javascript"> function init_map(){var myOptions = {zoom:18,center:new google.maps.LatLng(27.685698246365988,85.31901750115821),mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(27.685698246365988, 85.31901750115821)});infowindow = new google.maps.InfoWindow({content:"<b>Hi-Tech skills</b><br/>Jwagal<br/> Lallitpur" });google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>	
						
				</div>
			</div>
			
			
		</div>
	</div>	
</body>
<?php
	include('include/footer.php');
?>
</html>
