<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">
	<title> Log In | Student </title>
	
	<link href="<?php echo base_url('node_modules/bootstrap/dist/css/bootstrap.css'); ?>" rel="stylesheet">
	<link href="<?php echo base_url('node_modules/font-awesome/css/font-awesome.css'); ?>" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="<?php echo base_url('assets/css/style.css'); ?>">

</head>
<body>

	<div class="container" id="log-in-container">
		<?php
		echo form_open("login/studentLoginSubmit", ["class"=>"form-log-in"]);
		?>
		<?php
		echo form_error("rfid-login");
		?>
		<div class="panel panel-default panel-login-pup">
			<legend class="panel-heading panel-heading-pupspc">
				<i class="fa fa-spin fa-clock-o"></i> PUP San Pedro STMS
			</legend>
			<div class="panel-body">
				<fieldset>

					<?php
					$rfid = [
					"name"=>"rfid-login",
					"id"=>"rfid-login",
					"class"=>"form-control",
					"placeholder"=>"Scan your R.F.I.D.",
					"autofocus"=>"autofocus"
					];
					?>

					<div class="input-group blink_me">
						<span class="input-group-addon"><i class="fa fa-user fa-fw"></i></span>
						<div class="form-group">
							<?php
							echo form_input($rfid, set_value("rfid-login"));
							?>
						</div>
					</div>
				</fieldset>
			</div>
		</div>
		<?php
		$submit = [
		"id"=>"submit",
		"name"=>"submit",
		"value"=>"Log In",
		"class"=>"display-none"
		];
		echo form_submit($submit);
		echo anchor("login", "Click here for staff login", ["id"=>"link-switch-login"]);
		echo form_close();
		?>
	</div>
</body>
<script src="<?php echo base_url('node_modules/jquery/dist/jquery.js'); ?>"></script>
<script src="<?php echo base_url('node_modules/bootstrap/dist/js/bootstrap.js'); ?>"></script>
<script>
	$(function(){
		$('[data-toggle="tooltip"]').tooltip();
	});
</script>
</html>