<?php ?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AMULI | Search Result</title>

	<!--bootstrap css-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- import css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/search_result.css">

</head>
<body>

	<div class="row" id="filter_by">
		<div class="col-md-3 col-sm-3 col-xs-3" id="text_filter">
			Filter By...
		</div>
		<div class="col-md-9 col-sm-9 col-xs-9" id="text_search">
			Search Result
		</div>
	</div>
	<hr style="margin-top: 0px;">
	<div class="vl"></div>
	<div class="container-fluid">
		<div class="row">
			<!-- secondary search -->
			<div class="col-md-3 col-sm-3 col-xs-3">
				<form action="<?php echo base_url();?>index.php/Home/search_user" method="post">
				<!-- select skill -->
				
					<div class="filters" id="skill_req">Skill*</div>
					<select class="form-control input_filter " name="skill">
	                    <option value="">Select skills</option>
	                    <?php foreach ($skills as $skill) { ?>
	                    	<option value="<?php echo $skill['skill_name']?>"><?php echo $skill['skill_name']?></option>
	                    <?php } ?> 
	                </select>
					<br>
				
				<!-- select name -->
				<?php  if($search_ref[1] != null){ ?>
					<div class="filters">Name</div>
					<input class="input_filter" type="text" name="name" placeholder="<?php echo $search_ref[1] ?>">
					<br>
				<?php }else{ ?>
					<div class="filters">Name</div>
					<input class="input_filter" type="text" name="name" placeholder="Stylist Name">
					<br>
				<?php } ?>
				<!-- select location -->
				<?php  if($search_ref[2] != null){ ?>
					<div class="filters">City</div>
					<select class="form-control input_filter " name="location">
	                    <option value=""><?php echo $search_ref[2] ?></option>
	                    <?php foreach ($cities as $city) { ?>
	                    	<option value="<?php echo $city['city_name']?>"><?php echo $city['city_name']?></option>
	                    <?php } ?> 
	                </select>
					<br>
				<?php }else{ ?>
					<div class="filters">City</div>
					<select class="form-control input_filter " name="location">
	                    <option value="">Select Location</option>
	                    <?php foreach ($cities as $city) { ?>
	                    	<option value="<?php echo $city['city_name']?>"><?php echo $city['city_name']?></option>
	                    <?php } ?> 
	                </select>
					<br>
				<?php } ?>
				<!-- Select rating -->
				<?php  if($search_ref[3] != null){ ?>
					<div class="filters">Rating</div>
					<select class="form-control input_filter " name="rate">
	                    <option value=""><?php echo $search_ref[3] ?></option>
	                    <?php foreach ($ratings as $rating) { ?>
	                    	<option value="<?php echo $rating['rate']?>"><?php echo $rating['rate']?></option>
	                    <?php } ?> 
	                </select>
					<br>
				<?php }else{ ?>
					<div class="filters">Rating</div>
					<select class="form-control input_filter " name="rate">
	                    <option value="">Select Rating</option>
	                    <?php foreach ($ratings as $rating) { ?>
	                    	<option value="<?php echo $rating['rate']?>"><?php echo $rating['rate']?></option>
	                    <?php } ?> 
	                </select>
					<br>
				<?php } ?>
				<!-- Select price -->
				<?php  if($search_ref[4] != null){ ?>
					<div class="filters">Price per day($)</div>
					<input class="input_filter" type="text" name="price" placeholder="<?php echo $search_ref[4] ?>">
					<br>
				<?php }else{ ?>
					<div class="filters">Price per day($)</div>
					<input class="input_filter" type="text" name="price" placeholder="peice">
					<br>
				<?php } ?>
				<!-- search button -->
					<div class="button_v_b" id="sec_search">
						<input class="input_button" id="search_button_2" type="submit" value="Search">
					</div>
				</form>
			</div>

			<!-- display search result -->
			<?php if ($search_result >0) { ?>
				<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
				<?php foreach($search_result as $data) { ?>
				<div class="row detail_row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<div class="img-box" ><img src="<?php echo base_url()?><?php echo $data['hs_prof_img']?>" alt=""></div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 result">
    				<div>
    					<?php echo $data['hs_first_name']?>
    					<?php echo $data['hs_last_name']?>
    				</div>
    				<div>    				
    					<?php echo $data['skill_name']?> 
    				</div>
    				<div>
    					<?php echo $data['hs_experience']?> years of experience
    				</div>
    				<div>
    					Price: $
    					<?php echo $data['hs_price']?> Per day
    				</div>
    				<div>
    					Avarage rating: 
    					<?php echo $data['rate']?>
    				</div>
				</div>
				
				<!-- view profile & book stylist -->
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    				<div class="button_v_b">
    					<a href="<?php echo base_url()?>index.php/Home/view_profile/<?php echo $data['hs_id']?>"><input class="input_button" type="submit" value="View Profile"></a>
    				</div>
    				<div class="button_v_b" id="id_button_v_b"><input class="input_button" id="input_button_id" type="submit" value="Book Now"></div>
    			</div>
				</div>
				<?php } ?>
			</div>
			<?php }else { ?>
				<h1>No maching result...!!!</h1>
			<?php } ?>
			
		</div>
	</div>
</body>
</html>