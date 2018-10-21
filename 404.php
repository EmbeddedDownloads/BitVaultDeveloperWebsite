<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package WordPress
 * @subpackage bitvault-developer
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div class="wrap container">
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<div class="error-404">
				<img src="<?php bloginfo("template_url"); ?>/images/error-404.png" alt="">
				<p class="error404">Oops! That page can’t be found. The content you’re looking for no longer exists or has been moved. We’d love to help you find it though...</p>
				<p>Let's get you <a style="color:#43454b;" href="http://stagesbiyp.tk/bitvault-developer/"><strong>BitVault Developer</strong></a>.</p>
			</div>
		</main><!-- #main -->
	</div><!-- #primary -->
</div><!-- .wrap -->

<?php get_footer();
