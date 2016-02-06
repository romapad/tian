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
    <a href="" class="show-shemes btn btn-default btn-sm">Посмотреть схемы</a>   
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
                <div class="pict-gallery row">
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-1.png" alt=""></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-2.png" alt=""></div>
                    <div class="col-md-4"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/ikon-2-3-3.png" alt=""></div>
                </div>    
                <div class="pict-gallery row">    
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
                 Получить консультацию по ценам, а также приобрести продукцию в России Вы можете, позвонив в офис компании<br>
                 ООО "ТР Системы" по тел: 8 (495) 781-90-93, или написав на почту info@tianrun-group.com.
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
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-1.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-2.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-3.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-4.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-5.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-6.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-1.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-2.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-1.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
                 <div class="col-md-6">
                     <div class="media">
                         <div class="media-left"><a href=""><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/crugi-4-2.png" alt="" class="media-object"></a></div>
                         <div class="media-body">наименование,<br> 
                         адрес,<br>
                         телефон,<br> 
                         сайт,<br>
                         адрес эл.почты</div>
                     </div>
                 </div>
             </div>
          </div>         
          <div class="col-md-4">

          </div>
      </div><!-- /.content -->
      
    </div><!-- /.wrap -->     
</section>


<section id="news">
    <div class="page-header">
        <h2 class="page-header">Новости</h2>    
    </div>    
    <div class="wrap container" role="document">
<div id="carousel-news" class="carousel slide" data-ride="carousel">
  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
     <div class="row">
         <div class="col-sm-4"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/strelka-5-3.png" alt="Новость 1" class="center-block img-responsive"></a><p>Доллар достигал в 11:58 мск отметки 85,036 рубля (+3,41 руб. к отметке предыдущего закрытия). Спустя 4-5 минут евро достиг 93,3 рубля (+4,4 руб.), доллар в этот момент стоил 85,6 рубля (+4,2 руб.). К 12:00 мск средний курс покупки/продажи наличного доллара в банках Москвы составил 81.33/85.46 рубля. <a href="">Читать далее...</a></p></div>
         <div class="col-sm-4"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/strelka-5-4.png" alt="Новость 2"></a><p>Необходимости обсуждать вопрос Крыма с украинскими властями нет, заявил пресс-секретарь президента России Дмитрий Песков, передает "Интерфакс". По его словам, этого вопроса не существует.<a href="">Читать далее...</a></p></div>
         <div class="col-sm-4"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/strelka-5-5.png" alt="Новость 3"></a><p>Водитель снегоуборщика Владимир Мартыненко, ключевой фигурант дела об авиакатастрофе самолета Falcon, в которой погиб владелец нефтяной компании Total, признал вину после предъявления ему окончательного обвинения, сообщил его адвокат. <a href="">Читать далее...</a></p></div>
     </div>
    </div> 
    <div class="item">
     <div class="row">
         <div class="col-sm-4"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/strelka-5-3.png" alt="Новость 1"></a><p>Доллар достигал в 11:58 мск отметки 85,036 рубля (+3,41 руб. к отметке предыдущего закрытия). Спустя 4-5 минут евро достиг 93,3 рубля (+4,4 руб.), доллар в этот момент стоил 85,6 рубля (+4,2 руб.). К 12:00 мск средний курс покупки/продажи наличного доллара в банках Москвы составил 81.33/85.46 рубля. <a href="">Читать далее...</a></p></div>
         <div class="col-sm-4"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/strelka-5-4.png" alt="Новость 2"></a><p>Необходимости обсуждать вопрос Крыма с украинскими властями нет, заявил пресс-секретарь президента России Дмитрий Песков, передает "Интерфакс". По его словам, этого вопроса не существует.<a href="">Читать далее...</a></p></div>
         <div class="col-sm-4"><a href="" class="thumbnail"><img src="<?php echo get_stylesheet_directory_uri(); ?>/dist/images/strelka-5-5.png" alt="Новость 3"></a><p>Водитель снегоуборщика Владимир Мартыненко, ключевой фигурант дела об авиакатастрофе самолета Falcon, в которой погиб владелец нефтяной компании Total, признал вину после предъявления ему окончательного обвинения, сообщил его адвокат. <a href="">Читать далее...</a></p></div>
     </div>
    </div>      
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
           Съезд с МКАД на Рязанский проспект. Проехать 2.5 км. Въезд на круговой перекресток, третий поворот направо. Проехать 1 км по ул. Академика Скрябина. Далее  повернуть  налево,  на Сормовский проезд. Ехать  400 м до  здания мебельной фабрики  «Кузьминки».
           </p>

           <p>
           Съезд с МКАД на Волгоградский проспект. Проехать 2.1 км по Волгоградскому проспекту. Поворот направо (второй светофор), под стрелку. Проехать 800 м по ул. Академика Скрябина. Поворот налево на Сормовский проезд.  Ехать  400 м до  здания мебельной фабрики  «Кузьминки».
           </p>

           <p><b>Общественным транспортом:</b><br>
           Метро Выхино<br>
           Выход из метро в сторону Государственного университета управления. Прямо пешком 350 м. Перейти Рязанский проспект. Маршрутное такси 291М до остановки  «Автосалон Автогермес» (5 минут). Направо 300 м. Здание мебельной фабрики «Кузьминки».
           </p>

           <p>
           Метро Рязанский проспект<br>
           Автобусы:  51, 208 или маршрутное такси 351М до остановки Ферганская ул. 5. Направо 400 м. Здание мебельной фабрики «Кузьминки».  
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