<?php
	//make the script run only if there is a page number posted to this script

	if (isset($_POST['pageNumber'])) {
		$results_per_page=preg_replace('#[^0-9]#', '', $_POST['results_per_page']);
		$last_page=preg_replace('#[^0-9]#', '', $_POST['last_page']);
		$pageNumber=preg_replace('#[^0-9]#', '', $_POST['pageNumber']);

		//make sure the page number is not less than 1 and greater than last page

		if ($pageNumber < 1) {
			$pageNumber = 1;			
		}

		elseif ($pageNumber > $last_page ) {
			$pageNumber = $last_page;
		}

		include('cms_admin/connect1.php');

		//set the range of rows to query for the chosen $pageNumber

		$limit='limit' .($pageNumber-1) * $results_per_page .',' .$results_per_page;

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
	}
?>