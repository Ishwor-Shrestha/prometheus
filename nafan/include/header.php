<!-- Bootstrap CSS -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.css" />

<!------ Bootstrap CSS End ------>

<!-- Custom CSS -->
<link rel="stylesheet" type="text/css" href="css/custom.css">
<!------ Custom CSS End ------>

<!-- Vertical menu CSS and Jquery -->
<link rel='stylesheet' type='text/css' href='css/styles.css' />
<script type='text/javascript' src='js/ajax.googleapis.js'></script>
<script type='text/javascript' src='js/menu_jquery.js'></script>
<!------ Vertical menu CSS and Jquery End ------>

<!-- Slider CSS and Jquery -->
<link rel="stylesheet" type="text/css" href="css/sliderstyles.css" media="all" />
<script type="text/javascript" src="js/jquery.flexslider-min.js"></script>
    <script type="text/javascript" charset="utf-8">
    var $ = jQuery.noConflict();
    $(window).load(function() {
    $('.flexslider').flexslider({
          animation: "fade"
    });
	
	$(function() {
		$('.show_menu').click(function(){
				$('.menu').fadeIn();
				$('.show_menu').fadeOut();
				$('.hide_menu').fadeIn();
		});
		$('.hide_menu').click(function(){
				$('.menu').fadeOut();
				$('.show_menu').fadeIn();
				$('.hide_menu').fadeOut();
		});
	});
  });
</script>
<!------ Slider CSS and Jquery End ------>



	<div style="background:#1C4645;">
		<div class="row" style="width:95%; margin-left:20px; margin-bottom:10px;">
			<div class="col-md-2">
				<img src="images/nafan-logo-2.jpg" alt="NAFAN Logo">
			</div>
			<div class="col-md-7">
				<h3 style="color:#fff">NATIONAL FORUM FOR ADVOCAY NEPAL (NAFAN)</h3>
			</div>
			<!--
			<div class="col-md-3">
				<div class="input-group merged" style="margin-top:24px;">
	                <input type="text" class="form-control" placeholder="Search" />
	                <span class="input-group-addon">
	                	<i class="glyphicon glyphicon-search"></i>
	                </span>
	            </div>
			</div>
			-->
		</div>
	</div>
	<div id='cssmenu'>
				<ul>
				   <li class='active'><a href='index.php'><span>Home</span></a></li>
				   <li class='has-sub'><a href='#'><span>About Us</span></a>
				      <ul>
				         <li><a href='about_the_company.php'><span>About The Company</span></a></li>
				         <li><a href='legal_documents.php'><span>Legal Documents</span></a></li>
				         <li><a href='rational.php'><span>Rational</span></a></li>
				         
				         <li class='last'><a href='organizational_team.php'><span>Organzational Team</span></a></li>
				      </ul>
				   </li>				   				  
				   <li><a href='program_&_activities.php'><span>Program & Activities</span></a></li>
				   <li><a href='news_&_events.php'><span>News & Events</span></a></li>
				   <li><a href='publications.php'><span>Publications</span></a></li>
				   <li class="has-sub"><a href='#'><span>Gallery</span></a>
				      <ul>
				      	<li><a href='gallery_photos.php'><span>Photos</span></a></li>
				      	<li><a href='gallery_videos.php'><span>Videos</span></a></li>
				      </ul>
				   </li>
				   <li><a href='announcement.php'><span>Announcement</span></a></li>
				   <li class='last'><a href='contact_us.php'><span>Contact Us</span></a></li>
				</ul>
	</div>	

