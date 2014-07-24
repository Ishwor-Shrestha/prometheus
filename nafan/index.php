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
</head>
<body>
	<div class="custom-container">
		<div class="row"> 
			<div class="col-md-8">
				<div class="slider_container">
					<div class="flexslider">
				      <ul class="slides">
				    	<li>
				    		<img src="images/slider/slide1.jpg" alt="" title=""/>
				    		<div class="flex-caption">
			                     <div class="caption_title_line"><h2>Party Hairstyles</h2><p>Find the perfect hairstyle a la Lauren Conrad for every type of festive fête.</p></div>
			                </div>
				    	</li>
				    	<li>
				    		<img src="images/slider/slide2.jpg" alt="" title=""/>
				    		<div class="flex-caption">
			                     <div class="caption_title_line"><h2>Beautiful Hairstyle</h2><p>The latest hairstyles and instructions on how to create them here. Total Beauty has your complete hairstyles guide</p></div>
			                </div>
				    	</li>
				    	<li>
				    		<img src="images/slider/slide3.jpg" alt="" title=""/>
				    		<div class="flex-caption">
			                     <div class="caption_title_line"><h2>Party Dresses</h2><p>If you are looking for something a little special for your big night out, check out Rare London's collection of stunning party dresses</p></div>
			                </div>
				    	</li>
				    	<li>
				    		<a href="http://www.freshdesignweb.com"><img src="images/slider/slide4.jpg" alt="" title=""/></a>
				    		<div class="flex-caption">
			                     <div class="caption_title_line"><h2>Bodycon Dresses</h2><p>The bodycon dress is a key silhouette for this season's party girl; from sleek colour-block panelling to geometric prints the bodycon.</p></div>
			                </div>
				    	</li>
				    </ul>
				  </div>
	   			</div>
			</div>
			<div class="col-md-4">
				<div class="well">
					<h3>WELCOME!</h3>
					<p align="justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
					tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
					quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
					consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
					cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
					proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<a class="btn btn-primary btn-md" href="about_us.php">More about NAFAN</a>
				</div>
			</div>
		</div>
		<div class="well gap">
			<div class="row">
				<div class="col-md-8">
					<h3 class="custom-heading">What is NAFAN?</h3>
					<p align="justify">
					 Formally established in June 2004, the National Forum for Advocacy, 
					 Nepal (NAFAN) consists of a group of activist NGOs that undertake advocacy 
					 activities in different fields on behalf of Nepal’s civil society.
					<p align="justify"><strong>Vision:</strong> An institution that can influence, encourage, and shape the country’s
					decisions and policies in political, economic, socio-cultural and environmental spheres.</p>
					<p align="justify"><strong>Mission:</strong> An action oriented, national level network that provides its members 
					with support and resources to strengthen individual advocacy goals through collective 
					advocacy</p>
					</p>
					<a href="about_the_company.php#The Company" style="float:right;"><button type="button" class="btn btn-danger">Read More</button></a></br>
					<hr style="color:black;"></hr>

					<!---------------------------------------------------------->

					<h3 class="custom-heading">History & Activities</h3>
					<p align="justify">
						National Forum for Advocacy, Nepal (NAFAN) is a common forum of right-based non-governmental organizations working to uplift the socioeconomic condition, gender equality and access of underprivileged and marginalized community to environment, natural resource and biodiversity in Nepal. It was formally established as a registered NGO in June 2004 with comprising the professionals of Human Rights, law, Environment and Development experts. It develops itself as an action oriented institution capable to influence, encourage, share political, economic, sociocultural and environmental policies and decisions of the state in the best interest of poor, marginalized groups and communities, and Eco system through improved governanc
					</p>
					<a href="about_the_company.php#History" style="float:right;"><button type="button" class="btn btn-danger">Read More</button></a></br>
					<hr style="color:black;"></hr>

					<!---------------------------------------------------------->

					<h3 class="custom-heading">Membership Criteria</h3>
					<p align="justify">
					 Formally established in June 2004, the National Forum for Advocacy, 
					 Nepal (NAFAN) consists of a group of activist NGOs that undertake advocacy 
					 activities in different fields on behalf of Nepal’s civil society.
					<p align="justify"><strong>Membership Criteria:</strong> Open to local level organiza­tions and federations registered under the NGO Act 2034 who work on public advocacy in Nepal.</p>
					<p align="justify"><strong>Fields of Current members include:</strong> Youth, gender, water, marginalized groups, natural resources/bio-diversity, and human rights.</p>
					</p>
					<a href="membership.php" style="float:right;"><button type="button" class="btn btn-danger">Read More</button></a></br>
					<hr style="color:black;"></hr>

					<!---------------------------------------------------------->

				</div>
				<div class="col-md-4">
				
					<?php
						include('include/side_news_&_events.php');						
					?>
					<div class="row">
					<?php
						include('include/ads.php');
					?>
					</div>
				</div>
			</div>			
		</div>		
		
	</div>
	<div class="custom-container">
		
			<?php
				include('include/our_networks.php');
			?>
		
	</div>	
</body>
<?php
	include('include/footer.php');
?>
</html>
