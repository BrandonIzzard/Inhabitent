
<?php get_header(); ?>

<div id="primary" class="content-area-product">
	<main id="main" class="site-main-product container" role="main">
<div class="container">
	

		<?php if ( have_posts() ) : ?>
		  <section class ="product-nav">
			<header class="page-header">
				<h2>Shop Stuff</h2>
			</header>


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
						<div class="individual-product">
							<a href="<?php the_permalink(); ?>" rel="bookmark"> 
								<?php if ( has_post_thumbnail() ) : ?>
									<div>
										<?php the_post_thumbnail(); ?>
									</div>
								</a>
							<?php endif; ?>
							<div class="product-text">
								<?php the_title( sprintf( '<h2 class="entry-title"><span>', esc_url( get_permalink() ) ), '</span></h2>' ); ?>

								<p><?php echo CFS()->get( 'product_price' ); ?>	</p>
							</div>
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