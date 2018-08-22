<?php /* Template Name: Imprint Template */ ?>

<?php get_template_part( '/templates/header' );  ?>

  <div class="row">
    <h1 class="imp-title">Imprint</h1>
    <!-- Page Content Column -->
    <div class="content-page">
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
