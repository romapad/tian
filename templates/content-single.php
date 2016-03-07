<section>
  <div class="wrap container" role="document">
    <div class="content row">  
      <div class="col-md-12">
 <?php while (have_posts()) : the_post(); ?>
  <article <?php post_class(); ?>>
    <header>
      <h1 class="entry-title"><?php the_title(); ?></h1>
      <?php get_template_part('templates/entry-meta'); ?>
    </header>
    <div class="entry-content">
      <?php the_content(); ?>
    </div>
  </article>
<?php endwhile; ?>
      </div>

    </div><!-- /.content -->
  </div><!-- /.wrap -->     
</section>