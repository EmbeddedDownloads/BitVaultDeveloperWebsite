<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage bitvault-developer
 * @since 1.0
 * @version 1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<title><?php bloginfo( 'name' ); ?></title>
<?php wp_head(); ?>
<link href="<?php bloginfo("template_url"); ?>/assets/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php bloginfo("template_url"); ?>/assets/css/font-awesome.css" rel="stylesheet" type="text/css">
<link href="<?php bloginfo("template_url"); ?>/assets/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php bloginfo("template_url"); ?>/assets/css/creative.min.css" rel="stylesheet">
	
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">	
	<nav class="navbar navbar-expand-lg navbar-light fixed-top" id="mainNav">
        <div class="layout">
            <?php the_custom_logo(); ?>
            <div class="mobmenuicon">
				<a href="javascript:;" class="animated-arrow">
					<span></span>
				</a>
			</div>
			<div class="collapse navbar-collapse desktop-menu" id="navbarResponsive">
                <?php wp_nav_menu( array(
					'theme_location' => 'top',
					'menu_id'        => 'top-menu',
					'menu_class'	 => 'navbar-nav'
				) ); ?>
            </div>
        </div>
    </nav>
	<div class="mobile-menu">
		<div class="collapse navbar-collapse">
			<?php wp_nav_menu( array(
				'theme_location' => 'top',
				'menu_id'        => 'top-menu',
				'menu_class'	 => 'navbar-nav'
			) ); ?>
		</div>
	</div>
	<header class="masthead" role="banner">

		<?php get_template_part( 'template-parts/header/header', 'image' ); ?>

		 <div class="header-content">
            <div class="header-content-inner">
                <h1 id="homeHeading">					
					<?php $description = get_bloginfo( 'description', 'display' ); if ( $description || is_customize_preview() ) : ?>
						<?php echo $description; ?>
					<?php endif; ?>
				</h1>
                <a class="btn-outline" href="#developer-world">Yes, I do</a>
            </div>
        </div>
        <a href="#blog" class="learn-more movenextlevel">Learn more about what we do <i class="fa fa-chevron-down"></i></a>
	</header>

	<div class="site-content-contain">
		<div id="content" class="site-content">
