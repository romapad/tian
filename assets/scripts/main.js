/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  // Use this variable to set up the common and page specific functions. If you
  // rename this variable, you will also need to rename the namespace below.
  var Sage = {
    // All pages
    'common': {
      init: function() {
        // JavaScript to be fired on all pages

            var nav = $('header.banner');
            $(window).scroll(function () {
                if ($(this).scrollTop() > 60) {
                    //nav.addClass("f-nav");
                    nav.addClass("f-nav").fadeIn().animate({paddingBottom:"10px", paddingTop: "5px"}, 200);
                } else {
                    //nav.removeClass("f-nav");
                    nav.removeClass("f-nav").animate({paddingBottom:"15px", paddingTop: "10px"}, 200);
                }
            });
            
$(document).ready(function () {
    var menuHeight = $('header.banner').height(); 
    $('#menu-main li a').click(function(e){

            var content = $(this).attr('href');
        
            var checkURL = content.match(/^#([^\/]+)$/i);
            if(checkURL){
                e.preventDefault();
                var goPosition = $(content).offset().top - (menuHeight + 10);

                $('html,body').animate({ scrollTop: goPosition}, 'slow'); 

            }
    });   
          
    var toggler = $('.news-show');  
    toggler.click(function(){
      var news_content = $(this).siblings('.news-content'); 
      var news_hide = $(this).siblings('.news-hide'); 
      if(news_content.hasClass('news-hide')) {
        news_content.animate({height:100},500).removeClass('news-hide');
        $(this).text('Читать далее...');  
      } else { 
        news_content.animate({height:'100%'},500).addClass('news-hide');
        $(this).text('Свернуть');            
      }    
    });    
    
    var region_obj = $('.region-list ul li');
    region_obj.click(function(){
        var partner = $('#partners .partner'); 
        partner.show();
        var reg_slug = $(this).attr('class'); 
        partner.not("." + reg_slug).toggle();  
        region_obj.removeAttr('id', 'selected');        
        $(this).attr('id', 'selected');        
    });
    $('.show-regions').click(function(){
        $('#partners .partner').show(); 
    });
      

    $( 'a.product-link' ).off( 'click' ).on( 'click', function( e ) { 
        /** Prevent Default Behaviour */
        e.preventDefault();
        /** Get Post ID */
        var post_id = $(this).attr( 'rel' ); 
        /** Ajax Call */
        $.ajax({
            cache: false,
            timeout: 8000,
            url: php_array.admin_ajax,
            type: "POST",
            data: ({ action:'theme_post_example', id:post_id }),
            beforeSend: function() {                    
                $( '#product-content-one' ).html( '<div class="row"><div class="col-md-8 col-md-offset-4">Загрузка...</div></div>' );
                
            },
            success: function( data, textStatus, jqXHR ){
                var $ajax_response = $( data );
                $( '#product-content-one' ).html( $ajax_response ); 
            }, 
            error: function( jqXHR, textStatus, errorThrown ){
                console.log( 'The following error occured: ' + textStatus, errorThrown );   
            }, 
            complete: function( jqXHR, textStatus ){
            }
        });
    });                    
});
               
         

      },
      finalize: function() {
        // JavaScript to be fired on all pages, after page specific JS is fired
      }
    },
    // Home page
    'home': {
      init: function() {
        // JavaScript to be fired on the home page
      },
      finalize: function() {
        // JavaScript to be fired on the home page, after the init JS
      }
    },
    // About us page, note the change from about-us to about_us.
    'about_us': {
      init: function() {
        // JavaScript to be fired on the about us page
      }
    }
  };

  // The routing fires all common scripts, followed by the page specific scripts.
  // Add additional events for more control over timing e.g. a finalize event
  var UTIL = {
    fire: function(func, funcname, args) {
      var fire;
      var namespace = Sage;
      funcname = (funcname === undefined) ? 'init' : funcname;
      fire = func !== '';
      fire = fire && namespace[func];
      fire = fire && typeof namespace[func][funcname] === 'function';

      if (fire) {
        namespace[func][funcname](args);
      }
    },
    loadEvents: function() {
      // Fire common init JS
      UTIL.fire('common');

      // Fire page-specific init JS, and then finalize JS
      $.each(document.body.className.replace(/-/g, '_').split(/\s+/), function(i, classnm) {
        UTIL.fire(classnm);
        UTIL.fire(classnm, 'finalize');
      });

      // Fire common finalize JS
      UTIL.fire('common', 'finalize');
    }
  };

  // Load Events
  $(document).ready(UTIL.loadEvents);

})(jQuery); // Fully reference jQuery after this point.
