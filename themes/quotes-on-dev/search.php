<?php
/**
 * The template for displaying search results pages.
 *
 * @package QOD_Starter_Theme
 */

get_header(); ?>
	<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>
		<i class="fas fa-quote-left"></i>
		<div class="search-results-container">
			<header class="page-header">
				<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			</header><!-- .page-header -->

			<?php /* Start the Loop */ ?>
			
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="search-quote-container">
					<a href=<?php the_permalink(); ?>><h2 class="search-author"><?php the_title(); ?></h2></a>
					<p class="search-quote"><?php the_content(); ?></p>
				</div>
			<?php endwhile; ?>

			<?php qod_numbered_pagination(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
</div>
			<i class="fas fa-quote-left"></i>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php get_footer(); ?>
