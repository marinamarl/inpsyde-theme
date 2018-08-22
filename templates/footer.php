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
			<p class= "mobile-hidden">©<?php echo date('Y'); ?> by <?php the_author(); ?></p>
			<p class="tablet-hidden mobile-hidden">Follow my adventures</p>
			<p class="tablet-hidden mobile-hidden"><i class="fab fa-instagram"></i> <i class="fab fa-twitter"></i> <i class="fab fa-vimeo-v"></i> <i class="fab fa-youtube"></i></p>
			<a class= "mobile-hidden" href="<?php echo esc_url( home_url( '/' ) ); ?><?php get_page_by_title(the_author()) ?>" target="_blank">Imprint</a>
			<p class="mobile-menu">MENU</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
