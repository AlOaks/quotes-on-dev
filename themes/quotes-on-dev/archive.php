<?php
/**
 * The template for displaying archive pages.
 *
 * @package QOD_Starter_Theme
 */

 ?>
<?php get_header();

$args = array( 'post_type' => 'post', 'orderby' => 'rand', 'posts_per_page' => 5  );
$quotes = new WP_Query( $args ); // instantiate our object
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main archive-main" role="main">

		<?php if ( $quotes->have_posts() ) : ?>
				
				<i class="fas fa-quote-left"></i>
				<div class="archives-wrapper">
				<?php the_archive_title( '<h1 class="archive-page-title">', '</h1>' ); ?>
					<?php while ( $quotes->have_posts() ) : $quotes->the_post(); ?>
						<div class="archive-quote-container">
							<p class="archive-quote-content"><?php the_content(); ?></p>
							<p class="archive-quote-author">— <?php the_title(); ?></p>
						</div>
					
					<?php endwhile; ?>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>
				</div>
				<i class="fas fa-quote-right"></i>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
