<?php
/**
 * The main template file
 * @package Inpsyde_Task
 */

get_template_part( '/templates/header' );
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			while ( have_posts() ) :
				the_post();

				get_template_part( '/templates/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( '/templates/content', 'none' );

		endif;
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
