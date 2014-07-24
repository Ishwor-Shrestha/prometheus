<?php

?>
<!DOCTYPE html>
<html>
<head>
	<meta http-equiv='Content-Type' content='text/html; charset=utf-8' />
	<meta http-equiv='X-UA-Compatible' content='IE=edge,chrome=1' />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no"/>
	<title>NAFAN - About the company</title>
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
					<div class="row">
						<div class="col-md-6">
							<div class="panel panel-default">							
								<ol>
									<h3>Contents</h3>									
									<li><a href="#The Company">The Company</a></li>
									<li><a href="#History">History</a></li>
									<li><a href="#Vision">Vision</a></li>
									<li><a href="#Mission">Mission</a></li>
									<li><a href="#Core Values">Core Values</a></li>
									<li><a href="#Objective">Objective</a></li>
									<li><a href="#NAFAN’s Definition Of Advocacy">NAFAN’s Definition Of Advocacy</a></li>
									<li><a href="#Activities">Activities</a></li>
									<li><a href="#Achievements">Achievements</a></li>				
								</ol>				
							</div>
						</div>
					</div>				

					<div id="The Company">
						<h3 class="custom-heading">The Company</h3>
						<p align="justify">Formally established in June 2004, the National Forum for Advocacy, Nepal (NAFAN) consists of a group of activist NGOs that undertake advocacy activities in different fields on behalf of Nepal’s civil society.</p>
						<p align="justify">National Forum for Advocacy, Nepal (NAFAN) is a common forum of right-based non-governmental organizations working to uplift the socioeconomic condition, gender equality and access of underprivileged and marginalized community to environment, natural resource and biodiversity in Nepal. It was formally established as a registered NGO in June 2004 with comprising the professionals of Human Rights, law, Environment and Development experts. It develops itself as an action oriented institution capable to influence, encourage, share political, economic, sociocultural and environmental policies and decisions of the state in the best interest of poor, marginalized groups and communities, and Eco system through improved governance, gender equity and equality, decentralization and equitable sharing of benefits. NAFAN is actively engaged in supporting community resource management, enhancing capacity for advocacy skills, environmental justice and human rights. It provides logistic supports by establishing a well-equipped resource center, benefiting the people across the country.</p>
					</div>

					<div id="History">
						<h3 class="custom-heading">History</h3>
						<p align="justify">The Regional Planning workshop on capacity Building of Community Based organizations in Advocacy held in Chittagong, Bangladesh from 3 to 6 November 2003 envisaged the concept of formation of a National Level Advocacy Forum by incorporating like minded non-governmental organizations, network institutions and federations. The workshop laid the foundation for NAFAN by making a country wise working groups to further expand the institutional process of national level advocacy group. The participants from Nepal decided to establish such a forum by involving potential institutions .Series of meetings and consultations were held from December 2003 to June 2004 to decide the focus and governance structure of the proposed advocacy forum. Finally, National Forum for Advocacy, Nepal (NAFAN) was registered on 22nd June 2004 with the initiatives of several NGOs and Federations working for resource management, advocacy, human rights, environmental justice and gender.</p>
					</div>

					<div id="Vision">
						<h3 class="custom-heading">Vision</h3>
						<p align="justify">To create an improved quality of life of the marginalized and disadventaged people through advocacy.</p>
					</div>

					<div id="Mission">
						<h3 class="custom-heading">Mission</h3>
						<p align="justify">To provide support to nafan members and partners in their efforts to create an environment of gender equity, equility and environmental justice by establishing well equiped resourrce centre.</p>
					</div>

					<div id="Core Values">
						<h3 class="custom-heading">Core Values</h3>
						<ul>
							<li>Gender sensitivity</li>
							<li>Responsibility sharing</li>
							<li>Equal opportunity</li>
							<li>Equality/equity</li>
							<li>Transparency</li>
							<li>Inclusion</li>
							<li>No misuse</li>
							<li>Good governance</li>
						</ul>
					</div>
					
					<div id="NAFAN’s Definition Of Advocacy">
						<h3 class="custom-heading">NAFAN’s Definition Of Advocacy</h3>
						<p align="justify">"Empowering people to ensure their rights by undertaking awareness campaigns, lobbying policy makers, and providing capacity building."</p>
					</div>

					<div id="Objective">
						<h3 class="custom-heading">Objective</h3>
						<p align="justify">
							<ol>
								<li>Protection, Promotion, and realization of Human Rights of socially and economically  marginalized people and community.</li>
								<li>Protection. Promotion and realization of the cultural and economic right of different class and community.</li>
								<li>Access of marginalized class to environment, natural resources and biodiversity.</li>
								<li>Provide proportionate share to the disadvantaged community, and local groups of the benefits arising from commercial and other utilization of natural or biological resources.</li>
								<li>Conduct different activities to ensure rights of Women and mainstreaming Gender.</li>
								<li>Decentralization of natural resource management, and conservation, sustainable use and management of biodiversity to the lowest level of the society and local government.</li>
								<li>Establish and promote good environmental governance.</li>
								<li>Act as a resource Centre</li>
								<li>Undertake different activities, which are ancillary to the above, mentioned objectives.</li>
							</ol>
						</p>
					</div>
					
					<div id="Activities">
						<h3 class="custom-heading">Activities</h3>
						<p align="justify">
							<ol>
								<li>Promoting community based forestry in Nepal</li>
								<li>Working on REDD+, forestry and Climate change issues</li>
								<li>Strengthing forest environment workers' union</li>
								<li>Supporting to dalits, IPs, madhesi,youth and other marginalised peoples to ensure their rights over natural resources</li>
								<li>Develop and act as a resource Centre</li>
								<li>Network for different crucial issues and initiate Advocacy programs</li>
								<li>Carry out necessary research and development activities related to justice, equality and policy level advocacy</li>
								<li>Media Campaigns and Capacity building programs</li>
								<li>Facilitate the process to establish networks and unions.</li>
								<li>Undertake policy analysis, policy dialogue and provide policy suggestions and expertise services</li>
								<li>Partnership Projects, and 8. Monitoring and Evaluations</li>		
							</ol>
						</p>
					</div>

					<div id="Achievements">
						<h3 class="custom-heading">Achievements</h3>
						<p align="justify">
							<ol>
								<li>Recognization gained at national and regional level</li>
								<li>Synergies created through collective efforts of members in the sector of environment justice and gender</li>
								<li>Build up environment of mutual trust and solideaty among member</li>
							</ol>
						</p>
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
