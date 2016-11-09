<?php
/**
* The template for displaying all pages.
*
* @package RED_Starter_Theme
*/

get_header(); ?>

<div class="hero-banner">
</div>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
	</main><!-- #main -->
</div><!-- #primary -->

<div>
	<h2 class ="latest-adventures">Inhabitent Journal</h2>

	<?php
	$args = array(
		'post_type' =>'post',
		'order' => 'ASC',
		'posts_per_page' => 3,);

		$product_posts = get_posts( $args ); // returns an array of posts ?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			<?php the_post_thumbnail(['480px, 480px']); ?>
			<?php the_date(); ?>
			<?php comments_number(); ?>
			<?php the_title(); ?>

		<?php endforeach; wp_reset_postdata(); ?>

		<section class= "adventures">

		</section>
	</div>
	<?php get_footer(); ?>