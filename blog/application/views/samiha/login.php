<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Samiha Kabir | Admin Login</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<!-- ================== BEGIN BASE CSS STYLE ================== -->
	<link href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="<?php echo base_url(); ?>assets/samiha/plugins/jquery-ui/themes/base/minified/jquery-ui.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/samiha/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/samiha/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/samiha/css/animate.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/samiha/css/style.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/samiha/css/style-responsive.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/samiha/css/theme/default.css" rel="stylesheet" id="theme" />
	<!-- ================== END BASE CSS STYLE ================== -->
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade in"><span class="spinner"></span></div>
	<!-- end #page-loader -->

	<div class="login-cover">
	    <div class="login-cover-image">
	    	<img src="<?php echo base_url(); ?>assets/samiha/img/login-bg/bg-1.jpg" data-id="login-cover-image" alt="" />
	    </div>
	    <div class="login-cover-bg"></div>
	</div>
	<!-- begin #page-container -->
	<div id="page-container" class="fade">
	    <!-- begin login -->
        <div class="login login-v2" data-pageload-addclass="animated tada">
            <!-- begin brand -->
            <div class="login-header">
                <div class="brand" align="center">
                    <span class="logo"></span> Samiha Kabir | Admin
                </div>
            </div>
            <!-- end brand -->
            <div class="login-content">
                <form action="<?php echo base_url(); ?>auth/login" method="post" class="margin-bottom-0">
                    <div class="form-group m-b-20">
                        <input autofocus type="text" class="form-control input-lg" placeholder="Email Address" name="email" />
                    </div>
                    <div class="form-group m-b-20">
                        <input type="password" class="form-control input-lg" placeholder="Password" name="password" />
                    </div>
                    <div class="login-buttons">
                        <button type="submit" class="btn btn-success btn-block btn-lg">Sign me in</button>
                    </div>
                </form>
            </div>
			<?php if ($this->session->flashdata('login_failed')): ?>
				<div class="col-md-12" style="margin-top: 5%; text-align: center">
					<div class="alert alert-danger">
						<?php echo $this->session->flashdata('login_failed'); ?>
					</div>
				</div>
			<?php endif; ?>
        </div>
        <!-- end login -->
	</div>
	<!-- end page container -->

	<!-- ================== BEGIN BASE JS ================== -->
	<script src="<?php echo base_url(); ?>assets/samiha/plugins/jquery/jquery-1.9.1.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/samiha/plugins/jquery/jquery-migrate-1.1.0.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/samiha/plugins/jquery-ui/ui/minified/jquery-ui.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/samiha/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!--[if lt IE 9]>
		<script src="<?php echo base_url(); ?>assets/samiha/crossbrowserjs/html5shiv.js"></script>
		<script src="<?php echo base_url(); ?>assets/samiha/crossbrowserjs/respond.min.js"></script>
		<script src="<?php echo base_url(); ?>assets/samiha/crossbrowserjs/excanvas.min.js"></script>
	<![endif]-->
	<script src="<?php echo base_url(); ?>assets/samiha/plugins/slimscroll/jquery.slimscroll.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/samiha/plugins/jquery-cookie/jquery.cookie.js"></script>
	<!-- ================== END BASE JS ================== -->

	<!-- ================== BEGIN PAGE LEVEL JS ================== -->
	<script src="<?php echo base_url(); ?>assets/samiha/js/login-v2.demo.min.js"></script>
	<script src="<?php echo base_url(); ?>assets/samiha/js/apps.min.js"></script>
	<!-- ================== END PAGE LEVEL JS ================== -->

	<script>
		$(document).ready(function() {
			App.init();
			LoginV2.init();
		});
	</script>
</body>
</html>
