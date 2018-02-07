  $(document).ready(function () {

    let fixJump = $('html').outerHeight();
    $('.landing, .wrapper').css('height', fixJump);

    $('body').animate({
      opacity: 1
    }, 700);

    $(document).on("scroll",function(event){
      if($(document).scrollTop()>100){
          $("#logo").removeClass("large").addClass("small");
      } else{
          $("#logo").removeClass("small").addClass("large");
      }

    });

    $('.squared').on('click', function () {
      var $source = $(this).attr('src');

      $(".big-image").css({
        'background-image': "url('" + $source + "')",
        'z-index': '9999'
      });

      $('.big-image').animate({
        opacity: 1
      }, 400);

      $("body").css("overflow", "hidden");
    });

    $('.big-image').on('click', function () {
      $('.big-image').animate({
        opacity: 0
      }, 400, function () {
        $(".big-image").css({
          'background-image': 'none',
          'z-index': '-9999'
        });
      });

      $("body").css("overflow", "visible");
    });

    var mySwiper = new Swiper ('.swiper-container', {
      // Optional parameters
      // Disable preloading of all images
      preloadImages: false,
      // Enable lazy loading
      lazy: true,
      // Navigation arrows
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      }
    });

    $('.nav-link').on('click',function(event){
      event.preventDefault();
      let target = $(this).data('target');
      $('body').animate({
        opacity: 0
      },500, function (){
        $(location).attr('href', target);
      });
         
    })

    $('.lazy').lazy({
      threshold: 10,
      effect: 'fadeIn',
      effectTime: 500
    })

    $('.youtube').lazy({
      visibleOnly: true,
      threshold: 100,
      effect: 'fadeIn',
      effectTime: 500,

      youtubeLoader: function(element) {

        var url = 'https://www.youtube.com/embed/',
        frame = $('<iframe />')
        frame.attr('frameborder', 0)
        frame.attr('class', 'embed-responsive-item')
        frame.attr('src', url + element.data("video"));
        
        element.append(frame).load();
        
      }
    });
  });