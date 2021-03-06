<?php get_header(); ?>
	<!-- Begin single-ag_team -->
	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

<!-- HIDDEN UNTIL WE HAVE FULL HEADER IMAGES
			<header class="l-header-single-post">
				<img src="<?php the_field('header_image'); ?>" />
			</header>
-->
			
			<?php do_action('foundationPress_post_before_entry_content'); ?>

			<section class="clearfix">			
				<div class="row">
					<div class="small-12 medium-8 medium-offset-2 columns" role="main">

						<div class="row">					
							<div class="medium-3 columns l-headshot">
								<img src="<?php the_field('header_image'); ?>" />
							</div>
							<div class="post__title medium-9 columns">		
								<h1 class="entry-title"><?php the_title(); ?></h1>					
								<div class="post__summary">
									<?php the_field('team_member_title'); ?><br /><br />
									<?php the_field('team_member_summary'); ?>
								</div>
							</div>											
						</div>
						
						<div class="row">
							<div class="small-12 columns">
								<?php the_content(); ?>
							</div>
						</div>
									
					</div>					
				</div>
			</section>
			
		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>


<?php get_footer(); ?>
