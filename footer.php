<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bitvault-developer
 * @since 1.0
 * @version 1.2
 */

?>

		</div><!-- #content -->
		
		<footer>
			<div class="container">
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<h3>Quick Link</h3>
						<?php if ( has_nav_menu( 'quick' ) ) : ?>
							<nav aria-label="<?php esc_attr_e( 'Quick Link', 'twentyseventeen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'quick',
									) );
								?>
							</nav>
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<h3>Community</h3>
						<?php if ( has_nav_menu( 'community' ) ) : ?>
							<nav aria-label="<?php esc_attr_e( 'Community', 'twentyseventeen' ); ?>">
								<?php
									wp_nav_menu( array(
										'theme_location' => 'community',
									) );
								?>
							</nav>
						<?php endif; ?>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<h3>Follow Us</h3>
						<ul class="social-icon">
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>							
							<li><a href="#"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li> 
						</ul>
					</div>
				</div>
			</div>
			<div class="copyright">
				<div class="container">
					Copyright &copy; <?php echo date("Y"); ?> BitVault Developer. All Rights Reserved.
				</div>
			</div>
		</footer>
	</div><!-- .site-content-contain -->
</div><!-- #page -->
<script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/owl.carousel.js"></script>
<?php wp_footer(); ?>
</body>
</html>
