<?php
/*
Template Name: Contact
*/
?>
<?php get_header(); ?>

	<?php do_action('foundationPress_before_content'); ?>

	<?php while ( have_posts() ) : the_post(); ?>

<article <?php post_class() ?> id="post-<?php the_ID(); ?>">
		
	<section class="clearfix">
		<div class="row">
			<div class="medium-6 columns">
				<h1><?php the_field('header_statement'); ?></h1>
				<br />
				<p class="form__input">
				<?php the_field('header_blurb'); ?>
				</p>
				
				<p>
				<a class="icon--sm" target="_blank" href="https://www.facebook.com/awakengroup"><i class="fi-social-facebook icon--large"></i></a> &nbsp;&nbsp;
				<a class="icon--sm" target="_blank" href="https://twitter.com/awakengroup"><i class="fi-social-twitter  icon--large"></i></a> &nbsp;&nbsp;
				<a class="icon--sm" target="_blank" href="https://www.linkedin.com/company/awaken-group"><i class="fi-social-linkedin  icon--large"></i></a>
				</p>				
			</div>
			<div class="medium-6 columns">
				<?php if( function_exists( 'ninja_forms_display_form' ) ){ ninja_forms_display_form( 1 ); }; ?>
			</div>
		</div>
	</section>
	
	<section class="clearfix">
		<div class="row text--center">
			<div class="columns medium-6 section--cushion">
				<address class="vcard"> 
				<h2 class="text--bold org">Singapore</h2>
				<div class="adr">
					<span class="street-address">62 Cecil Street #05-00</span><br />
					TPI Building<br />
					<span class="locality">Singapore</span> <span class="postal-code">049710</span>
				</div>
				<div class="tel">+65 6100 3018</div>
				</address>
				<br />
			</div>
			<div class="columns medium-6 section--cushion">
				<address class="vcard"> 
				<h2 class="text--bold org">USA</h2>
				<div class="adr"><span class="street-address">5875 Green Valley Circle #200</span><br />
				<span class="locality">Culver City</span> <abbr class="region" title="California">CA</abbr> <span class="postal-code">90230</span></div>
				<div class="tel">+1 310 265 9029</div>
				</address>
				<br />
			</div>
		<div class="row">
			<a href="https://www.google.com/maps/d/edit?mid=z5jNzN4zAPyg.kR--beATCaeo&usp=sharing" target="_blank"><img src="http://awakengroup.com/resources/ag-map.png" /></a>
		</div>
	</section>
			
	<?php endwhile; // end of the loop. ?>		

</article>
	
	<?php get_template_part('parts/careers'); ?>

	<?php do_action('foundationPress_after_content'); ?>

<script src='https://maps.googleapis.com/maps/api/js?key=AIzaSyAVw9OX04fiWX_vMaqxMGDCgHjpp3J8qWw&sensor=false&extension=.js'></script>

<?php get_footer(); ?>
