<?php
/**
 * Template Name: Homepage
 */
?>
<section id="home">
  <div class="wrap container" role="document">
    <div class="content row">  

      <div class="col-md-8">
        <?php while (have_posts()) : the_post(); ?>
          <?php get_template_part('templates/page', 'header'); ?>
        <?php endwhile; ?>

        <div class="col-md-6 homecontent">
          <div class="homeinner">
            <?php get_template_part('templates/content', 'page'); ?>
          </div>
        </div>

        <div class="col-md-6 homeleft">
          <?php dynamic_sidebar('sidebar-homeleft'); ?>
        </div>
      </div>

      <div class="col-md-4 homeright">
        <?php dynamic_sidebar('sidebar-homeright'); ?>
        <section class="widget">		
          <h3>Новости</h3>
          <?php $args = array ('posts_per_page' => '1',);
            $main_news_query = new WP_Query( $args );
            if ( $main_news_query->have_posts() ) {
              while ( $main_news_query->have_posts() ) {
                $main_news_query->the_post();
             	the_excerpt();
                echo '<a href="/#news">Читать все новости</a>';
              }
            } else { }
            wp_reset_postdata(); ?>            
        </section>
      </div>

    </div><!-- /.content -->
  </div><!-- /.wrap -->     
</section>

<section id="catalog" class="white"> 

  <div class="wrap container" role="document">            
    <ul class="nav nav-tabs" role="tablist">  
      <?php $shop_cats = get_terms( 'catalog_cat', array(
              'orderby'    => 'name',
              'hide_empty' => 0
            ));
          if ( $shop_cats && ! is_wp_error( $shop_cats ) ) : 
          $ci = 1;
          foreach ( $shop_cats as $shop_cat ) {
              if($ci == 1) {
                  $active = "active";
              } else {
                  $active = "";
              }
              echo '<li role="presentation" class="'. $active .' col-md-4"><h2><a href="#'. $shop_cat->slug .'" aria-controls="'. $shop_cat->slug .'" role="tab" data-toggle="tab">'. $shop_cat->name .'</a></li>';
              $ci++;
          }  
      endif; ?>     
    </ul>
    
    <div class="tab-content">
      <?php $shop_cats = get_terms( 'catalog_cat', array(
              'orderby'    => 'name',
              'hide_empty' => 0
            ));
          if ( $shop_cats && ! is_wp_error( $shop_cats ) ) : 
          $ci = 1;
          foreach ( $shop_cats as $shop_cat ) {
              if($ci == 1) {
                  $active = "active";
              } else {
                  $active = "";
              }

$ajax_cat_preff[] = $shop_cat->slug;              
wp_localize_script( 'sage/js', 'tian_ajax_params', array(
	'ajax_cat_preff' => $ajax_cat_preff
) );                         
              
              echo '<div role="tabpanel" class="tab-pane '. $active .'" id="'. $shop_cat->slug .'"><div class="row"><div class="col-md-4">';
              
              $slider_args = array (
            	           'post_type'      => array( 'catalog' ),
            	           'posts_per_page' => '-1',
                           'tax_query'      => array(
            	               array(
            	               	'taxonomy'  => 'catalog_cat',
            	               	'field'     => 'slug',
            	               	'terms'     => $shop_cat->slug),
            	           ),
              );
              $tian_cat_one = new WP_Query( $slider_args );
              if ( $tian_cat_one->have_posts() ) {
              $z = 1;        
              $count_shop = wp_count_posts('catalog');
              $published_shop = $count_shop->publish; ?>                   
        <div id="carousel-products-<?php echo $shop_cat->slug; ?>" class="carousel slide carousel-products" data-ride="carousel">
          <!-- Wrapper for slides -->  
          <div class="carousel-inner" role="listbox">
        	<?php while ( $tian_cat_one->have_posts() ) {
              $tian_cat_one->the_post(); 
                if(($z + 3) % 4 == 0) {
                    echo '<div class="item';
                    if($z == 1){ echo ' active'; }
                    echo '"><div class="row">';
                }
                echo '<div class="col-sm-3"><a class="thumbnail link-'. $shop_cat->slug .'" rel="'. get_the_ID() .'">';
                if ( has_post_thumbnail() ) {
        	        the_post_thumbnail('thumbnail');
                } 
                echo '</a><p><a class="link-'. $shop_cat->slug .'" rel="'. get_the_ID() .'">';
                the_title();
                echo '</a></p></div>';
                if(($z % 4 == 0) || ($z == $published_shop)) {
                    echo '</div></div>';
                } $z++;
            } ?>      
          </div>
          <!-- Controls -->
          <a class="left carousel-control" href="#carousel-products-<?php echo $shop_cat->slug; ?>" role="button" data-slide="prev">
            <span class="icon-prev" aria-hidden="true"></span>
            <span class="sr-only">Назад</span>
          </a>
          <a class="right carousel-control" href="#carousel-products-<?php echo $shop_cat->slug; ?>" role="button" data-slide="next">
            <span class="icon-next" aria-hidden="true"></span>
            <span class="sr-only">Вперед</span>
          </a>
        </div>               
        <?php } else { }
        wp_reset_postdata(); 
              
    echo '</div></div>'; 
              
    echo '<div id="product-content-'. $shop_cat->slug .'" class="product-content">';
        $args = array (
        	'post_type'              => array( 'catalog' ),
        	'posts_per_page'         => '1',
            'tax_query' => array(
        	    array(
        	    	'taxonomy' => 'catalog_cat',
        	    	'field'    => 'slug',
        	    	'terms'    => $shop_cat->slug
        	    ),
        	),
        );
              
        $tian_main_one = new WP_Query( $args );
        if ( $tian_main_one->have_posts() ) {   
          while ( $tian_main_one->have_posts() ) {
        		$tian_main_one->the_post(); 
                get_template_part('templates/content', 'catalog'); 
          }
        } else { }
        wp_reset_postdata();
        
        echo '</div></div>';
              
          $ci++;
          }  
      endif; ?> 
	</div>
  </div><!-- /.wrap -->   
</section>

<section id="about">
  <div class="page-header">
    <h2 class="page-header">О компании</h2>    
  </div>    
  <div class="wrap container" role="document">
    <div class="content row">  
      <?php dynamic_sidebar('sidebar-about'); ?>   
    </div><!-- /.content -->
    <div class="row">
       <div class="col-md-10 col-md-offset-1 desc-table">
          <?php dynamic_sidebar('sidebar-about-bottom'); ?> 
       </div>
    </div>           
  </div><!-- /.wrap -->     
</section>

<section id="partners" class="white">
  <div class="page-header">
    <h2 class="page-header">Наши партнеры</h2>    
  </div>    
  <div class="wrap container" role="document">
    <div class="content row">  
      <div class="col-md-8">
        <div class="row">
          <?php $args = array (
                     	'post_type'              => array( 'partners' ),
                     	'posts_per_page'         => '-1',
                     	'order'                  => 'ASC',
                     	'orderby'                => 'title',
                );
          $partners_query = new WP_Query( $args );
          if ( $partners_query->have_posts() ) {
	        while ( $partners_query->have_posts() ) {
	          $partners_query->the_post();
              $terms = get_the_terms( get_the_ID(), 'region' );
              if ( $terms && ! is_wp_error( $terms ) ) : 
                $region_links = array(); 
                foreach ( $terms as $term ) {
                  $region_links[] = $term->slug;
                }                             
                $on_region = join( " ", $region_links );
              endif;
              echo '<div class="col-md-6 partner '. $on_region .'"><div class="media">';
              echo '<div class="media-left"><a>';
              if ( has_post_thumbnail() ) {
	            the_post_thumbnail('thumbnail', array('class' => 'media-object'));
              }          
              echo '</a></div>';
              echo '<div class="media-body">';
              the_excerpt();
              echo '</div></div></div>';
	        }
          } else { }
          wp_reset_postdata();  ?>               
        </div>
      </div>         
      <div class="col-md-4">
        <div class="region-list clearfix">
          <p class="show-regions">Выберите регион</p>
          <ul>
            <?php $regions = get_terms( 'region', array(
                    'orderby'    => 'name',
                    'hide_empty' => 0
                  ));
                if ( $regions && ! is_wp_error( $regions ) ) : 
                foreach ( $regions as $region ) {
                    echo '<li class="'. $region->slug .'">'. $region->name .'</li>';
                }  
                endif;
            ?>
          </ul> 
        </div>  
      </div>
    </div><!-- /.content -->
  </div><!-- /.wrap -->     
</section>

<section id="news">
  <div class="page-header">
    <h2 class="page-header">Новости</h2>    
  </div>    
  <div class="wrap container" role="document">  
    <?php $args = array (
    	          'posts_per_page'  => '-1',
          );
          $tian_news = new WP_Query( $args );
          if ( $tian_news->have_posts() ) {
          $i = 1;        
          $count_posts = wp_count_posts();
          $published_posts = $count_posts->publish;    
    ?>
    <div id="carousel-news" class="carousel slide">
      <div class="carousel-inner" role="listbox">
	    <?php while ( $tian_news->have_posts() ) {
		  $tian_news->the_post(); 
            if(($i + 2) % 3 == 0) {
                echo '<div class="item';
                if($i == 1){ echo ' active'; }
                echo '"><div class="row">';
            }
            echo '<div class="col-sm-4"><a class="thumbnail">';
            if ( has_post_thumbnail() ) {
	            the_post_thumbnail('thumbnail', array('class' => 'center-block img-responsive'));
            } 
            echo '</a><div class="news-content">';
            the_content();
            echo '</div><a class="news-show">Читать далее...</a>';
            echo '</div>';
            if(($i % 3 == 0) || ($i == $published_posts)) {
                echo '</div></div>';
            } $i++;
	    } ?>
      </div>
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-news" role="button" data-slide="prev">
        <span class="icon-prev" aria-hidden="true"></span>
        <span class="sr-only">Назад</span>
      </a>
      <a class="right carousel-control" href="#carousel-news" role="button" data-slide="next">
        <span class="icon-next" aria-hidden="true"></span>
        <span class="sr-only">Вперед</span>
      </a>
    </div>                                    
    <?php } else { }
    wp_reset_postdata(); ?>  
  </div><!-- /.wrap -->     
</section>

<section id="contacts" class="white">
  <div class="page-header">
    <h2 class="page-header">Контакты</h2>    
  </div>    
  <div class="wrap container" role="document">
    <div class="row map">
      <script type="text/javascript" charset="utf-8" src="https://api-maps.yandex.ru/services/constructor/1.0/js/?sid=7EAVjHCxyMnQIbv7SqKXyWjBJVNuCw0G&width=100%&height=400&lang=ru_RU&sourceType=constructor"></script>
    </div>
    <div class="row">
      <div class="col-md-4">
        <h2>Адрес</h2>
        <p>109444, г. Москва,<br>Сормовский проезд 11/7, стр.1</p>
        <p><b>Телефон:</b> 8 (495) 781 90 93</p>
        <p><b>E-mail:</b> info@tianrun-group.com</p>
        <p><b>GPS - координаты:</b><br>
           Широта<br>
           55°42′25″N (55.706873) <br>
           Долгота<br>
           37°48′10″E (37.802643)</p>
      </div>
      <div class="col-md-8">
        <h2>Как добираться:</h2>
        <p><b>На машине:</b><br>Съезд с МКАД на Рязанский проспект. Проехать 2.5 км. Въезд на круговой перекресток, третий поворот направо. Проехать 1 км по ул. Академика Скрябина. Далее  повернуть  налево,  на Сормовский проезд.<br>Ехать  400 м до  здания мебельной фабрики  «Кузьминки».</p>
        <p>Съезд с МКАД на Волгоградский проспект. Проехать 2.1 км по Волгоградскому проспекту. Поворот направо (второй светофор), под стрелку. Проехать 800 м по ул. Академика Скрябина. Поворот налево на Сормовский проезд.<br>Ехать  400 м до  здания мебельной фабрики  «Кузьминки».</p>
        <p><b>Общественным транспортом:</b><br>Метро Выхино<br>Выход из метро в сторону Государственного университета управления. Прямо пешком 350 м. Перейти Рязанский проспект. Маршрутное такси 291М до остановки  «Автосалон Автогермес» (5 минут). Направо 300 м.<br>Здание мебельной фабрики «Кузьминки».</p>
        <p>Метро Рязанский проспект<br>Автобусы:  51, 208 или маршрутное такси 351М до остановки Ферганская ул. 5. Направо 400 м.<br>Здание мебельной фабрики «Кузьминки».  </p>
      </div>
    </div>
    <div class="row contact-form" id="contact-form">
      <div class="col-md-4 col-md-offset-4">
        <?php echo do_shortcode('[contact-form-7 id="54" title="contacts"]'); ?>
      </div>
    </div>  
  </div><!-- /.wrap -->     
</section>