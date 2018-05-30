<?php
/**
 * The template for displaying all pages.
 * 
 *
 * @package QOD_Starter_Theme
 */


?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
		   <?php $quote_source = get_post_meta(get_the_ID(), "_qod_quote_source");
				  $quote_link = get_post_meta(get_the_ID(), "_qod_quote_source_url");
		   ?>
			<div class="quote-container">
				<i class="fas fa-quote-left"></i>
				<div class="content-div">
					<p class="quote"><?php the_content(); ?></p>
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
