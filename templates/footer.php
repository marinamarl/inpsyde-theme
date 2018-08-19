<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Inpsyde_Task
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p>©<?php echo date('Y'); ?> by <?php the_author(); ?></p>
			<p>Follow my adventures</p>
			<p><i class="fab fa-instagram"></i> <i class="fab fa-twitter"></i> <i class="fab fa-vimeo-v"></i> <i class="fab fa-youtube"></i></p>
			<a href="/inpsyde-job-skeleton/<?php get_page_by_title(the_author()) ?>" target="_blank">Imprint</a>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
