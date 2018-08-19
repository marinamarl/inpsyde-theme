<?php /* Template Name: Imprint Template */

get_template_part( '/templates/header' );  ?>

  <div class="row">
    <h1 class="imp-title">Imprint</h1>
    <!-- Page Content Column -->
    <div class="content-page">
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
