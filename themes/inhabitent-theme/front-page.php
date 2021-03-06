<?php
/**
* The template for displaying all pages.
*
* @package Inhabitent_Theme
*/

get_header(); ?>

<div class="hero-banner">
</div>

<div id="primary" class="content-area container">
	<main id="main" class="site-main" role="main">
	</main><!-- #main -->
</div><!-- #primary -->
<div class= "container">

	<h2 class="shop-stuff">Shop Stuff</h2>

	<section class="taxonomy-loop">

		<?php 
		$taxonomies  = get_terms( array(
			'taxonomy' => 'product_type',
			'hide_empty' => true,
			) );

			foreach ( $taxonomies  as $term ):?>

			<div class="taxonomy-loop-wrapper">
				<?php $url = get_term_link($term->slug, 'product_type') ?>
				<img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg">

				<p> <?php echo $term->description ?> </p>

				<a href="<?php echo $url ?>" class='btn'> <?php echo $term->name ?> Stuff </a>
			</div>
		<?php endforeach ?>


	</section>

	<secttion class = "inhabitent-journal-title">
		<h2 class = "front-page-heading">Inhabitent Journal</h2>
	</secttion>
	<div class = "inhabitent-journal container">
		<?php
		$args = array( 
			'post_type' => 'post', 
			'posts_per_page' => 3, 
			'order' => 'DESC');
   $journal_posts = get_posts( $args ); // returns an array of posts
   ?>
   <?php foreach ( $journal_posts as $post ) : setup_postdata( $post ); ?>
   	<div class ="individual-journal-post">
   		<?php the_post_thumbnail(); ?>
   		<div class = "journal-post-container">
   			<div>
   				<?php the_date();?>
   				<?php comments_number();?>
   			</div>
   			<h3><?php the_title();?></h3>
   			<a class ="read" href="<?php the_permalink();?>">Read Entry</a>
   		</div>
   	</div>
   <?php endforeach; wp_reset_postdata(); ?>
</div>
</div>

<div class="latest-adventures container">
	

 <h2 class="front-page-heading">Latest Adventures</h2>
	<div class="adventures-container">
		<div class="left-adventure">
			<div class="adventure-info">
			<h3>Getting Back to Nature in a Canoe</h3>
			<a href="#" class="white-btn">Read More</a>
			</div>
		</div>
		<div class="right-adventure">
			<div class="right-top">
				<div class="adventure-info">
				<h3>A Night with Friends at the Beach</h3>
			<a href="#" class="white-btn">Read More</a>
			</div>
			</div>
			<div class="right-bottom">
				<div class="right2">
					<div class="adventure-info">
						<h3>Taking in the View at Big Mountain</h3>
			<a href="#" class="white-btn">Read More</a>
					
			</div>
			</div>
				<div class="right3">
					<div class="adventure-info">
					<h3>Star-Gazing at the Night Sky</h3>
			<a href="#" class="white-btn">Read More</a>
			</div>
			</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>