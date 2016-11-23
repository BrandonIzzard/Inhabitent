
<?php get_header(); ?>

<div id="primary" class="content-area-product">
	<main id="main" class="site-main-product container" role="main">
<div class="container">
	

		<?php if ( have_posts() ) : ?>
		  <section class ="product-nav">
			<header class="shop-page-header">
				<h2>Shop Stuff</h2>
		


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
	 	</header>
</section>

	
			<?php if ( have_posts() ) : ?>

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
			</div>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
			<?php endif; ?>
</main><!-- #main -->

</div><!-- #primary -->
<?php get_footer(); ?>