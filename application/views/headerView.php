<html>
<head>
	<title>Animasi & Sound</title>
	<meta charset="UTF-8">
	<meta name="description" content="SolMusic HTML Template">
	<meta name="keywords" content="music, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->
	<link rel="shortcut icon" href="<?= base_url('assets\img\icons\anime.png');?>"/>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700,700i&display=swap" rel="stylesheet">
 
	<!-- Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css');?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/font-awesome.min.css');?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/owl.carousel.min.css');?>"/>
	<link rel="stylesheet" href="<?= base_url('assets/css/slicknav.min.css');?>"/>

	<!-- Main Stylesheets -->
	<link rel="stylesheet" href="<?= base_url('assets/css/style.css');?>"/>


	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder 
	<div id="preloder">
		<div class="loader"></div>
	</div>
    -->
	<!-- Header section -->
	<header class="header-section clearfix">
		<a href="<?= base_url('home');?>" class="site-logo">
			<img src="<?= base_url('assets/img/logo.png');?>" alt="">
		</a>
		<div class="header-right">
			<a href="<?= base_url('admin/login')?>" class="login">Login</a>
			<span>|</span>
			<div class="user-panel">
				<form action="<?= base_url('sound');?>" method="get">
					<input type="text" name="cari" placeholder="Search..."></input>
				</form>
				<!--<a href="" class="register">Create an account</a>-->
			</div> 
		</div>
		<ul class="main-menu">
			<li style="background-color: #333333;"><a href="<?= base_url('home');?>">Animation</a></li>
			<li><a href="<?= base_url('sound');?>">Sound</a></li>
			<li><a href="<?= base_url('contact');?>">Contact</a></li>
		</ul>
	</header>
	<!-- Header section end -->