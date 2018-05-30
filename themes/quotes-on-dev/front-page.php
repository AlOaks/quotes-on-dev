<?php
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */



$args = array( 'post_type' => 'post', 'orderby' => 'rand', 'posts_per_page' => 1  );
$quotes = new WP_Query( $args ); // instantiate our object

?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if ( $quotes->have_posts() ) : ?>
		<?php while ( $quotes->have_posts() ) : $quotes->the_post(); ?>
		   <?php $quote_source = get_post_meta(get_the_ID(), "_qod_quote_source");
				  $quote_link = get_post_meta(get_the_ID(), "_qod_quote_source_url");
		   ?>
			<div class="quote-container">
				<i class="fas fa-quote-left"></i>
				<div class="content-div">
					<?php echo "<p class='quote'>".the_content()."</p>"; ?>
					<p class="quote-author">— <?php the_title(); ?>
					<!-- if there is a link url then $sourceoutput = a href=www.url.com else -->
					<?php 
					if (!empty($quote_source)) {
						$source = "<span class='source'>{$quote_source[0]}</span>";
						if(!empty($quote_link)) {
							$source_output = "<a href='{$quote_link[0]}'>{$source}</a>";
						} else {
							$source_output = $source;
						}
						echo ", ".$source_output;
					}
					 ?>
					</p>
				</div>
				<i class="fas fa-quote-right"></i>
			</div>
		<?php endwhile; ?>
		   
	<?php wp_reset_postdata(); ?>
	
	<?php else : ?>

	  <h2>Nothing found!</h2>
	  
<?php endif; ?>
		<button class="randomize">Show me another!</button>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
