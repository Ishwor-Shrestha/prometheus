<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package unite
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div style="width:100%;">		
			<div class="row" style="width:99%; margin:0 auto;">
				<div class="col-md-3">
					<h3 class="custom-heading">Study In</h3>
					<p class="custom-text"><a href="http://www.milestonn.com/australia" class="custom-link" >Australia</a></p>
					<p class="custom-text"><a href="http://www.milestonn.com/japan" class="custom-link">Japan</a></p>
					<p class="custom-text"><a href="http://www.milestonn.com/new-zealand" class="custom-link">New Zealand</a></p>
					<p class="custom-text"><a href="http://www.milestonn.com/uk" class="custom-link">UK</a></p>
					<p class="custom-text"><a href="http://www.milestonn.com/us" class="custom-link">US</a></p>
					  

				</div>
                <div class="col-md-3">
					<h3 class="custom-heading">Services</h3>
					<p class="custom-text"><a href="http://www.milestonn.com/visa-preparation" class="custom-link" >Visa Preparation</a></p>
					<p class="custom-text"><a href="http://www.milestonn.com/study-abroad" class="custom-link">Study Abroad</a></p>

				</div>
				<div class="col-md-3">
					<h3 class="custom-heading">Universities</h3>
					<p class="custom-text"><a href="http://www.milestonn.com/" class="custom-link" >Uni 1</a></p>
					<p class="custom-text"><a href="http://www.milestonn.com/" class="custom-link">Uni 2</a></p>
				</div>
				<div class="col-md-3 custom-text yolo">
					<h3 class="custom-heading">Contact Us</h3>					
						<?php iinclude_page(31,'displayStyle="DT_TEASER_ONLY"'); ?>					
				</div>
			</div>
			<div class="row" style="width:99%; margin:0 auto;">
				<hr>
				<p align="center" class="custom-text">Copyright &copy 2014. Milestone Consult Services Pvt Ltd. All rights reserved</p>
				<p align="center" class="custom-text">Powered By : <a href="http://www.hitechskills.com" class="custom-link">Hi - Tech Skills</a></p>
			</div>
		</div>
	<!--	
		<div class="site-info container">
			<nav role="navigation" class="col-md-6">
				<?php unite_footer_links(); ?>
			</nav>

			<div class="copyright col-md-6">
				<?php do_action( 'unite_credits' ); ?>
				<?php echo of_get_option( 'custom_footer_text', 'unite' ); ?>
				<?php do_action( 'unite_footer' ); ?>
			</div>
		</div> --> <!-- .site-info --> 
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>