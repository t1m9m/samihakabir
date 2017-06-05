<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->
<head>
	<meta charset="utf-8" />
	<title>Samiha Kabir | Admin</title>
	<meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
	<meta content="" name="description" />
	<meta content="" name="author" />

	<?php include 'includes_top.php';?>
</head>
<body>
	<!-- begin #page-loader -->
	<div id="page-loader" class="fade"><span class="spinner"></span></div>
	<!-- end #page-loader -->
	<div id="page-container" class="fade in page-sidebar-fixed page-header-fixed">
		<?php include 'header.php'; ?>

		<?php include 'navbar.php'; ?>

		<?php include $page_name . '.php'; ?>

		<?php include 'modal.php'; ?>
	</div>

	<!-- begin #footer -->
	<div id="footer" class="footer" align="center">
	    &copy; <a href="http://www.samihakabir.com" target="_blank">s1m9h1</a> <?php echo date('Y'); ?> |
	    <a href="<?php echo base_url(); ?>" target="_blank">Blog</a>
	</div>
	<!-- end #footer -->

    <?php // include 'theme_panel.php'; ?>

	<!-- begin scroll to top btn -->
	<a href="javascript:;" class="btn btn-icon btn-circle btn-success btn-scroll-to-top fade" data-click="scroll-top">
		<i class="fa fa-angle-up"></i>
	</a>
	<!-- end scroll to top btn -->

	<?php include 'includes_bottom.php'; ?>
</body>
</html>
