<!DOCTYPE html>
<html lang="en" data-ng-app="mainApp">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>ระบบสมัครสมาชิก</title>
	<!--Bootstrap Framework-->
	<link href="<?php echo base_url('assets/scripts/Bootstrap/css/bootstrap.css'); ?>" rel="stylesheet" type="text/css">
	<!--Font-Awesome Library-->
	<link href="<?php echo base_url('assets/scripts/FontAwesome/css/font-awesome.min.css'); ?>" rel="stylesheet" type="text/css">
	<!--Custom CSS Stylesheet-->
	<link href="<?php echo base_url('assets/images/logo.png'); ?>" rel="shortcut icon" type="image/x-icon">
	<link href="<?php echo base_url('assets/styles/style.css'); ?>" rel="stylesheet" type="text/css">
</head>
<body>
	<div class="container-fluid">
		<div class="container" style="margin: 15px auto;" data-ng-controller="mainController as mainCtrl">
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10" style="background-color: #ffffff;">
					<!--Header-->
					<div class="row header">
						<div class="well well-lg text-center no-margin-bottom">
							<i class="fa fa-user text-indent"></i><b> ระบบสมัครสมาชิก</b>
						</div>
					</div>
					<!--Section-->
					<div class="row section">
						<!--Content-->
						<div class="col-md-3">
							<div class="panel panel-default">
								<div class="panel-heading">
									<i class="fa fa-cog text-indent"></i> เมนู
								</div>
								<div class="list-group">
								  	<a href="#/addMember" class="list-group-item">
								  		<i class="fa fa-plus text-indent"></i> เพิ่มสมาชิก
								  	</a>
								  	<a href="#/editMember" class="list-group-item">
								  		<i class="fa fa-wrench text-indent"></i> แก้ไขสมาชิก
								  	</a>
								  	<a href="#/removeMember" class="list-group-item">
								  		<i class="fa fa-trash text-indent"></i> ลบสมาชิก
								  	</a>
								</div>
							</div>
						</div>
						<div class="col-md-9">
							<span class="data-ng-view"></span>
						</div>
					</div>
					<!--Footer-->
					<div class="row footer">
						<div class="well text-center no-margin-bottom">
							Copyright &copy; 2016 register.co.th All Rights Reserved.
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		</div>
	</div>
	<!--jQuery Library-->
	<script src="<?php echo base_url('assets/scripts/jQuery/jquery-11.0.min.js'); ?>" type="text/javascript"></script>
	<!--Bootstrap Framework-->
	<script src="<?php echo base_url('assets/scripts/Bootstrap/js/bootstrap.min.js'); ?>" type="text/javascript"></script>
	<!--AngularJS Framework-->
	<script src="<?php echo base_url('assets/scripts/AngularJS/angular.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/scripts/AngularJS/angular-route.min.js'); ?>" type="text/javascript"></script>
	<script src="<?php echo base_url('assets/scripts/main_app.js'); ?>" type="text/javascript"></script>
</body>
</html>