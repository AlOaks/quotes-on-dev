<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */



$args = array( 'post_type' => 'post', 'order' => 'ASC', 'posts_per_page' => 1  );
$quotes = new WP_Query( $args ); // instantiate our object

?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<a href=<?php echo esc_url( home_url( ) ); ?>><h1 class="home-title">quotes <span>on</span> dev_</h1></a>
<?php if ( $quotes->have_posts() ) : ?>
   		<?php while ( $quotes->have_posts() ) : $quotes->the_post(); ?>
			<div class="quote-container">
				<p class="quote"><?php the_content(); ?></p>
				<p class="quote-author"><?php the_title(); ?></p>
			</div>
		   <?php endwhile; ?>
		   
	<?php wp_reset_postdata(); ?>
	
	<?php else : ?>

	  <h2>Nothing found!</h2>
	  
<?php endif; ?>
		<button class="randomize">Show me another</button>
		<?php 	get_header(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
