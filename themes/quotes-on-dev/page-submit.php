<?php
/**
 * The template for displaying all pages.
 * 
 * Template name: Submit
 *
 * @package QOD_Starter_Theme
 */

 ?>
<?php get_header(); ?>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="main-wrapper">
			<i class="fas fa-quote-left"></i>
			<div class="submit-content">
				<h2 class="submit-page-title"><?php the_title(); ?></h2>
				<?php if(!is_user_logged_in()) {
					echo "<p class='sorry'>Sorry, you must be logged in to submit a quote!</p>";
					echo "<a href=".wp_login_url().">Click here to login</a>";
				} else { ?>
				<form class="submit-quote">
					<label>Author of Quote</label>
					<input type='text' name="author">
					<label>Quote</label>
					<input class="quote-textarea" type="text" name="quote-text">
					<label>Where did you fin this quote? (e.g. book name)</label>
					<input type="text" name="quote_source">
					<label>Provide the URL of the quote source, if available.</label>
					<input type="text" name="quote_link">
					<input class="submit-btn" type="submit" value="Submit Quote">
				</form>
				<?php }; ?>
			</div>
			<i class="fas fa-quote-right"></i>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
