<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 */

get_template_part( '/templates/header' );  ?>

  <div class="row">
    <!-- Post Content Column -->
    <div class="content-list">

        <?php
      if ( have_posts() ) :
        // Start the loop.
        while ( have_posts() ) : the_post();

            get_template_part( 'content', get_post_format() );

            // Previous/next post navigation.
            the_post_navigation( array(
                'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Next post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
                'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentyfifteen' ) . '</span> ' .
                    '<span class="screen-reader-text">' . __( 'Previous post:', 'twentyfifteen' ) . '</span> ' .
                    '<span class="post-title">%title</span>',
            ) );

        // End the loop.
        endwhile; endif;
        ?>
      </div>
      <!-- get the sidebar template -->
      <?php //get_template_part( '/sidebar' ); ?>
    </div>
    <!-- /.row -->
<?php get_template_part( '/templates/footer' ); ?>
