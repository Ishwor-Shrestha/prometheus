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
            
                <div class="row">
                    <div class="col-md-10">
					<ul class="media-list">
					<li class="media">
                    <?php
                         $query = "select * from trainingheading;";
                    $result = mysql_query($query);
                    while ($row=mysql_fetch_array($result)){
                         $id1=$row['headingID'];
                         $nm1=$row['headingTitle'];
                         $dsc=$row['headingDescription'];
                         $imgpt=$row['headingImagePath'];
                         $imgnm=$row['headingImageName'];
                         ?>
						 
						 <h3><?php echo $nm1 ?></h3>
						<img src="<?php echo $imgpt ?>" alt="<?php echo $imgpt ?>" class="pull-left">
						<div class="media-body">
						<p align="justify"><?php echo $dsc ?></p>
						 
						 
                    
                              <?php
                         $query = "select * from trainingsub where headingID='$id1';";
                    $result = mysql_query($query);
                    while ($row=mysql_fetch_array($result)){
                         $id2=$row['subName'];
                         $nm2=$row['subDescription'];
                         $imgpt1=$row['subImagePath'];
                         $imgnm1=$row['subImageName'];


                         ?>
						 <div class="media">
						 <h4 ><?php echo $id2 ?></h4>
													<img src="<?php echo $imgpt1 ?>" alt="<?php echo $imgnm1?>" class="pull-left">
													<div class="media-body">
														<p align="justify"><?php echo $nm2 ?></p>
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