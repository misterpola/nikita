<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/app.css">
  <link rel="stylesheet" href="css/swiper.min.css">

</head>

<body class="fade-in">
  <nav class="navbar navbar-expand-xs navbar-dark fixed-top">
      <a class="navbar-brand" href="#">
        <img class="large" id="logo" src="img/logo.png" alt="">
      </a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav">
        <span class="navbar-toggler-icon"></span>
      </button>
  </nav>
  <div class="collapse navbar-collapse" id="nav">
      <div class="">
        <div class="full navbar-nav text-center d-flex flex-column align-items-center justify-content-center">
          <a class="nav-item nav-link text-white" data-target="capture.php" href="#">CAPTURE</a>
          <a class="nav-item nav-link text-white" data-target="express.php" href="#">EXPRESS</a>
          <a class="nav-item nav-link text-white" data-target="contact.php" href="#">CONTACT</a>
        </div>
      </div>
  </div>
  <div class="container-fluid landing d-flex align-items-end justify-content-center">

  </div>
  <div class="arrowBounce"></div>
  <div class="big-image fixed-top"></div>
  <div class="images">

    <img class="lazy" data-src="img/4.jpg" alt="">
    <img class="lazy" data-src="img/6.jpg" alt="">
    <img class="lazy" data-src="img/1.jpg" alt="">

    <div class="card text-white">
      <img class="lazy card-img" data-src="img/3.jpg" alt="Card image">
      <div class="card-img-overlay d-flex flex-column justify-content-end">
        <h5 class="card-title">Photo title</h5>
        <p class="card-text">Photo text and description</p>
      </div>
    </div>

    <div>
      <img class="lazy squared" data-src="img/5.jpg" alt="">
      <img class="lazy squared" data-src="img/4.jpg" alt="">
    </div>

  </div>

  <!-- Slider main container -->
  <div class="swiper-container">
    <!-- Additional required wrapper -->
    <div class="swiper-wrapper">
      <!-- Slides -->

      <div class="swiper-slide"> 
        <div class="card">
          <div class="embed-responsive embed-responsive-16by9 youtube" data-loader="youtubeLoader" data-video="E7HbBrwN7TE">
            <div class="embed-responsive-item d-flex align-items-center justify-content-center">
              <h1 class="display-4"> Video loading </h1>
            </div>
          </div>
          <div class="card-body px-5 py-0">
            <h5 class="card-title text-center display-4 mb-2">Dubai</h5>
          </div>
        </div>
      </div>
      <div class="swiper-slide"> 
        <div class="card">
          <div class="embed-responsive embed-responsive-16by9 youtube" data-loader="youtubeLoader" data-video="Ld0MbF6yMvc">
            <div class="embed-responsive-item d-flex align-items-center justify-content-center">
              <h1 class="display-4"> Video loading </h1>
            </div>
          </div>
          <div class="card-body px-5 py-0">
            <h5 class="card-title text-center display-4 mb-2">Croatia</h5>
          </div>
        </div>
      </div>
    </div>
    <!-- If we need navigation buttons -->
    <div class="swiper-button-prev swiper-button-white"></div>
    <div class="swiper-button-next swiper-button-white"></div>
  </div>  
  <footer>
    <img src="img/logo.jpg" alt="">
    <a href="" class="text-light"> Web by Gonz </a>
  </footer>

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/bootstrap.bundle.js"></script>
  <script src="js/swiper.min.js"></script>
  <script src="js/jquery.lazy.min.js"></script>
  <script src="js/app.js"></script>

</body>

</html>