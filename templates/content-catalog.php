<!-- Catalog title row -->
<div class="row">
  <div class="col-md-8 col-md-offset-4">
    <h2 class="prod-title"><?php the_title(); ?></h2>
  </div>
</div>  
<!-- Catalog content row -->
<div class="row">
  <div class="col-md-4 col-sm-6">
   <?php if(has_post_thumbnail() || types_render_field("cat_images", array())) { ?>
    <!-- Catalog images galleries -->
    <div class="product-image">
      <div id="carousel-image-<?php the_ID(); ?>" class="carousel slide" data-ride="carousel" data-interval="false">
        <div class="carousel-inner" role="listbox">
		  <!-- Feutured image -->
          <div class="item active">
            <?php the_post_thumbnail(); ?> 
          </div>
          <?php if(types_render_field("cat_images", array())) { ?>
		  <!-- Additional images render, if provided -->
          <div class="item">
            <?php echo types_render_field( "cat_images", array( "separator" => "</div><div class='item'>") ); ?> 
          </div>    
          <?php } ?>
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
    <?php } ?>
  </div>  
  <!-- Catalog shor desc & meta -->
  <div class="col-md-4 col-sm-6">
    <div class="short-desc"><?php the_excerpt(); ?> </div>
    <div class="pict-gallery clearfix">
      <div class="col-md-4 col-sm-3 col-xs-3">
        <?php echo types_render_field( "cat-pictogramm", array( "separator" => "</div><div class='col-md-4 col-sm-3 col-xs-3'>") ); ?>
      </div>
    </div>
    <div class="btngroup">   
       <?php 
             $pdf_links = get_post_custom_values('wpcf-cat_file_dl');
             if($pdf_links) {
                foreach ( $pdf_links as $pdf_link ) {
                $parsed_url  = str_replace( WP_HOME, '', $pdf_link );    
                $pdf_array[] = $parsed_url;   
                }
                
                $attach_array = Roots\Sage\Extras\get_pdf_array();
                $pdf_results = array_intersect($attach_array,$pdf_array);
                foreach ($pdf_results as $pdf_title => $pdf_link) {
                    echo '<a href="'. $pdf_link .'" class="btn btn-default btn-sm">'. $pdf_title .' <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a><br>'; 
                } 
                 
            }     ?>                                        
    </div>
  </div>
  <!-- Catalog description & order button -->          
  <div class="col-md-4 col-sm-12">
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