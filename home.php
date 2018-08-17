<!--
Theme Name: Theming
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
          if ( have_posts() ) : while ( have_posts() ) : the_post();
// get the content of a single post
            get_template_part( '/templates/content', get_post_format() );

          endwhile; endif;
          ?>

        </div>
<!-- get the sidebar template -->
        <?php //get_template_part( '/sidebar' ); ?>

      </div>
      <!-- /.row -->

<?php get_template_part( '/templates/footer' ); ?>
