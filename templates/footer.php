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
	<div id="toggle">
<img src="http://www.example.com/wp-content/themes/your-theme/images/menu.png" alt="Show" /></div>
<div id="popout">
	<nav id="mobile-nav" class="mobile-nav">
		<?php
		$moMenuParameters = array(
			'theme_location' => 'mobile-nav',
			'menu_id'        => 'mobile-menu',
			'container'      => false,
			'echo'           => false,
			'items_wrap'     => '%3$s',
			'depth'          => 0,
			'link_before'     => '<span>',
			'link_after'      => '</span>',
	);

	echo strip_tags(wp_nav_menu( $moMenuParameters ), '<a><span>' );
		?>
	</nav><!-- #mobile-navigation -->
</div>
	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<p class= "mobile-hidden">©<?php echo date('Y'); ?> by <?php the_author(); ?></p>
			<p class="tablet-hidden mobile-hidden">Follow my adventures</p>
			<p class="tablet-hidden mobile-hidden"><i class="fab fa-instagram"></i> <i class="fab fa-twitter"></i> <i class="fab fa-vimeo-v"></i> <i class="fab fa-youtube"></i></p>
			<a class= "mobile-hidden" href="<?php echo esc_url( home_url( '/' ) ); ?><?php get_page_by_title(the_author()) ?>" target="_blank">Imprint</a>
			<p id="mobile-menu" class="mobile-menu">MENU</p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
