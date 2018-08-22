<!--
Theme Name: Mountain Conqueror
Author: Marina Marlagk
Description: Inpsyde Task
Version: 0.0.1
Tags: empty
-->

<?php get_template_part( '/templates/header' ); ?>
<!-- it would have been get_header() but this native function only works if the specific template file is in the root directory of the theme -->
      <div class="row">
        <!-- Post Content Column -->
        <div class="content-list">
  <!-- loop through all the posts -->
        <?php
        if ( have_posts() ) :

          if ( is_home() && ! is_front_page() ) :
            ?>
            <header>
              <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
            </header>
            <?php
          endif;

          /* Start the Loop */
          while ( have_posts() ) :
            the_post();
            /*
             * Include the post format-specific template for the content. If you want to
             * use this in a child theme, then include a file called called content-___.php
             * (where ___ is the post format) and that will be used instead.
             */
            get_template_part( '/templates/content', get_post_format() );

          endwhile; endif;
          ?>

        </div>
        <!-- get the sidebar template -->
        <?php //get_template_part( '/sidebar' ); ?>
      </div>
      <!-- /.row -->

<?php get_template_part( '/templates/footer' ); ?>
