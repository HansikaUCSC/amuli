<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/testimonials.css">

</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-8 col-center m-auto">
            <h2>Testimonials</h2>
            
            <div id="myCarousel_1" class="carousel slide" data-ride="carousel">

                <!-- Carousel indicators -->
                 <ol class="carousel-indicators">
                    <li data-target="#myCarousel_1" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel_1" data-slide-to="1"></li>
                    <li data-target="#myCarousel_1" data-slide-to="2"></li>
                </ol> 

                <!-- Wrapper for carousel items -->
                 
                <div class="carousel-inner">
                     <?php
                     $i = 0;
                      foreach($use as $data1){?> 
                        
                        <?php if($i == 0){ ?>
                             <div class="item active">
                            <?php } else{ ?>
                    <div class="item">
                    <?php } ?>
                        <div class="img-box"><img src="<?php echo base_url()?><?php echo $data1['hs_prof_img']?>" alt=""></div>
                        <p class="testimonial"><?php echo $data1['testimonial']?></p>
                        <p class="overview"><b><?php echo $data1['hs_first_name']?>  <?php echo $data1['hs_last_name']?></b></p>
                    </div>
                    <?php  $i++;} ?>
                </div>
                

                <!-- Carousel controls -->
                <a class="carousel-control left carousel-control-prev" href="#myCarousel_1" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                </a>
                <a class="carousel-control right carousel-control-next" href="#myCarousel_1" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                </a>
            </div>
            
        </div>
    </div>
</div>
</body>
</html>                                                                 