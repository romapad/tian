<!-- Catalog title row -->
<div class="row">
  <div class="col-md-8 col-md-offset-4">
    <h2 class="prod-title"><?php the_title(); ?></h2>
  </div>
</div>  
<!-- Catalog content row -->
<div class="row">
  <div class="col-md-4">
    <!-- Catalog images galleries -->
    <div class="product-image">
      <div id="carousel-image-<?php the_ID(); ?>" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner" role="listbox">
		  <!-- Feutured image -->
          <div class="item active">
            <?php if(has_post_thumbnail()){
              the_post_thumbnail();
            } ?> 
          </div>
		  <!-- Additional images render, if provided -->
          <div class="item">
            <?php echo types_render_field( "cat_images", array( "separator" => "</div><div class='item'>") ); ?> 
          </div>    
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-image-<?php the_ID(); ?>" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Назад</span>
        </a>
        <a class="right carousel-control" href="#carousel-image-<?php the_ID(); ?>" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Вперед</span>
        </a>
      </div>                   
    </div> 
  </div>  
  <!-- Catalog shor desc & meta -->
  <div class="col-md-4">
    <div class="short-desc"><?php the_excerpt(); ?> </div>
    <div class="pict-gallery clearfix">
      <div class="col-md-4">
        <?php echo types_render_field( "cat-pictogramm", array( "separator" => "</div><div class='col-md-4'>") ); ?>
      </div>
    </div>
    <div class="btngroup">   
       <?php $args = array( 
	           'post_mime_type' => array('application/pdf', 'application/zip'),
			   'post_type'      => 'attachment', 
			   'numberposts'    => -1, 
			   'post_status'    => null, 
			   'post_parent'    => $post->ID 
			 );
             $attachments = get_posts($args);
            if ($attachments) {
           	  foreach ( $attachments as $attachment ) {
       		    echo '<a href="'. wp_get_attachment_link($attachment->ID) .'" class="btn btn-default btn-sm">'. apply_filters( 'the_title' , $attachment->post_title ) .' <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a><br>';
       	      }
            } ?>                  
    </div>
  </div>
  <!-- Catalog description & order button -->          
  <div class="col-md-4">
    <div class="long-desc"><?php the_content(); ?></div>
    <a href="#contact-form" class="btn btn-default btn-sm order-btn" id="<?php the_ID(); ?>">Заказать</a>
  </div>
</div>
<!-- Catalog table -->
<div class="row">
  <div class="col-md-10 col-md-offset-1 desc-table">
    <?php echo types_render_field( "cat_table", array()); ?>
  </div>
</div> 