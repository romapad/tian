<?php
/**
 * Template Name: Homepage
 */
?>
<?php while (have_posts()) : the_post(); ?>
  <?php get_template_part('templates/page', 'header'); ?>
<?php endwhile; ?>
<div class="hometop">
  <?php dynamic_sidebar('sidebar-hometop'); ?>
</div>
<div class="homebottom">
  <?php dynamic_sidebar('sidebar-homebottom'); ?>
</div>
<div class="catalog" id="catalog">

</div>
