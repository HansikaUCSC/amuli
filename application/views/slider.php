<!DOCTYPE html>
<html>
<head>
	<!-- import css files -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/slider.css">
</head>
<body>
<!-- Carousel -->
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <!-- Carousel indicators -->
      <ol class="carousel-indicators">
        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
        <li data-target="#myCarousel" data-slide-to="1"></li>
        <li data-target="#myCarousel" data-slide-to="2"></li>
      </ol>
       <!-- Wrapper for carousel items -->
      <div class="carousel-inner" role="listbox">
        <div class="item active">
          <img class="first-slide" src="<?php echo base_url()?>assets/images/first_slider.JPG" alt="First slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>WELCOME TO AMULI</h1>
              <p>"We bring colors to your world."</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="second-slide" src="<?php echo base_url()?>assets/images/first_slider.JPG" alt="Second slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Are you want to find the hair stylists??</h1>
              <p>You can find the best hair stylists...</p>
            </div>
          </div>
        </div>
        <div class="item">
          <img class="third-slide" src="<?php echo base_url()?>assets/images/first_slider.JPG" alt="Third slide">
          <div class="container">
            <div class="carousel-caption">
              <h1>Want to rate hair stylists?</h1>
              <p>You can easily give the feedback and rating to the hair stylist's service.</p>
            </div>
          </div>
        </div>
      </div>
      <!-- Carousel controls -->
      <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>

</body>
</html>