<?php/* Template Name: Event Archive*/?>

<?php get_template_part( '/templates/header' );  ?>

  <div class="row">
    <div class="event-archive">
        <?php
              $args = array(
                'post_type'   => 'event',
                'post_status' => 'publish'
              );

              $events = new WP_Query( $args );
              if( $events->have_posts() ) :
              ?>
                <div class="events-wrap">
                  <?php
                    while( $events->have_posts() ) :
                      $events->the_post();
                     ?>
                     <div class="single-event">

                         <div><p class="event-info"><?php echo Inpsyde\Events\Model\Event::startDate()->format('.m'); ?> -
                         <?php echo Inpsyde\Events\Model\Event::endDate()->format('d.m.Y'); ?> > <?php echo Inpsyde\Events\Model\Location::country()?></p> </div>

                         <a href="<?php the_permalink(); ?>" target="_blank"><h2 class="mt-4"><?php the_title(); ?></h2></a>

                          <?php the_excerpt();?>

                        </div>
                        <?php endwhile;
                    wp_reset_postdata();
                  ?>
                </div>
              <?php
              else :
                esc_html_e( 'There are no events yet!', 'text-domain' );
              endif;
              ?>
      </div>

    </div>
    <!-- /.row -->
<?php get_template_part( '/templates/footer' ); ?>
