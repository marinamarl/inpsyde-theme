<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 */

get_template_part( '/templates/header' );  ?>

  <div class="row">
    <!-- Post Content Column -->
    <div class="content-single">

        <?php
      if ( have_posts() ) :
        // Start the loop.
        while ( have_posts() ) : the_post();

            // get_template_part( 'content', get_post_format() );
              the_content();
        // End the loop.
        endwhile; endif;
        ?>
      </div>
      <!-- get the sidebar template -->
      <?php //get_template_part( '/sidebar' ); ?>
    </div>
    <!-- /.row -->
<?php get_template_part( '/templates/footer' ); ?>
