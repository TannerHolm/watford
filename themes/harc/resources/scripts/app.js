import {domReady} from '@roots/sage/client';
// import ResponsiveVideoPoster from 'responsive-video-poster';

// const responsiveVideoPosterDefault = ResponsiveVideoPoster({ 
//   selector: '#responsive-video-poster--default' 
// });
/**
 * app.main
 */
const main = async (err) => {
  if (err) {
    // handle hmr errors
    console.error(err);
  }

  var vidSrc = $('.home-video').data('src');
  var video = $('.home-video');

  if(video.length) {
    var req = new XMLHttpRequest();
    req.open('GET', vidSrc, true);
    req.responseType = 'blob';
  
    req.onload = function() {
      // Onload is triggered even on 404
      // so we need to check the status code
      if (this.status === 200) {
          var videoBlob = this.response;
          var vid = URL.createObjectURL(videoBlob); // IE10+
          // Video is now downloaded
          // and we can set it as source on the video element
          // video.src = vid;
          video.attr('src', vid);
          console.log('test');
      }
    }

    
    req.onerror = function() {
      // Error
    }
    
    req.send();
    
  }


  $('.menu-item-has-children').on('click', function(e){
        $(this).find('ul.sub-menu').slideDown();
    });

    $('a.menu-trigger').on('click', function(e){
        $('section.navigation').fadeIn();
    });

    $('a.close').on('click', function(e){
        $('section.navigation').fadeOut();
    });


    $('.services .content-item').on('click', function(e){
      var content = $(this).find('.content');
      var svg = $(this).find('svg.accordion');
      $(this).find('svg').addClass('active')
      $('.content').not(content).slideUp(); 
      $('svg.accordion').not(svg).removeClass('active'); 
      $(this).find('.content').slideDown();
  });
    $('.first .content-title').trigger('click');
    // application code
  };
  
  /**
   * Initialize
 *
 * @see https://webpack.js.org/api/hot-module-replacement
 */
domReady(main);
import.meta.webpackHot?.accept(main);
