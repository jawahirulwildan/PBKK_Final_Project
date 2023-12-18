<!DOCTYPE html>
<html>
<head>
<title>PrimaBike</title>
<link href="<?= base_url('assets/vendors/bootstrap/dist/css/bootstrap.min.css'); ?> " rel="stylesheet" type="text/css" media="all" />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="<?= base_url('assets/js/jquery.min.js'); ?>"></script>
<!-- Custom Theme files -->
<!--theme-style-->
<link href="<?= base_url('assets/css/style.css'); ?>" rel="stylesheet" type="text/css" media="all" />	
<!--//theme-style-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--fonts-->
<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
<link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
<!-- start menu -->
<link href="<?= base_url('assets/css/memenu.css'); ?>" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript" src="<?= base_url('assets/js/memenu.js'); ?>"></script>
<script>$(document).ready(function(){$(".memenu").memenu();});</script>
</head>
<body>
<!--header-->
<div class="header">
	<div class="header-top" style="background-color: #D0B8A8;">
		<div class="container">
			<div class="header-left">
				<!-- search-scripts -->
				<script src="<?= base_url('assets/js/classie.js'); ?>"></script>
				<script src="<?= base_url('assets/js/uisearch.js'); ?>"></script>
				<script>
					new UISearch( document.getElementById( 'sb-search' ) );
				</script>
				<!-- //search-scripts -->
				<div class="clearfix"></div>
			</div>

			<div class="social" style="float: right;">
				<ul>
					<li><a href="https://www.instagram.com/jawahirulwildan?igshid=OGQ5ZDc2ODk2ZA=="><i class="facebok"> </i></a></li>
					<li><a href="https://www.instagram.com/jawahirulwildan?igshid=OGQ5ZDc2ODk2ZA=="><i class="goog"> </i></a></li>
					<div class="clearfix"></div>
				</ul>
			</div>
		</div>

		</div>
		<div class="container">
			<div class="head-top">
				<div class="logo">
					<h1><a href="<?= base_url(); ?>"><img src="./assets/images/sepedalogo.png" width="95" alt=""></a></h1>
				</div>
		    <div class=" h_menu4">
				<ul class="memenu skyblue">
					<li><a class="color8" href="<?= base_url(); ?>">Home</a></li>	
					<li><a class="color4" href="<?= base_url('about'); ?>">About Us</a></li>
					<li><a class="color4" href="<?php echo base_url('login'); ?>">Login</a></li>
			  </ul> 
			</div>
				
				<div class="clearfix"> </div>
		</div>
		</div>
	</div>