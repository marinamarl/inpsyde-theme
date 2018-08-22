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
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
        <?php
      if ( have_posts() ) :
        while ( have_posts() ) : the_post();

              the_content();
        endwhile; endif;
        ?>
      </div>

    </div>
    <!-- /.row -->
<?php get_template_part( '/templates/footer' ); ?>
