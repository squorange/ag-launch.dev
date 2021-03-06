<?php get_header(); ?>
	<!-- Begin single-ag_share -->
	<?php do_action('foundationPress_before_content'); ?>

	<?php while (have_posts()) : the_post(); ?>
		
		<article <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<section class="<?php the_field('video_present'); ?> clearfix">
				<div class="row">
					<div class="medium-8 medium-offset-2 columns">
						<div class="video-container">
							<?php the_field('video_url'); ?>
						</div>
					</div>
				</div>	
			</section>
						
			<?php do_action('foundationPress_post_before_entry_content'); ?>
			
			<section class="clearfix">
				<div class="row">
					<div class="small-12 medium-8 medium-offset-2 columns" role="main">
						<div class="post__title">
							<h1><?php the_title(); ?></h1>		
							<div class="post__summary">
							<?php the_author_link(); ?><br />
							<div class="text--gray"><?php the_time('F Y') ?></div>
							</div>
						</div>		
						<?php the_content(); ?>
					</div>
				</div>	
			</section>

		</article>
	<?php endwhile;?>

	<?php do_action('foundationPress_after_content'); ?>

	<?php get_template_part('parts/newsletter-signup'); ?>

<?php get_footer(); ?>
