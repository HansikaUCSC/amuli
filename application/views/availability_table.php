<!DOCTYPE html>
<html>
<head>
	<!-- import css -->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url()?>assets/css/availability_layer.css">
</head>
<body>
	<div class="container-fluid" id="availability_layer">
		<div class="row">
			<h1>BOOKING SCHEDULE</h1>
			<table class="table table-bordered table-responsive" id="tab">
				<thead>
					<tr>
						<td>Start Date</td>
						<td>End Date</td> 
						<td>Status</td> 
					</tr>
				</thead>
				<tbody>
				<?php
					if ($status != null) {
						foreach ($status as $avl_status) {
				?>
							<tr>
								<td><?php echo $avl_status['start_date']?></td>
								<td><?php echo $avl_status['end_date']?></td>
								<td><?php echo $avl_status['status']?></td>
							</tr>
				<?php   
						}
					}
				?>
				</tbody>
			</table>
			<div class="botton_v_b">
				<input class="input_button" id="input_button_id" type="submit" value="Book Now">
			</div>
		</div>
	</div>
</body>
</html>