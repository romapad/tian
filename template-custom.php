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
    </div>
      </div><!-- /.content -->
    </div><!-- /.wrap -->     
</section>

<section id="catalog" class="white"> 
    <div class="wrap container" role="document">    
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active col-md-4"><h2><a href="#aluminy" aria-controls="aluminy" role="tab" data-toggle="tab">Алюминиевые<br>радиаторы</a></h2></li>
        <li role="presentation" class="col-md-4"><h2><a href="#bimetall" aria-controls="bimetall" role="tab" data-toggle="tab">Биметаллические<br>радиаторы</a></h2></li>
        <li role="presentation" class="col-md-4"><h2><a href="#assets" aria-controls="assets" role="tab" data-toggle="tab">Комплектующие<br>для радиаторов</a></h2></li>
    </ul>
    <div class="tab-content">
        <div role="tabpanel" class="tab-pane active" id="aluminy">
           <div class="row">
            <div class="col-md-4">
               
<div id="carousel-products" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <div class="row">
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-2.png" alt="TL 300"></a><p><a href="">TL 300</a></p></div>
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-3.png" alt="TL 500"></a><p><a href="">TL 500</a></p></div>
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-4.png" alt="POLO plus 350"></a><p><a href="">POLO plus 350</a></p></div>
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-5.png" alt="POLO plus 500"></a><p><a href="">POLO plus 500</a></p></div>
     </div>
    </div>
    <div class="item">
     <div class="row">
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-2.png" alt="TL 300"></a><p><a href="">TL 300</a></p></div>
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-3.png" alt="TL 500"></a><p><a href="">TL 500</a></p></div>
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-4.png" alt="POLO plus 350"></a><p><a href="">POLO plus 350</a></p></div>
         <div class="col-sm-3"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-5-5.png" alt="POLO plus 500"></a><p><a href="">POLO plus 500</a></p></div>
     </div>
    </div>    
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-products" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Назад</span>
  </a>
  <a class="right carousel-control" href="#carousel-products" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Вперед</span>
  </a>
</div>               

 <div class="product-image">
<div id="carousel-image" class="carousel slide" data-ride="carousel" data-interval="false">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/2-1.png" alt="TL 500">  
    </div>
    <div class="item">
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/2-1.png" alt="TL 500">
    </div>    
  </div>
  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-image" role="button" data-slide="prev">
    <span class="icon-prev" aria-hidden="true"></span>
    <span class="sr-only">Назад</span>
  </a>
  <a class="right carousel-control" href="#carousel-image" role="button" data-slide="next">
    <span class="icon-next" aria-hidden="true"></span>
    <span class="sr-only">Вперед</span>
  </a>
</div>                  
</div>                              
                
            </div>
            <div class="col-md-4">
                <h2 class="prod-title">TL 500</h2>
                <div class="short-desc">
                    <p>Алюминиевый секционный радиатор премиум-класса с нижней заглушкой из нержавеющей стали выполненный методом литья под высоким давлением. Радиаторы TL разработаны с учетом требований, предъявляемых к радиаторам отопления при эксплуатации их на территории России и стран СНГ. Конструкция радиаторов соответствует требованиям ГОСТ 31311 – 2005.</p>
                    <p>Радиаторы серии TL разработаны с учетом требований эксплуатации в автономных системах отопления, применяемых в загородных домах и быстровозводимых зданиях, а также и в многоквартирных домах с собственными котельными и системами отопления. Нижняя заглушка с резьбой 1 дюйм обеспечивает возможность нижнего подключения для скрытого монтажа и облегчает обслуживание радиатора.</p>
                </div>
                <div class="pict-gallery">
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-1.png" alt=""></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-2.png" alt=""></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-3.png" alt=""></div>   
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-4.png" alt=""></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-5.png" alt=""></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-6.png" alt=""></div>
                </div>
                <div class="btngroup">
                    <a href="" class="btn btn-default btn-sm">Скачать чертежи <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a><br>
                    <a href="" class="btn btn-default btn-sm">Скачать сертификаты <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a><br>
                    <a href="" class="btn btn-default btn-sm">Рекомендации по применению <span class="glyphicon glyphicon-save" aria-hidden="true"></span></a><br>
                </div>
            </div>
            <div class="col-md-4">
                <div class="long-desc">
                   <h3>Инновационная конструкция</h3>
                    <p>Секции радиатора выполнены из алюминиевого сплава ADC 12 методом литья под высоким давлением. При формировании нижней, донной части секции радиатора на серии TL применена стальная резьбовая заглушка (уникальное решение Tianrun, защищенное патентом). Это позволило существенно повысить надежность узла, прочность и долговечность радиатора в целом. Появилась возможность нижнего подключения к системе отопления, а также устанавливать термостатический клапан и др. присоединительную арматуру в любой секции радиатора и, при необходимости, производить регламентные работы (прочистку) радиатора без его демонтажа.</p>
                    <h3>Повышенная теплоотдача</h3>
                    <p>За счет применения высококачественного алюминиевого сплава и оптимизированной структуры оребрения, радиаторы серии TL обладают высокой теплоотдачей. Два основных типоразмера обеспечивают гибкий выбор оптимального решения для конкретного проекта. Высокие показатели теплоотдачи радиатора подтверждаются результатами проведенных испытаний.</p>
                    <h3>Гарантия</h3>
                    <p>Гарантийный срок эксплуатации радиатора отопления – не менее 10 лет при условии использования оригинальных комплектующих и соблюдении правил монтажа и эксплуатации отопительных приборов согласно требованиям  СНиП 2.04.05-91 и СНиП 3.05.01-85 «Внутренние санитарно-технические системы».</p>
                </div>
                <a href="" class="btn btn-default btn-sm order-btn">Заказать</a>
            </div>
           </div>
           <div class="row">
            <div class="col-md-10 col-md-offset-1 desc-table">
                <table class="table table-bordered">
                    <tr>
                        <td>Модель</td>
                        <td>Глубина, мм</td>
                        <td>Высота, мм</td>
                        <td>Ширина, мм</td>
                        <td>Межосевое расстояние, мм</td>
                        <td>Вес, кг.</td>
                        <td>Теплоотдача, t=70.C, Вт.</td>
                    </tr>
                    <tr>
                        <td>TL 300</td>
                        <td>95</td>
                        <td>368</td>
                        <td>82</td>
                        <td>300</td>
                        <td>1000*</td>
                        <td>145**</td>
                    </tr>
                    <tr>
                        <td>TL 500</td>
                        <td>95</td>
                        <td>568</td>
                        <td>82</td>
                        <td>500</td>
                        <td>1450*</td>
                        <td>195**</td>
                    </tr>
                </table>
            </div>
           </div>    
        </div>
        <div role="tabpanel" class="tab-pane" id="bimetall">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
        <div role="tabpanel" class="tab-pane" id="assets">
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
            <div class="col-md-4"></div>
        </div>
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
<?php // WP_Query arguments
$args = array (
	'post_type'              => array( 'partners' ),
	'posts_per_page'         => '-1',
	'order'                  => 'ASC',
	'orderby'                => 'title',
);

// The Query
$partners_query = new WP_Query( $args );

// The Loop
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
} else {
	// no posts found
}

// Restore original Post Data
wp_reset_postdata();  ?>               

             </div>
          </div>         
          <div class="col-md-4">
            <div class="region-list clearfix">
                <p class="show-regions">Выберите регион</p>

              <ul>
              <?php 
                  $regions = get_terms( 'region', array(
                      'orderby'    => 'name',
                      'hide_empty' => 0
                  ) );
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
    
    <?php // WP_Query arguments
$args = array (
	'posts_per_page'         => '-1',
);

// The Query
$tian_news = new WP_Query( $args );

// The Loop
if ( $tian_news->have_posts() ) {
$i = 1;        
$count_posts = wp_count_posts();
$published_posts = $count_posts->publish;    
?>
<div id="carousel-news" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
	<?php while ( $tian_news->have_posts() ) {
		$tian_news->the_post(); 
		// do something
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
<?php } else {
	// no posts found
}

// Restore original Post Data
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
           <p><b>На машине:</b><br>
           Съезд с МКАД на Рязанский проспект. Проехать 2.5 км. Въезд на круговой перекресток, третий поворот направо. Проехать 1 км по ул. Академика Скрябина. Далее  повернуть  налево,  на Сормовский проезд.<br>Ехать  400 м до  здания мебельной фабрики  «Кузьминки».
           </p>

           <p>
           Съезд с МКАД на Волгоградский проспект. Проехать 2.1 км по Волгоградскому проспекту. Поворот направо (второй светофор), под стрелку. Проехать 800 м по ул. Академика Скрябина. Поворот налево на Сормовский проезд.<br>Ехать  400 м до  здания мебельной фабрики  «Кузьминки».
           </p>

           <p><b>Общественным транспортом:</b><br>
           Метро Выхино<br>
           Выход из метро в сторону Государственного университета управления. Прямо пешком 350 м. Перейти Рязанский проспект. Маршрутное такси 291М до остановки  «Автосалон Автогермес» (5 минут). Направо 300 м.<br>Здание мебельной фабрики «Кузьминки».
           </p>

           <p>
           Метро Рязанский проспект<br>
           Автобусы:  51, 208 или маршрутное такси 351М до остановки Ферганская ул. 5. Направо 400 м.<br>Здание мебельной фабрики «Кузьминки».  
           </p>
 
          </div>
      </div>
      <div class="row contact-form">
          <div class="col-md-4 col-md-offset-4">
              <?php echo do_shortcode('[contact-form-7 id="54" title="contacts"]'); ?>
          </div>
      </div>
      
    </div><!-- /.wrap -->     
</section>