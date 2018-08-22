<?php

// this is only for displaying purposes, not how a plugin would be shipped.

get_template_part( '/templates/header' );  ?>

  <div class="row">
    <!-- Post Content Column -->
    <div class="content-single event-single">
      <header>
        <h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
      </header>
        <?php
      if ( have_posts() ) :

        while ( have_posts() ) : the_post();
        the_excerpt();
        ?>

        <div class="event-info">
          <div class="right-info">
            <table class="info-values">
              <tr>
                <th>Date of event:</th>
                <td><?php echo Inpsyde\Events\Model\Event::startDate()->format('.m'); ?> -
                <?php echo Inpsyde\Events\Model\Event::endDate()->format('d.m.Y'); ?></td>
              </tr>
              <tr>
                <th>Time:</th>
                <td>(function to be recieved)</td>
              </tr>
              <tr>
                <th rowspan="3">Location:</th>
                <td class="location"><?php echo Inpsyde\Events\Model\Location::name()?>,<?php echo Inpsyde\Events\Model\Location::street()?></td>
              </tr>
              <tr>
                <td class="location"><?php echo Inpsyde\Events\Model\Location::postalCode()?>,<?php echo Inpsyde\Events\Model\Location::city()?></td>
              </tr>
              <tr>
                <td><?php echo Inpsyde\Events\Model\Location::country()?></td>
              </tr>
              <tr>
                <th>Subscriber:</th>
                <td><?php echo Inpsyde\Events\Model\Event::subscribedMin();?> - <?php echo Inpsyde\Events\Model\Event::subscribedMax();?></td>
              </tr>
              <tr>
                <th>Price:</th>
                <td>(function to be recieved)</td>
              </tr>
              <tr>
                <th>Included in price:</th>
                <td><?php $event = implode(', ',Inpsyde\Events\Model\Event::includedInPrice()); echo $event; ?></td>
              </tr>
              <tr>
                <th>Registration end:</th>
                <td><?php echo Inpsyde\Events\Model\Event::registrationEnd()->format('d.m.Y');?></td>
              </tr>
            </table>
      </div>

      <div class="left-info">
        <h3>Contact Person:</h3>
        <p><?php echo Inpsyde\Events\Model\ContactPerson::firstName()?><?php echo Inpsyde\Events\Model\ContactPerson::lastName()?>,
        <?php echo Inpsyde\Events\Model\ContactPerson::position()?>,<?php echo Inpsyde\Events\Model\ContactPerson::telephone()?>,
        <?php echo Inpsyde\Events\Model\ContactPerson::email()?></p>
      </div>

      </div>


    <?php  the_content();
   endwhile; endif; ?>
      </div>
      </div>

    <!-- /.row -->
<?php get_template_part( '/templates/footer' ); ?>
