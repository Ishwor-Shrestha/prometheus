	<?php
		include("cms/connect.php");
	?>
	<link rel="stylesheet" href="css/bxslider.css" type="text/css" />
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
	<!-- Modernizr -->
	  <script src="jquery/modernizr.js"></script>

	<!DOCTYPE html>
	<html>
	<head>
		<title>Hi-Tech Skills | Traning</title>
		<?php
			include("include/header.php")
		?>
		<link rel="stylesheet" href="css/jquery.bxslider.css" type="text/css" />
		<script type='text/javascript' src='jquery/jquery.bxslider.min.js'></script>
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>

	</head>
	<body>
		
		<div class="custom-container">
			<div class="well">
            <h1>Career</h1>
                <div class="row">
                <div class="col-md-10">
				<ul class="media-list">
							<li class="media">
						<?php
						$headID=array();
						$headTitle=array();
						$headDesc=array();
						$headImgPath=array();
						$headImgName=array();
						$sql1= "select * from careerheading;";
						$result1 = mysql_query($sql1) or die("error in mysql :".mysql_error());
						while ($row1=mysql_fetch_array($result1)){
							array_push($headID, $row1['headingID']);
							array_push($headTitle, $row1['headingTitle']);
							array_push($headDesc, $row1['headingDescription']);
							array_push($headImgPath, $row1['headingImagePath']);
							array_push($headImgName, $row1['headingImageName']);
							}
							
							for($i=0;$i<sizeof($headID);$i++){
							//if (isset($headTitle[$i])){
							
						?>
						
					
										
						<h3><?php echo $headTitle[$i] ?></h3>
						<img src="<?php echo $headImgPath[$i] ?>" alt="<?php echo $headImgName[$i] ?>" class="pull-left">
						<div class="media-body">
						<p align="justify"><?php echo $headDesc[$i] ?></p>
									
						
						
							
							<?php
				
									$subID=array();
									$subTitle=array();
									$subDesc=array();
									$subImgPath=array();
									$subImgName=array();
									$sql2="select * from careersub where headingID='$headID[$i]';";
									$result2= mysql_query($sql2) or die("error in mysql :".mysql_error());
									
									while ($row2=mysql_fetch_array($result2)){
									array_push($subID, $row2['subID']);
									array_push($subTitle, $row2['subName']);
									array_push($subDesc, $row2['subDescription']);
									array_push($subImgPath, $row2['subImagePath']);
									array_push($subImgName, $row2['subImageName']);
									}
									
									for($j=0;$j<sizeof($subID);$j++){
														//if (isset($subTitle[$i])){
														
														
									?>
									<div class="media">
												
													<h4 ><?php echo $subTitle[$j] ?></h4>
													<img src="<?php echo $subImgPath[$j] ?>" alt="<?php echo $subImgName[$j] ?>" class="pull-left">
													<div class="media-body">
														<p align="justify"><?php echo $subDesc[$j] ?></p>
													</div>
													</div>
													
														<?php
														}
														?>
														</div>
												
											<?php
											}
											?>
												
					</li>
											</ul>
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