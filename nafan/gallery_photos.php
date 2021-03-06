<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>NAFAN - Photos</title>
	<?php 
		include('include/header.php');
	?>
	<!-- color box css and jquery -->

	<link rel="stylesheet" href="css/colorbox.css" />
	<script src="js/jquery.colorbox.js"></script>
	<script>
			$(document).ready(function(){
				//Examples of how to assign the Colorbox event to elements
				$(".group1").colorbox({rel:'group1'});
				$(".group2").colorbox({rel:'group2', transition:"fade"});
				$(".group3").colorbox({rel:'group3', transition:"none", width:"75%", height:"75%"});
				$(".group4").colorbox({rel:'group4', slideshow:true});
				$(".ajax").colorbox();
				$(".youtube").colorbox({iframe:true, innerWidth:640, innerHeight:390});
				$(".vimeo").colorbox({iframe:true, innerWidth:500, innerHeight:409});
				$(".iframe").colorbox({iframe:true, width:"80%", height:"80%"});
				$(".inline").colorbox({inline:true, width:"50%"});
				$(".callbacks").colorbox({
					onOpen:function(){ alert('onOpen: colorbox is about to open'); },
					onLoad:function(){ alert('onLoad: colorbox has started to load the targeted content'); },
					onComplete:function(){ alert('onComplete: colorbox has displayed the loaded content'); },
					onCleanup:function(){ alert('onCleanup: colorbox has begun the close process'); },
					onClosed:function(){ alert('onClosed: colorbox has completely closed'); }
				});

				$('.non-retina').colorbox({rel:'group5', transition:'none'})
				$('.retina').colorbox({rel:'group5', transition:'none', retinaImage:true, retinaUrl:true});
				
				//Example of preserving a JavaScript event for inline calls.
				$("#click").click(function(){ 
					$('#click').css({"background-color":"#f00", "color":"#fff", "cursor":"inherit"}).text("Open this window again and this message will still be here.");
					return false;
				});
			});
		</script>
	<!-- color box css and jquery end -->

</head>
<body>
	<div class="custom-container">
		<div class="well">
			<div class="row">
				<div class="col-md-8">
					<h3 class="custom-heading">Gallery</h3>
						<div class="row">
							<div class="col-md-4"  style="text-align:center;">
								<a class="group1" href="images/gallery/jhitcss0_First board meeting.jpg" title="First Board Meeting" alt="meeting">
									<img src="images/gallery/jhitcss0_First board meeting.jpg" class="img-thumbnail" style="width:200px; height:200px;">
								</a>
								<p>CDO Back Side</p>
							</div>
							<div class="col-md-4" style="text-align:center;">
								<a class="group1" href="images/gallery/wfngucfq_DSC00388.jpg" title="Rally" alt="Rally">
									<img src="images/gallery/wfngucfq_DSC00388.jpg" class="img-thumbnail" style="width:200px; height:200px;">
								</a>
								<p>CDO</p>
							</div>
							<div class="col-md-4" style="text-align:center;">
								<a class="group1" href="images/gallery/e3nstyxf_DSC01821.jpg" title="Group photo" alt="group">
									<img src="images/gallery/e3nstyxf_DSC01821.jpg" class="img-thumbnail" style="width:200px; height:200px;">
								</a>
								<p>SWC</p>
							</div>
						</div>					
					
					
					
					
				</div>
				<div class="col-md-4">
				
					<?php
						include('include/side_news_&_events.php');

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
