<?php
/*
Template Name: Speak
*/
?>
<?php get_header(); ?>

	<?php do_action('foundationPress_before_content'); ?>

	<?php while ( have_posts() ) : the_post(); ?>

	<header class="clearfix l-yellow-short">
	  <div class="row row--header row--first">
	    <div class="large-12 columns header__text-title">
				<h1><?php the_field('header_statement'); ?></h1>
			</div>
		</div>
		<div class="row">
			<div class="large-10 large-offset-1 columns header__text-blurb">
				<?php the_field('header_blurb'); ?>
			</div>
		</div>	
	</header>

  <section class="clearfix"> <!-- BEGIN TILES -->
		<div id="Container" class="l-tiles container clearfix">

				<?php
				$args = array(
					'post_type' => 'ag_speak',
					'nopaging' => true
				);
		
				$the_query = new WP_Query( $args );
						
				while ( $the_query->have_posts() ) : $i++;
				$the_query->the_post(); ?>

				<div class="tile-single mix <?php echo implode(" ", get_field('topic')); ?>" data-myorder="<?php echo $i ?>" >
					<a href="<?php the_permalink(); ?>">
						<div class="tile__image-wrap">
							<?php the_post_thumbnail('-tile'); ?>
							<div class="tile__label-wrap">
								<div class="tile__label-inner">
									<div class="tile__label-title">
										<?php the_title(); ?>
									</div>
									<div class="tile__label-caption">
									<?php the_field('engagement_event'); ?>:<br />
									<?php the_field('engagement_location'); ?>
									</div>
								</div><!-- end .tile__label-inner -->
							</div><!-- end .tile__label-wrap -->
						</div><!-- end .tile__image-wrap -->
					</a>
				</div>
		
				<?php endwhile; wp_reset_postdata(); ?>	

			  <div class="gap"></div>
			  <div class="gap"></div>
			  <div class="gap"></div>
			  <div class="gap"></div>

		</div>
	</section> <!-- END TILES -->
		
	<section class="l-gray-light clearfix"> <!-- BEGIN EVENTS LIST -->
		<div class="row">
			<div class="small-12 medium-8 medium-offset-2 columns text--center l-listings">
				<h2 class="post__title text--bold">Our Events</h2>
				<?php the_content(); ?>
			</div>
		</div>
	</section>
	
	<?php endwhile; // end of the loop. ?>	
	
	<?php get_template_part('parts/speaking'); ?>

	<?php do_action('foundationPress_after_content'); ?>

<?php get_footer(); ?>
