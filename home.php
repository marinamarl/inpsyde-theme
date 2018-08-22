<!--
Theme Name: Mountain Conqueror
Author: Marina Marlagk
Description: Inpsyde Task
Version: 0.0.1
Tags: empty
-->

<?php get_template_part( '/templates/header' ); ?>
      <div class="row">
        <!-- Post Content Column -->
        <div class="content-list">
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
            get_template_part( '/templates/content', get_post_format() );

          endwhile; endif;
          ?>

        </div>
      </div>
      <!-- /.row -->

<?php get_template_part( '/templates/footer' ); ?>
