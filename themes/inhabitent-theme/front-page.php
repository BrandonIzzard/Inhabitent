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
<div class = "container">

<div class="taxonomy-loop">

  <?php 
  $taxonomies  = get_terms( array(
   'taxonomy' => 'product_type',
   'hide_empty' => true,
   ) );

  foreach ( $taxonomies  as $term ):?>

    <div>
    <?php $url = get_term_link($term->slug, 'product_type') ?>
    <img src="<?php echo get_template_directory_uri() ?>/images/product-type-icons/<?php echo $term->slug?>.svg">

    <p> <?php echo $term->description ?> </p>

    <a href="<?php echo $url ?>"> <?php echo $term->name ?> Stuff </a>
    </div>
 <?php endforeach ?>
  
  
</div>

<div>
	<h2 class ="latest-adventures">Inhabitent Journal</h2>

	<?php
	$args = array(
		'post_type' =>'post',
		'order' => 'ASC',
		'posts_per_page' => 3,);

		$product_posts = get_posts( $args ); // returns an array of posts ?>
		<?php foreach ( $product_posts as $post ) : setup_postdata( $post ); ?>
			<div class="adventures">
			<?php the_post_thumbnail(['480px, 480px']); ?>
			<?php the_date(); ?>
			<?php comments_number(); ?>
			<?php the_title(); ?>
			</div>

		<?php endforeach; wp_reset_postdata(); ?>

		<section class= "adventures">

		</section>
		</div>
	</div>
	<?php get_footer(); ?>