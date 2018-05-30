<?php 
/**
 * The template for displaying all pages.
 * 
 * Template Name: About
 *
 * @package QOD_Starter_Theme
 */
?>

<?php get_header(); ?>
    <div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
                <?php while ( have_posts() ) : the_post(); ?>
                <div class="quote-container">
                    <i class="fas fa-quote-left"></i>
                    <div class="content-div">
                        <h2 class="quote-author"><?php the_title(); ?></h2>
                        <?php echo "<p class='quote'>".the_content()."</p>"; ?>
                    </div>
                    <i class="fas fa-quote-right"></i>
                </div>

                <?php endwhile; // End of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>