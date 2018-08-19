<div class="blog-wrap">
  <div class="binfo-wrap">
    <!-- Title -->
    <a href="<?php the_permalink(); ?>" target="_blank"><h2 class="mt-4"><?php the_title(); ?></h2></a>

    <!-- Post Excerpt or Content -->
     <?php
     if ( is_front_page() && is_home() ) :
     the_excerpt();
     ?>
     <!-- Date/Time -->
     <div><p class="blog-info"><?php the_date(); ?> > <a href="#"><?php the_author(); ?></a> >  <?php the_category(', '); ?></p> </div>
  </div>
 <!-- Preview Image -->
 <?php if ( has_post_thumbnail() ) { ?>
   <img class="<?php the_title_attribute(); ?>" src="<?php the_post_thumbnail_url(); ?>" alt="<?php get_post_thumbnail_id(); ?>">
   <?php
 } else
 echo'<p>This post has no thumbnail!</p>';
 endif;
 ?>
</div>
 <hr>
