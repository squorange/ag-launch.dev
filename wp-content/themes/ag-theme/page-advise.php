<?php
/*
Template Name: Advise
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
			<div class="large-6 large-offset-3 columns header__text-blurb">
				<?php the_field('header_blurb'); ?>
			</div>
		</div>	
	</header>


<div class="l-filters">	
	<button class="filter" data-filter="all">All Case Studies:</button>
	<button class="filter" data-filter=".advise__strategy">Strategy</button>
	<button class="filter" data-filter=".advise__branding-experience">Branding / Experience Design</button>
	<button class="filter" data-filter=".advise__leadership">Leadership Development</button>
	<button class="filter" data-filter=".advise__capability">Capability Building</button>	
	<button class="filter" data-filter=".advise__speaking-facilitation">Facilitation</button>	
<!--
	<button class="sort" data-sort="default">Default</button>
	<button class="sort" data-sort="myorder:asc">Ascending</button>
	<button class="sort" data-sort="myorder:desc">Descending</button>
-->
</div>

  <section class="clearfix"> <!-- BEGIN TILES -->
		<div id="Container" class="l-tiles container clearfix">

				<?php
				$args = array(
					'post_type' => 'ag_advise',
					'nopaging' => true
				);
		
				$the_query = new WP_Query( $args );
						
				while ( $the_query->have_posts() ) : $i++;
				$the_query->the_post(); ?>

				<div class="tile-single mix <?php echo implode(" ", get_field('project_type')); ?>" data-myorder="<?php echo $i ?>" >
					<a href="<?php the_permalink(); ?>">
						<div class="tile__image-wrap">
							<?php the_post_thumbnail('-tile'); ?>
							<div class="tile__label-wrap">
								<div class="tile__label-inner">
									<div class="tile__label-title">
										<?php the_title(); ?>
									</div>
									<div class="tile__label-caption">
										<?php echo get_the_excerpt(); ?>
									</div>
								</div><!-- end .tile__label-inner -->
							</div><!-- end .tile__label-wrap -->
						</div><!-- end .tile__image-wrap -->
					</a>
				</div>
		
				<?php endwhile; wp_reset_postdata(); ?>	

			  <div class="gap"></div>
			  <div class="gap"></div>

		</div>
	</section> <!-- END TILES -->

	<?php get_template_part('parts/funding'); ?>

	<section class="l-gray-light clearfix"> <!-- BEGIN TESTIMONIALS -->
	
		<div class="row clearfix text--center ">
	    <div class="large-12 columns">
				<h2 class="post__title text--bold">Here's what our clients have to say</h2>
			</div>
		</div>
		<div class="row clearfix l-testimonials">
			<div class="medium-4 columns">
				<?php the_field('advise_testimonial_1'); ?>
			</div>
			<div class="medium-4 columns">
				<?php the_field('advise_testimonial_2'); ?>
			</div>
			<div class="medium-4 columns">
				<?php the_field('advise_testimonial_3'); ?>
			</div>
		</div>
		
		<div class="row large-collapse l-clients">		
			<br />
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-atlas.png" />
			</div>			
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-borouge.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-choon.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-chung.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-csc.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-dama.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-elements.png" />
			</div>			
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-hcd.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-hdb.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-hyundai.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-iloilo.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-imd.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-kj.png" />
			</div>			
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-mitju.png" />
			</div>			
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-mnd.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-moe.png" />
			</div>			
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-mothercare.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-ngeeann.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-pernod.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-psd.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-pub.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-recruit.png" />
			</div>			
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-sas.png" />
			</div>		
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-sentosa.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-siahuat.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-sia.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-singtel.png" />
			</div>
			<div class="large-2 medium-3 small-4 columns end">
				<img src="<?php echo get_stylesheet_directory_uri() ; ?>/assets/img/images/logo-spring.png" />
			</div>
																					
		</div>

	</section> <!-- END TESTIMONIALS -->
	
	<?php endwhile; // end of the loop. ?>
	
	
	<?php get_template_part('parts/cocreate'); ?>

	<?php do_action('foundationPress_after_content'); ?>

<?php get_footer(); ?>
