<?php
get_header();
?>
<div class="page-banner">
  <div class="page-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
  <div class="page-banner__slim container container--narrow">
    <h1 class="page-banner__title"><?php the_title()?></h1>
    <div class="page-banner__intro">
      <p> Dont forget to make this dynamic</p>
    </div>
  </div>
</div>
<?php
while(have_posts()) {
  the_post();?>
<div class="blog-container container container--narrow">
<p class="blog-text"><?php the_content()?></p>
</div>
  <?php
}

get_footer();
?>
