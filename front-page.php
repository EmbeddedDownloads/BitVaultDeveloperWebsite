<?php
/**
 * The front page template file
 *
 * If the user has selected a static page for their homepage, this is what will
 * appear.
 * Learn more: https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage bitvault-developer
 * @since 1.0
 * @version 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		
		<section id="blog" class="blog">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center">From The Blog</h1>
						<p class="text-center gray mtb30">Write regularly about code & design.</p>
						<?php query_posts(array('post_type'=>'post', 'post_status' => 'publish', 'posts_per_page' => 2, 'order' => 'DESC')); if (have_posts()) : $i = 1; while (have_posts()) : the_post();
						$content = get_the_content();
						?>
						<div class="blog-box">
							<h5><?php the_title(); ?></h5>
							<p class="time">Posted on <?php echo get_the_date(); ?> | <?php comments_number( '0 comment', '1 comment', '% comments' ); ?></p>
							<div class="color"><?php echo substr($content, 0, 230); ?><?php if(strlen($content) > 230) echo '...';?></div>
							<a href="<?php the_permalink(); ?>" class="read-more">Read  More</a>
						</div>
						<?php $i++; endwhile; endif; ?>
					</div>
				</div>
				<?php if (have_posts()) { ?>		
				<div class="view-alls">
					<a href="<?php echo esc_url( home_url( '/' ) ); ?>blog/" class="learn-more">View All</a><br/>
					<a href="#events" class="nextsec movenextlevel"><i class="fa fa-chevron-down"></i></a>
				</div>
				<?php }else{ ?>
				<div class="not-found">
					No Results found					
				</div>
				<?php } ?>
			</div>
		</section>
		<section id="events" class="events">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center">Events</h1>
						<br>
					</div>
				</div>
				<div class="row bomargin">
					<?php query_posts(array('post_type'=>'events', 'post_status' => 'publish', 'posts_per_page' => 2, 'order' => 'DESC')); if (have_posts()) : $i = 1; while (have_posts()) : the_post();
					$eventdate=get_field('event_date');
					$year = substr($eventdate,0,4);
					$dd = substr($eventdate,6,2);
					$mm = substr($eventdate,4,2);

					$ymr = $year.'-'.$mm.'-'.$dd; 
					$eventtitle = get_the_title();
					$eventaddress=get_field('event_address');

					 ?>
					<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="date"><?php echo date("F", strtotime($ymr));?> <span><?php echo date("d", strtotime($ymr));?></span></div>
						<div class="event-box">							
							<?php the_post_thumbnail('events-thumb',array('class' => 'eventsthumb')); ?>							
							<div class="figcaption">
								<h2><?php echo substr($eventtitle,0,50); ?><?php if(strlen($eventtitle) > 50) echo '...';?></h2>
								<p><?php echo substr($eventaddress,0,50); ?><?php if(strlen($eventaddress) > 50) echo '...';?></p>
								<a href="<?php the_permalink(); ?>">View Events Details</a>
							</div>
						</div>
					</div>
					<?php $i++; endwhile; endif; ?>
				</div>
				<?php if (have_posts()) { ?>	
				<div class="row">
					<div class="col-md-12">
						<div class="view-all">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>events/" class="learn-more">View All</a><br/>
							<a href="#news-feeds" class="nextsec movenextlevel"><i class="fa fa-chevron-down"></i></a>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="not-found">
					No Results found					
				</div>
				<?php } ?>
			</div>
		</section>
		<section id="news-feeds" class="news-feeds">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center">News Feeds</h1>
						<br>
					</div>
				</div>
				<div class="row bomargin">
					<div class="col-md-12">
						<p class="text-center feeds-img"><img src="<?php bloginfo("template_url"); ?>/images/feeds.png" alt=""></p>
						<div class="owl-carousel owl-theme" id="feeds">
							<?php query_posts(array('post_type'=>'news', 'post_status' => 'publish', 'posts_per_page' => 5, 'order' => 'DESC')); if (have_posts()) : $i = 1; while (have_posts()) : the_post();

								$newscontent = get_the_content();
							 ?>
							<div class="item">
								<?php echo substr($newscontent, 0, 230); ?><?php if(strlen($newscontent) > 230) echo '...';?>
								<p class="f-name"><span><?php the_field('writer_name'); ?></span> // <?php the_field('news_url'); ?></p>
							</div>
							<?php $i++; endwhile; endif; ?>
						</div>
					</div>
				</div>
				<?php if (have_posts()) {?>	
				<div class="row">
					<div class="col-md-12">
						<div class="view-alls">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>news/" class="learn-more">View All</a><br/>
							<a href="#developer-world" class="nextsec movenextlevel"><i class="fa fa-chevron-down"></i></a>
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="not-found">
					No Results found					
				</div>
				<?php } ?>
			</div>
		</section>
		
		<?php $the_query = new WP_Query( 'page_id=106' ); ?>
        <?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<section id="developer-world" class="developer-world" style="background: url(<?php if ( has_post_thumbnail() ) { the_post_thumbnail_url(); } ?>) no-repeat; background-position: center top; background-size: cover; position: relative;">			
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center"><?php the_title(); ?></h1>
						<p class="text-center gray"><?php the_content(); ?></p>
					</div>
				</div>
			</div>
			<div class="dev-console">
				<div class="devconsoleimg">
					<img src="<?php the_field('register_image'); ?>" alt="<?php the_field('register_now'); ?>">
					<a href="<?php the_field('register_url'); ?>" target="_blank" class="rn"><?php the_field('register_now'); ?></a>
				</div>
				<div class="bitvaultimg">	
					<img src="<?php the_field('buy_bitvault_image'); ?>" alt="<?php the_field('buy_now'); ?>">
					<p><?php the_field('buy_now_text'); ?></p>
					<a href="<?php the_field('buy_now_url'); ?>" target="_blank" class="bn"><?php the_field('buy_now'); ?></a>
				</div>
			</div> 
			<span class="learn-more">Things you may require<br/><a href="#things-may-require" class="nextsec movenextlevel"><i class="fa fa-chevron-down"></i></a></span>			
		</section>
		<?php endwhile; ?>
		
		<section class="bg-primary" id="things-may-require">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 mx-auto text-center">
						<h4>Things you may require</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="text-center">
							<img src="<?php bloginfo("template_url"); ?>/images/mannual.png" alt="">
							<p>Manual</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="text-center">
							<img src="<?php bloginfo("template_url"); ?>/images/sdk.png" alt="">
							<p>Download SDK</p>
						</div>
					</div>
					<div class="col-md-4 col-sm-4 col-xs-12">
						<div class="text-center">
							<img src="<?php bloginfo("template_url"); ?>/images/plugin.png" alt="">
							<p>Plug-In</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		<div class="call-to-action bg-dark" id="app">
			<div class="container text-center">
				<div class="row">
					<div class="col-lg-12 mx-auto text-center">
						<h4>Apps that can help you</h4>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="owl-carousel owl-theme" id="apps">
							<?php query_posts(array('post_type'=>'apps', 'post_status' => 'publish', 'posts_per_page' => 20, 'order' => 'DESC')); if (have_posts()) : $i = 1; while (have_posts()) : the_post(); ?>
							<div class="item">
								<a href="<?php the_field('github_url'); ?>" target="_blank"><img src="<?php the_field('app_icon'); ?>" alt="<?php the_title(); ?>"></a>
							</div>
							<?php $i++; endwhile; endif; ?>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<a class="btn-outline-white" href="#developer-world">Register Now</a>
					</div>
				</div>
			</div>
		</div>
		<?php $the_query = new WP_Query( 'page_id=118' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post(); ?>
		<section id="contact" class="contact">
			<div class="container">
				
				
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<h1 class="text-center"><?php the_title(); ?></h1>
						<?php the_content(); ?>
						<div class="bitvault-slack">
							<img src="<?php the_field('bitvault_slack_image'); ?>" alt="<?php the_title(); ?>">
						</div>
						<p class="text-center gray">Join the Slack workspace <strong>BitVault</strong></p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12 blog-box">
						<a class="read-more" href="<?php the_field('bitvault_slack_url'); ?>" target="_blank"><?php the_field('bitvauly_slack_text_for_join'); ?></a>
					</div>
				</div>
			</div>
		</section>
		<?php endwhile; ?>
		
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer();
