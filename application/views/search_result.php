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
			<div class="col-md-3 col-sm-3 col-xs-3">
				<div class="filters">Name</div>
				<input class="input_filter" type="text" name="name" placeholder="stylist name">
				<br>
				<div class="filters">City</div>
				<input class="input_filter" type="text" name="city" placeholder="City">
				<br>
				<div class="filters">Skill</div>
				<input class="input_filter" type="text" name="skill" placeholder="Skill">
				<br>
				<div class="filters">Rating</div>
				<input class="input_filter" type="text" name="rating" placeholder="Rating">
				<br>
				<div class="filters">Price per day</div>
				<input class="input_filter" type="text" name="price" placeholder="peice">
			</div>
			<div class="col-lg-9 col-md-9 col-sm-9 col-xs-9 ">
				<?php foreach($user as $data1) { ?>
				<div class="row detail_row">
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
					<div class="img-box" ><img src="<?php echo base_url()?><?php echo $data1['hs_prof_img']?>" alt=""></div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12 result">
    				<div>
    					<?php echo $data1['hs_first_name']?>
    					<?php echo $data1['hs_last_name']?>
    				</div>
    				<div>    				
    					<?php echo $data1['skill_name']?> 
    				</div>
    				<div>
    					<?php echo $data1['hs_experience']?> years of experience
    				</div>
    				<div>
    					Price: $
    					<?php echo $data1['hs_price']?> Per day
    				</div>
    				<div>
    					rating: 
    					<?php echo $data1['rate']?>
    				</div>
				</div>
				<div class="col-lg-2 col-md-2 col-sm-2 col-xs-12">
    				<div class="botton_v_b">
    					<a href="<?php echo base_url()?>index.php/Home/view_profile/<?php echo $data1['hs_id']?>"><input class="input_button" type="submit" value="View Profile"></a>
    				</div>
    				<div class="botton_v_b" id="id_botton_v_b"><input class="input_button" id="input_button_id" type="submit" value="Book Now"></div>
    			</div>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
</body>
</html>