<?php 
/**
 * The template for displaying all pages.
 *
 * @package QOD_Starter_Theme
 */
?>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
            <a href=<?php echo esc_url( home_url( ) ); ?>><h1 class="home-title">quotes <span>on</span> dev_</h1></a>
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; // End of the loop. ?>
            <?php get_header(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->
<?php get_footer(); ?>