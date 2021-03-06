<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">
  

  <title>Nikita</title>
</head>

<body class="">
  <div class="wrapper skewed">
    <div class="layer top">
      <div class="content-wrap">  
        <div class="image image-top">
        </div>   
        <div class="content-body">
          <h1 class="display-4 text-light">CAPTURE</h1>
        </div>  
      </div>
    </div>
    <div class="layer bottom">
      <div class="content-wrap">
        <div class="content-body">
          <h1 class="display-4 text-light">EXPRESS</h1>
        </div>
        <div class="image image-bot">        
        </div>    
      </div>
    </div>
    <div class="handle">
      <img id="logo" src="img/logo.png" alt="">
    </div>
  </div>
  <!-- Bootstrap core JavaScript
	================================================== -->
  <!-- Placed at the end of the document so the pages load faster -->
  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script>

    var ua = window.navigator.userAgent;
    var iOS = !!ua.match(/iPad/i) || !!ua.match(/iPhone/i);
    var webkit = !!ua.match(/WebKit/i);
    var iOSSafari = iOS && webkit && !ua.match(/CriOS/i);

    $(document).ready(function(){
      if (iOSSafari){
        var htmlHeight = $('html').height();
        $('html, body, .wrapper, .layer, .content-wrap, .image').css('height', htmlHeight - 69);
      }
      var viewportWidth = $("body").innerWidth();
      $('.image-top').on('click',function(){
        
        $('.top').animate({     
        width: viewportWidth + 2000
        }, 700, function() {

          $('.bottom').css('opacity', 0);
          $('.top').animate({
          opacity: 0
          }, 200, function() { 

            $('#logo').animate({
              opacity: 0              
            }, 100, function() {

              $(location).attr('href','capture.html');
            });
          });
        });
      });
      $('.image-bot').on('click',function(){

        $('.top').animate({
        width: 0
        }, 700, function() {

          $('.top').css('opacity', 0);
          $('.bottom').animate({
          opacity: 0
          }, 200, function() {

            $('#logo').animate({
              opacity:0
            }, 100, function(){
              $(location).attr('href','express.html');
            })
          });
        });
      })
    });
  </script>
</body>

</html>