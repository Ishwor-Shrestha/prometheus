<?php

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mood Lighting</title>
    <script type="text/javascript">

		function toggle() {
		var ele = document.getElementById("toggleText");
		var text = document.getElementById("displayText");
		
		if(ele.style.display == "block") {
	    		ele.style.display = "none";
			text.innerHTML = "Expand";
	  	}	  	
		else {
			ele.style.display = "block";
			text.innerHTML = "Collapse";
		}
		}

    </script>

    <script type="text/javascript"><!--
	var dge=document.getElementById;
	function cl_expcol(a){/*
	    document.getElementById(a).style.display = 
	      (document.getElementById(a).style.display=='none')?
	      'block':'none';*/
		  if(document.getElementById(a).style.display=='none')
		  {
			 //alert('block');
			 document.getElementById(a).style.display='block';
		  }
		  else if(document.getElementById(a).style.display=='block')
		  {
			  //alert('none');
			  document.getElementById(a).style.display='none';
		  }
		  else
		  {
			  //alert('def');
			  document.getElementById(a).style.display='block';
		  }
		  
			}
			-->
	</script>
</head>
<body>
	<?php
		include('include/header.php');
	?>
	<!------------------------ Main CONTENT starts here ------------------------>
	<div class="custom-container">
		<div class="row">
			<div class="col-lg-2" align="center">
				<?php
					include('include/sidebar.php');
				?>
			</div>
	
			<div class="col-lg-10">
				<ul class="media-list">
					<h3 style="margin-top:-3px;">Brand Name</h3>
					<li class="media">
						<img src="images/thumbnails/thumb150.png" class="pull-left img-thumbnail" alt="brand-name">
						<div class="media-body">
							<p align="justify">
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
								tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
								quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
								consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
								cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
								proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
							</p>
						</div>
					</li>
				</ul>
				<div class="custom-well">
				<h3>Categories</h3>
					<div class="row" align="center">
						<div class="col-md-3" onmouseover="cl_expcol('ex1')" onmouseout="cl_expcol('ex1')">												
							<div class="cat-container" >
								<img src="images/residential.png" class="img-thumbnail rounded-corners" style="margin-top:-60px;">
								<h4>Residential Lighting</h4><span class="glyphicon glyphicon-chevron-down"></span>
							</div>
							<ul class="hidetext rl-hover" id="ex1">								
								<li>SC1</li>
								<li>SC2</li>
								<li>SC3</li>
								<li>SC4</li>
							</ul>														
						</div>
						<div class="col-md-3" onmouseover="cl_expcol('ex2')" onmouseout="cl_expcol('ex2')">
							<div class="cat-container">
								<img src="images/commercial.png" class="img-thumbnail rounded-corners" style="margin-top:-60px;">
								<h4>Commercial Lighting</h4><span class="glyphicon glyphicon-chevron-down"></span>
							</div>
							<ul class="hidetext cl-hover" id="ex2">								
								<li>SC1</li>
								<li>SC2</li>
								<li>SC3</li>
								<li>SC4</li>
							</ul>
						</div>
						<div class="col-md-3" onmouseover="cl_expcol('ex3')" onmouseout="cl_expcol('ex3')">
							<div class="cat-container" >
								<img src="images/outdoors.png" class="img-thumbnail rounded-corners" style="margin-top:-60px;">
								<h4>Outdoors</h4><span class="glyphicon glyphicon-chevron-down"></span>
							</div>
							<ul class="hidetext o-hover" id="ex3">								
								<li>SC1</li>
								<li>SC2</li>
								<li>SC3</li>
								<li>SC4</li>
							</ul>
						</div>
						<div class="col-md-3" onmouseover="cl_expcol('ex4')" onmouseout="cl_expcol('ex4')">
							<div class="cat-container" >
								<img src="images/switches.png" class="img-thumbnail rounded-corners" style="margin-top:-60px;">
								<h4>Switches & Gears</h4><span class="glyphicon glyphicon-chevron-down"></span>
							</div>
							<ul class="hidetext sg-hover" id="ex4">								
								<li>SC1</li>
								<li>SC2</li>
								<li>SC3</li>
								<li>SC4</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	
			

	<!------------------------ Main CONTENT ends here  ------------------------>

    </div>
</body>
<?php
	include('include/footer.php');
?>
</html>