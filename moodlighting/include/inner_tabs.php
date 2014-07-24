    <link type="text/css" rel="stylesheet" href="css/tabdrop.css" />
    <script src="js/bootstrap-tabdrop.js"></script>    

<div class="">
	<div class="tabbable">
	 	<ul class="nav nav-pills">
		    <li class="active">
		    	<a href="#ptab1" data-toggle="tab" class="x">New</a>
		    </li>    
		  	<li class="">
		  		<a href="#ptab2" data-toggle="tab" class="y">Popular</a>
		  	</li>
		  	<li class="">
		  		<a href="#ptab3" data-toggle="tab" class="z">Offers</a>
		  	</li>	  	
	 	</ul>

		<div class="tab-content">
		    <div class="tab-pane active" id="ptab1">
		     
			      <div class="row" align="center">
			      	<div class="col-md-2 product-list">
						<div class="border">
						<img src="images/thumbnails/thumb200.png" alt="product-name" class="img-thumbnail">
							<div class="product-details">
								<h4>Product 1</h4>
								<p>Rs 25000</p>															
								<a href="#"><p class="btn btn-danger">Learn More</p></a>
							</div>
						</div>
					</div>
					<div class="col-md-2 product-list">
						<div class="border">
						<img src="images/thumbnails/thumb200.png" alt="product-name" class="img-thumbnail">
							<div class="product-details">
								<h4>Product 1</h4>
								<p>Rs 25000</p>															
								<a href="#"><p class="btn btn-danger">Learn More</p></a>
							</div>
						</div>
					</div>
			      </div>
			      <div class="row" style="padding:20px;">
			      	<a href="#" style="float:right"><p class="btn btn-danger">See More</p></a>
			      </div>
		    </div>
		    <div class="tab-pane" id="ptab2">
		      <p>Howdy, I'm in Section 2.</p>
		      <div class="row" align="center">
			      	<div class="col-md-2 product-list">
						<div class="border">
						<img src="images/thumbnails/thumb200.png" alt="product-name" class="img-thumbnail">
							<div class="product-details">
								<h4>Product 1</h4>
								<p>Rs 25000</p>															
								<a href="#"><p class="btn btn-danger">Learn More</p></a>
							</div>
						</div>
					</div>
					
			      </div>
			      <div class="row" style="padding:20px;">
			      	<a href="#" style="float:right"><p class="btn btn-danger">See More</p></a>
			      </div>
		    </div>
		    <div class="tab-pane" id="ptab3">
		      <p>Howdy, I'm in Section 3.</p>
		    </div>		    
		</div>
	</div>
</div>

          <script type="text/javascript">
          $('.nav-pills, .nav-tabs').tabdrop()</script>