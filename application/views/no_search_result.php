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

	<div class="row" id="filter">
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
				<h1>No maching result...!!!</h1>
			</div>
		</div>
	</div>
</body>
</html>