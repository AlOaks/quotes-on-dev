<?php
/**
 * The template for displaying all pages.
 * 
 * Template Name: Archives
 *
 * @package QOD_Starter_Theme
 */
$args = array( 'post_type' => 'post', 'orderby' => 'title', 'order' => 'ASC', 'posts_per_page' => -1  );
$quotes = new WP_Query( $args ); // instantiate our object

?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<i class="fas fa-quote-left"></i>
			<div class="main-wrapper">
				<h2 class="page-title-archives">Archives</h2>
				<h2 class="quote-authors-head titles">Quote Authors</h2>
				<ul class="quote-authors-container">
					<?php while ( $quotes->have_posts() ) : $quotes->the_post(); ?>
						<li class="quote-author-item">
							<a href=<?php the_permalink(); ?>><?php the_title(); ?></a>
						</li>
					<?php endwhile; // End of the loop. ?>
				</ul>
				<h2 class="quote-cat-head titles">Categories</h2>
					<?php if ( $quotes->have_posts() ) : $quotes->the_post(); ?>
						<?php $cats = get_categories('post');
							echo "<ul class='quote-cat-container'>";
								foreach( $cats as $cat) {
									echo "<li class='quote-cat-item'><a href=".get_category_link($cat).">".$cat->name."</a></li>";
								}
							echo "</ul>";
						?>
					<?php endif; ?>
			<h2 class="quote-tag-head titles">Tags</h2>
				<?php if ( $quotes->have_posts() ) : $quotes->the_post();  ?>
					<?php $tags = get_tags('post');
						echo "<ul class='quote-tag-container'>";
							foreach( $tags as $tag ) {
								echo "<li class='quote-tag-item'><a href=".get_tag_link($tag).">".$tag->name."</a></li>";
							}
						echo "</ul>";	
					?>
				<?php endif; ?>
			</div>
				<i class="fas fa-quote-right"></i>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
