<footer class="site-footer">
  <div class="page-banner c-white">
    <div class="footer-banner__bg-image" style="background-image: url(<?php echo get_theme_file_uri('/images/ocean.jpg')?>);"></div>
    <div class=" footer-banner__content container t-center c-white">

      <a href="#" class="btn btn--large btn--blue">Book now</a>
    </div>
  </div>

  <div class="site-footer__inner container container--narrow">
    <div class="group">
      <div class="site-footer__col-one">
        <h1 class="school-logo-text school-logo-text--alt-color">
          <a href="#"><strong>SunSurf</strong> bed & breakfast</a>
        </h1>
        <p><a class="site-footer__link" href="#">555.555.5555</a></p>
      </div>

      <div class="site-footer__col-two-three-group">
        <div class="site-footer__col-two">
          <h3 class="headline headline--small">Explore</h3>
          <nav class="nav-list">
            <?php
              wp_nav_menu(array(
                'theme_location' =>'footerLocationOne'))
            ?>
          </nav>
        </div>

        <div class="site-footer__col-three">
          <h3 class="headline headline--small">Learn</h3>
          <nav class="nav-list">
            <?php
              wp_nav_menu(array(
                'theme_location' =>'footer LocationTwo'))
            ?>
          </nav>
        </div>
      </div>

      <div class="site-footer__col-four">
        <h3 class="headline headline--small">Connect With Us</h3>
        <nav>
          <ul class="min-list social-icons-list group">
            <li>
              <a href="#" class="social-color-facebook"><i class="fab fa-facebook-square"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-twitter"><i class="fab fa-twitter-square"></i></a>
            </li>
            <li>
              <a href="#" class="social-color-youtube"><i class="fab fa-youtube-square"></i></a>
            </li>

            <li>
              <a href="#" class="social-color-instagram"><i class="fab fa-instagram"></i></a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
</footer>
</body>
</html>
