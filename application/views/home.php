<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AMULI | Home</title>

	<!--bootstrap css-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

    <!-- import css files -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/css/homestyle.css">
	
</head>

<body>
	<div class="container-fluid">
  		<div class="row">
    		<div class="col-md-4" id="sec1">
                <img class="image_home" src="<?php echo base_url()?>assets/images/pink-hair.jpg">      
            </div>
    		<div class="col-md-8" id="sec1">
    			<div class="directory-searcher">
                    <div>
                        <center>
                            <p class="para_1">Find a Hair Stylist</p>
                        </center>
                    </div>
    				<div class="container-fluid">
                        <form action="<?php echo base_url();?>index.php/SearchResult/search_user" method="post">
        					<div class="row" id="search-row">
                                <center>
            						<div class="col-md-3 col-sm-3 col-xs-12" id="search_1">
            							<input class="form-control" id="search_input_1" type="text" name="name" placeholder="Name">
            						</div>
                                </center>
                                <center>
            						<div class="col-md-3 col-sm-3 col-xs-12" id="search_2" >
                                        <select class="form-control " id="search_input" name="location">
                                           <option value="">select city</option>
                                           <?php foreach ($cities as $city) { ?>
                                              <option value="<?php echo $city['city_name']?>"><?php echo $city['city_name']?></option>
                                           <?php } ?> 
                                        </select>
            						</div>
                                </center>
                                <center>
            						<div class="col-md-3 col-sm-3 col-xs-12" id="search_3">
            							<!-- <input class="search_input" type="text" name="skill" placeholder="Skills"> -->
                                        <select class="form-control " id="search_input" name="skill">
                                           <option value="">select skill</option>
                                           <?php foreach ($skills as $skill) { ?>
                                              <option value="<?php echo $skill['skill_name']?>"><?php echo $skill['skill_name']?></option>
                                           <?php } ?> 
                                        </select>
            						</div>
                                </center>
                                <center>
            						<div class="col-md-3 col-sm-3 col-xs-12" id="search_button">
                                        <input id="search_button_1" type="submit" value="Search">
            						</div>
                                </center>
        					</div>
                        </form>
    				</div>
    			</div>
    		</div>
  		</div>
  	</div>
</body>
</html>