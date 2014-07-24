<?php
	
?>
<script src="js/jquery.bootstrap.newsbox.js" type="text/javascript"></script>


<div class="panel panel-default">
	<div class="panel-heading"> <span class="glyphicon glyphicon-list-alt"></span><b>News & Events</b></div>
		<div class="panel-body">
			<div class="row">
				<div class="col-xs-12">
					<ul class="demo1">
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/1.png" width="60" class="img-circle" /></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="news_&_events.php#1">Read more...</a></td>
									
								</tr>
							</table>
						</li>
						
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/2.png" width="60" class="img-circle" /></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
								</tr>
							</table>
						</li>
						
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/3.png" width="60" class="img-circle" /></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
								</tr>
							</table>
						</li>
						
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/4.png" width="60" class="img-circle" /></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
								</tr>
							</table>
						</li>
						
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/5.png" width="60" class="img-circle" /></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
								</tr>
							</table>
						</li>
						
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/6.png" width="60" class="img-circle" /></td>
										<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
								</tr>
							</table>
						</li>
						
						<li class="news-item">
							<table cellpadding="4">
								<tr>
									<td><img src="images/7.png" width="60" class="img-circle" /></td>
									<td>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam in venenatis enim... <a href="#">Read more...</a></td>
								</tr>
							</table>
						</li>
						
					</ul>
				</div>
			</div>
		</div>
<div class="panel-footer"> </div>
</div>
<script type="text/javascript">
    $(function () {
        $(".demo1").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover:true,
            direction: 'up',
            newsTickerInterval: 4000,
            onToDo: function () {
                //console.log(this);
            }
        });
		
		$(".demo2").bootstrapNews({
            newsPerPage: 4,
            autoplay: true,
			pauseOnHover: true,
			navigation: false,
            direction: 'down',
            newsTickerInterval: 2500,
            onToDo: function () {
                //console.log(this);
            }
        });

        $("#demo3").bootstrapNews({
            newsPerPage: 3,
            autoplay: false,
            
            onToDo: function () {
                //console.log(this);
            }
        });
    });
</script>