<?php
get_header();
?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/surf-hero2.jpg')?>);"></div>
  <div class="page-banner__content container t-center c-white">
    <h1 class="headline headline--large">Surfhouse</h1>
    <h2 class="headline headline--medium">We think you&rsquo;ll like it here.</h2>
    <h3 class="headline headline--small">Why don&rsquo;t you check out the <strong>Accomodation</strong> you&rsquo;re interested in?</h3>
    <a href="#" class="btn btn--large btn--blue">Book now</a>
  </div>
</div>

<div class=" flexbox-container">
  <div class="flexbox-item flexbox-item-1">
    <i class="icon fas fa-users"></i>
    <h4>surf community</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus urna risus, dignissim ut neque sed, maximus efficitur metus. Suspendisse eu interdum nunc.
    </p>
  </div>
  <div class="flexbox-item flexbox-item-2">
    <i class="icon fas fa-umbrella-beach"></i>
    <h4>surf & chill</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus urna risus, dignissim ut neque sed, maximus efficitur metus. Suspendisse eu interdum nunc.
    </p>
  </div>
  <div class="flexbox-item flexbox-item-3">
    <i class="icon fab fa-cc-paypal"></i>
    <h4>secured payment</h4>
    <p>
      Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus urna risus, dignissim ut neque sed, maximus efficitur metus. Suspendisse eu interdum nunc.
    </p>
  </div>
</div>

<div class=" flexbox-container">
  <div style="background-image: url(<?php echo get_theme_file_uri('/images/house.jpg')?>);" class="flexbox-img  flexbox-item-1">
    <div class="img-overlay"><h1 class="white-text">Great location</h1></div>
    </div>
  <div style="background-image: url(<?php echo get_theme_file_uri('/images/breakfast.jpg')?>);" class="flexbox-img flexbox-item-2">
    <div class="img-overlay"><h1 class="white-text">Free breakfast</h1></div>
  </div>
  <div style="background-image: url(<?php echo get_theme_file_uri('/images/room.jpg')?>);"  class="flexbox-img flexbox-item-3">
    <div class="img-overlay"><h1 class="white-text">Affordable rooms</h1></div>
  </div>
</div>


<div class="page-section--beige ">
  <div class="container">
    <div class="headline">
      <h2 class="headline headline--small-plus t-center">Our Blogs</h2>


      <?php
      $homepagePosts = new WP_Query(array(
        'posts_per_page' => 2,

      ));

      while($homepagePosts -> have_posts()) {
        $homepagePosts -> the_post();?>
        <div class="event-summary">
          <a class="event-summary__date event-summary__date--beige t-center" href="#">
            <span class="event-summary__month"><?php echo get_the_date( 'M' ) ?></span>
            <span class="event-summary__day"><?php echo get_the_date( 'd' ) ?></span>
          </a>
          <div class="event-summary__content">
            <h5 class="event-summary__title headline headline--tiny"><?php the_title() ?></h5>
            <p><?php echo get_the_excerpt(); ?> <a href="<?php echo get_the_permalink(  ); ?>" class="nu gray">Learn more</a></p>
          </div>

        </div>

        <?php
      } wp_reset_postdata();

      ?>

  <p class="t-center no-margin"><a href="<?php echo site_url('/blog');?>" class="btn btn--yellow">View All Blog Posts</a></p>
    </div>
  </div>

</div>



<?php get_footer();
?>

<
