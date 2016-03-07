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
        <a href="tel:+7(495)781-90-93" class="tel">+7 (495) 781-90-93</a>
        <a class="callme_viewform head_but btn btn-default btn-xs" data-toggle="modal" data-target=".bs-callback-modal"><small>Заказать обратный звонок</small></a>
        <a href="#contact-form" class="jivo_but head_but btn btn-default btn-xs"><small>Задать вопрос специалисту</small></a>
    </div>
  </div>
</header>
<div class="modal fade bs-callback-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">Заказать обратный звонок</h4>
      </div>
      <div class="modal-body">
          <?php echo do_shortcode( '[contact-form-7 id="184" title="callback"]' ); ?>
      </div>
    </div>
  </div>
</div>