<?php /* Template Name: About Page */ ?>

<?php get_header(); ?>

<div id="primary">

	<section class = "about-hero">

	</section>
	<section class = "about-us"
	<div class= "our-story">
		<?php echo CFS()->get( 'our_story' ); ?>
	</div>
	<div class= "our-team">
		<?php echo CFS()->get( 'our_team' ); ?>
	</div>
</section>
</div><!-- #primary -->

<?php get_footer(); ?>