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
                <h2 class="submit-page-title"><?php the_title(); ?></h2>
            <?php get_header(); ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
