<!-- Title -->
<h1 class="mt-4"><?php the_title(); ?></h1>


<!-- Preview Image -->
<?php if ( has_post_thumbnail() ) { ?>
  <img class="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_post_thumbnail_id(); ?>">
  <?php
} else
echo'<p>This post has no thumbnail!</p>';
 ?>


<!-- Post Content -->
 <?php the_excerpt(); ?>

 <!-- Date/Time -->
 <div><p class="blog-info"><?php the_date(); ?> > <a href="#"><?php the_author(); ?></a> >  <?php the_category(', '); ?></p> </div>

 <hr>
