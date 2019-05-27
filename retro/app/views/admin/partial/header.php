<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title><?php if(isset($title)) { echo $title." |"; } ?> Admin Retro.</title>
	<meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
	<link rel="stylesheet" href="<?php echo base_url('bower_components/bootstrap/dist/css/bootstrap.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('plugins/iCheck/square/blue.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('bower_components/font-awesome/css/font-awesome.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('bower_components/Ionicons/css/ionicons.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/AdminLTE.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('dist/css/skins/skin-green.min.css') ?>">
	<link rel="stylesheet" href="<?php echo base_url('css/custom-admin.css') ?>">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition <?php if(!isset($panel) || @$panel === true){ echo 'skin-green sidebar-mini'; }else{ echo 'login-page';}?>">
	<?php 
		if(!isset($panel) || @$panel === true){
	?>
	<div class="wrapper">
		<?php view('admin/partial/navbar') ?>

	  	<aside class="main-sidebar">	
			<?php view('admin/partial/sidebar') ?>
	  	</aside>

	  	<div class="content-wrapper">
	<?php } ?>