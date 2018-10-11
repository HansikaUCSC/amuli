<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>AMULI | Profile</title>

	<!--bootstrap css-->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700|Open+Sans" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

	<!-- import css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/profile.css">

</head>
<body>
	<?php foreach($profile as $data1) { ?>
	<div class="up">
		<div class="row" id="row_1">
			<div class="col-lg-6 col-md-7 col-sm-8 col-xs-12 profile_img">
				<div class="col-lg-3 col-md-4 col-sm-5 col-xs-12">
					<div class="img-box" ><img src="<?php echo base_url()?><?php echo $data1['hs_prof_img']?>" alt=""></div>
				</div>
				<div class="col-lg-9 col-md-6 col-sm-7 col-xs-12">
					<div class="stylist_name"><?php echo $data1['hs_first_name']?> <?php echo $data1['hs_last_name']?></div>
					<i><div class="stylist_quote"><?php echo $data1['hs_description']?></div></i>
					<b><div class="stylist_rating">Rating : <?php echo $data1['rate']?> </div></b>
				</div>
			</div>
		</div>
		<hr>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<b><div class="stylist_experience">Experience</div></b>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="stylist_experience_asw"><?php echo $data1['hs_experience']?> years of experience</div>
				</div>
			</div>
		</div>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<b><div class="stylist_Qualification">Education Level</div></b>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="stylist_Qualification_asw"><?php echo $data1['hs_level_of_education']?></div>
				</div>
			</div>
		</div>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<b><div class="stylist_price">Price per hour</div></b>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="stylist_price_asw">$<?php echo $data1['hs_price']?> per hour</div>
				</div>
			</div>
		</div>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<b><div class="stylist_skill">Skills</div></b>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<?php foreach($skill as $data) { ?>
					<div class="stylist_skill_asw">- <?php echo $data['skill_name']?></div>
					<?php } ?>
				</div>
			</div>
		</div>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<b><div class="stylist_city">Avalibale City</div></b>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="stylist_city_asw"><?php echo $data1['city_name']?></div>
				</div>
			</div>
		</div>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<b><div class="stylist_contact_info">Contact Info</div></b>
				</div>
			</div>
		</div>
		<div class="row" id="row_2">
			<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">	
				<div class="col-lg-4 col-md-4 col-sm-5 col-xs-12">
					<div class="contact">
						<b><div class="s_email">Email :</div></b>
						<b><div class="s_contact_no">Contact No :</div></b>
					</div>
				</div>
				<div class="col-lg-8 col-md-8 col-sm-7 col-xs-12">
					<div class="contact_asw">
						<div class="s_email"><?php echo $data1['hs_email']?></div></b>
						<div class="s_contact_no"><?php echo $data1['hs_contact_no']?></div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
</body>
</html>