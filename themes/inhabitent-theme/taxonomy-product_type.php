<?php
/**
 * The template for displaying archive pages.
 *
 * @package Inhabitent_Theme
 */
get_header(); ?>
<div class ="container">
<section id="primary" class="product-type-archive-page">
	<main id="main" class="product-type-main" role="main">

		<?php if ( have_posts() ) : ?>
			<header class="product-type-header">
				<?php
				the_archive_title( '<h1 class="page-title">', '</h1>' );
				the_archive_description( '<div class="taxonomy-description">', '</div>' );
				?>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			<div class = "product-posts">
			<?php while ( have_posts() ) : the_post(); ?>

			<div class = "individual-product">
                <?php if ( has_post_thumbnail() ) : ?>
			<div class="thumbnail-wrapper">
				<a href="<?php the_permalink()?> "><?php the_post_thumbnail( ); ?></a>
			</div>

			<?php endif; ?>

			<div class="product-info">
				<?php the_title( sprintf( '<p class="product-name"><span>', esc_url( get_permalink() ) ), '</span></p>' ); ?>

               <p class="product-price"><?php echo CFS()->get( 'product_price' ); ?> </p>
            </div>

			</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>

	</main><!-- #main -->
</section><!-- #primary -->
</div>

<?php get_footer(); ?>
