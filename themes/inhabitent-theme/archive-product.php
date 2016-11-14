
<?php get_header(); ?>

<div id="primary" class="content-area-product">
	<main id="main" class="site-main-product container" role="main">

		<?php if ( have_posts() ) : ?>
		  <section class ="product-nav">
			<header class="page-header">
				<h2>Shop Stuff</h2>
			</header><!-- .page-header -->


  <!--Calling Product Types-->
  <div class = "shop-page-product-types">
	<?php
	  $terms = get_terms('product_type');
	   foreach ($terms as $term) :
	?>
    <?php $url = get_term_link($term->slug, 'product_type'); ?>
	  <p><a href="<?php echo $url ?>"><?php echo $term->name ?></a></p>
	<?php endforeach;?>
   </div>
</section>
		<div class = "product-post">
			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class = "individual-product">
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

</div><!-- #primary -->
<?php get_footer(); ?>