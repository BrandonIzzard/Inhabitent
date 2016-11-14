<?php
/**
 * The template for displaying archive pages.
 *
 * @package RED_Starter_Theme
 */
get_header(); ?>

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
			<div class = "product-grid">
			<?php while ( have_posts() ) : the_post(); ?>
			    <div class = "single-product">
				<?php
				get_template_part( 'template-parts/content' );
				?>
			    </div>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</div>

	</main><!-- #main -->
</section><!-- #primary -->


<?php get_footer(); ?>
