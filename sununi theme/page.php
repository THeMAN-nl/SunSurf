<?php
get_header();
while(have_posts()) {
  the_post();?>
  <div class="page-banner">
    <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
    <div class="page-banner__slim container container--narrow">
      <h1 class="page-banner__title"><?php the_title()?></h1>
      <div class="page-banner__intro">
        <p> Dont forget to make this dynamic</p>
      </div>
    </div>
  </div>

  <div class="container container--narrow page-section">
    <?php
    $theParent = wp_get_post_parent_id(get_the_ID());
    if($theParent) {?>
      <div class="metabox metabox--position-up metabox--with-home-link">
        <p><a class="metabox__blog-home-link" href="<?php echo get_permalink($theParent)?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($theParent)?></a> <span class="metabox__main"><?php echo the_title()?></span></p>
      </div>
    <?php }
    ?>




    <div class="generic-content">
      <?php the_content()?>
    </div>
    <?php if(is_page(35)){ ?>
      <div class="page-section--beige ">
        <div class="container">
          <div class="headline">
            <h2 class="headline headline--small-plus t-center">Upcoming Events</h2>

            <?php
            $eventsPosts = new WP_Query(array(
              'posts_per_page' => 2,
              'post_type' => 'event'

            ));

            while($eventsPosts -> have_posts()) {
              $eventsPosts -> the_post();?>
              <div class="event-summary">
                <a class="event-summary__date event-summary__date--beige t-center" href="#">
                  <span class="event-summary__month"><?php
                    $eventDate = new DateTime(get_fields('event_date'));
                    echo $eventDate -> format('M')
                  ?></span>
                  <span class="event-summary__day"><?php echo $eventDate -> format('d') ?></span>
                </a>
                <div class="event-summary__content">
                  <h5 class="event-summary__title headline headline--tiny"><?php the_title() ?></h5>
                  <p><?php echo get_the_excerpt(); ?> <a href="<?php echo get_the_permalink(  ); ?>" class="nu gray">Learn more</a></p>
                </div>

              </div>

              <?php
            } wp_reset_postdata();

            ?>

        <p class="t-center no-margin"><a href="<?php echo site_url('/blog');?>" class="btn btn--yellow">View All </a></p>
          </div>
        </div>

      </div>  <?php
   }?>
  </div>
  <?php
}
get_footer();
?>
