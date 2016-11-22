<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

<section id="primary" class="content-area-single-prduct">
	<main id="main" class="site-main-single-product container" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
	  <section class = "single-product-container">
    	<div class = "single-product-thumb">
			<?php the_post_thumbnail( 'category-thumb'); ?>
		</div>
		<div class = "single-product-content">
			<h2 class ="single-product-title"><?php the_title();?></h2>
			<p class="single-product-price"><?php echo CFS()->get( 'product_price' ); ?>	</p>
							<?php the_content(); ?>
							<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
								) );
								?>
		<div class = "social-media-button">
		    <a class = "black-btn" href ="#"><i class="fa fa-facebook" aria-hidden="true"></i> Like</a>
			<a class = "black-btn" href ="#"><i class="fa fa-twitter" aria-hidden="true"></i> Tweet</a>
		    <a class = "black-btn" href ="#"><i class="fa fa-pinterest" aria-hidden="true"></i> Pin</a>
		</div>
		</div>

	   </section>

			<?php
			?>
			
		<?php endwhile; // End of the loop. ?>
	</main><!-- #main -->
</section><!-- #primary -->
<?php get_footer(); ?>