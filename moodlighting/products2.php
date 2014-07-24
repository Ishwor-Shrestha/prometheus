<?php
	include('cms_admin/connect1.php');
	$count_row="select count(productID) from product";//count number of rows
	$query=mysqli_query($connect, $count_row)or die("Error in Mysql :".mysqli_error($connect));
	$row=mysqli_fetch_row($query);
	$total_rows= $row[0];//fetch number of rows
	$results_per_page=5;//how many results per page
	$last_page=ceil($total_rows/$results_per_page);//page number of last page
	if ($last_page < 1) {//make sure last page is not less than 1
		$last_page=1;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utfs-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Mood Lighting</title>

    <script type="text/javascript">
    var results_per_page=<?php echo $results_per_page;?>;
    var last_page=<?php echo $last_page;?>;
    function request_page (pageNumber) {
    	var results-box=document.getElementById("result-box");
    	var pagination-controls=document.getElementById("pagination-controls");
    	result-box.innerHTML="Loading Results ....";

    	//Http Request

    	var http_request = 	new XMLHttpRequest();
    	 http_request.open("POST", "pagination_parser.php", true);
    	 http_request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    	 http_request.onreadystatechange = function(){
    	 	if (http_request.readyState ==4 && http_request.status == 200) {
    	 		var dataArray = http_request.responseText
    	 		var html_output = "";
    	 		html_output += results-box;
    	 		results-box.innerHTML = results-box;
    	 	}
    	 } 
    	 http_request.send("ResultPerPage="+results_per_page+"&LastPage="+last_page+"PageNumber="+pageNumber);

    	 //change pagination controls

    	 var paginationControls="";
    	 //show controls if page number is more than 1
    	 if(last_page != 1){
    	 	if(pageNumber > 1) {
    	 		paginationControls += '<button onclick="request_page('+(pageNumber-1)+')">&lt;</button>';
    	 	}
    	 	paginationControls += ' &nbsp; &nbsp; <b>Page '+pageNumber+' of '+last_page+'</b> &nbsp; &nbsp ';
    	 		if(pageNumber != last_page){
    	 			paginationControls += '<button onclick="request_page('+(pageNumber+1)+')">&gt;</button>';
    	 		}
    	 } 
    	 pagination-controls.innerHTML = paginationControls;
    }
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
				<h3 style="margin-top:-3px;">Our Products</h3>
				<div class="row" align="center">

				<?php
					$sql1="select * from product;";
					$sql2=mysqli_query($connect, $sql1) or die("Error in Mysql :".mysqli_error($connect));

					while ($row1=mysqli_fetch_array($sql2)) {
						$img=$row1['productImagePath'];
						$product=$row1['productName'];
						$price=$row1['productPrice'];
					?>			
				
				<!-------------- Repeat -------------->
					<div class="col-md-4 product-list">
						<div class="border" id="result-box">
							<img src="<?php echo $img; ?>" alt="<?php echo $product; ?>" class="img-thumbnail" style="width:260px; height:160px;">
								<div class="product-details">
									<h4><?php echo $product;?></h4>
									<p><?php echo $price;?></p>															
									<a href="#"><p class="btn btn-danger">Learn More</p></a>
								</div>
						</div>
					</div>

					<?php
						}
					?>
					
				<!-------------- Repeat -------------->							
				</div>

				<!-------------- Pagination Controls -------------->
				<div id="pagination-controls">
					
				</div>
				<!-------------- Pagination Controls -------------->

				<!-------------- Pagination Code -------------->
					<script type="text/javascript">
					request_page(1);
					</script>
				<!-------------- Pagination Code -------------->
				
			</div>
		</div>
	<!------------------------ Main CONTENT ends here  ------------------------>

    </div>
</body>
<?php
	include('include/footer.php');
?>
</html>