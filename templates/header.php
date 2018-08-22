<?php
/**
 *
 * @package Inpsyde_Task
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		<div class="site-branding">
			<?php
			the_custom_logo();
			?>
			<div class= "title-wrap">
				<?php if ( is_active_sidebar( 'tag-widget' ) ) : ?>
					<div id="header-widget" class="header-widget" role="complementary">
						<?php dynamic_sidebar( 'tag-widget' ); ?>
					</div><!-- .header-widget -->
				<?php endif; ?>

		</div>
	</div><!-- .site-branding -->

	</header><!-- #masthead -->

	<div id="content" class="site-content">
		<nav id="site-navigation" class="main-navigation">
			<?php
			$menuParameters = array(
				'theme_location' => 'menu-1',
				'menu_id'        => 'primary-menu',
			  'container'      => false,
			  'echo'           => false,
			  'items_wrap'     => '%3$s',
			  'depth'          => 0,
				'link_before'     => '<span>',
        'link_after'      => '</span>',
);

echo strip_tags(wp_nav_menu( $menuParameters ), '<a><span>' );
			?>
		</nav><!-- #site-navigation -->
