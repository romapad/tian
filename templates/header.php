<div id="home"></div>
 <header class="banner">
  <div class="container">
    <a class="brand" href="<?= esc_url(home_url('/')); ?>"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/logo.png" alt=""><?php bloginfo('name'); ?></a>
    <nav class="nav-primary">
      <?php
      if (has_nav_menu('primary_navigation')) :
        wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']);
      endif;
      ?>
    </nav>
    <div class="phone">
        <a href="tel:+7(495)781-90-93" class="tel">+7(495)781-90-93</a><br>
        <a class="callme_viewform"><small>Заказать обратный звонок</small></a>
    </div>
  </div>
</header>
