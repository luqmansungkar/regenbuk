<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW" />

	<title>Home</title>
	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/icon.png" type="image/x-icon" />

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
	
	<!-- Default CSS -->
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css">
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css">
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
</head>
<body>
<!-- Docs master nav -->
	<header class="navbar navbar-default navbar-static-top bs-docs-nav" id="top" role="banner">
		<div class="container-fluid" style="max-width:1200px">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="" style="padding: 4px 15px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo-w.png" height="70" alt="logo"></a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<?php if (Yii::app()->session['role'] == null) { ?>			
				<ul class="nav navbar-nav navbar-right">
					<li class="" >
						<a href="./register" style="text-align:center;">
							<div style="margin-bottom:5px"><img src="http://placehold.it/30x30"></div>
							<span class="btn btn-primary btn-xs">Beranda</span>
						</a>
					</li>
					<li class="" style="padding:5px 15px; background-color:rgba(77,128,132,0.5);margin-top:5px">
						<?php $this->widget('LoginWidget'); ?>
					</li>
					<li class="" >
						<a href="./register" style="text-align:center;">
							<div style="text-align:center;margin-bottom:5px"><img src="http://placehold.it/30x30"></div>
							<span class="btn btn-primary btn-xs">Daftar</span>
						</a>
					</li>
				</ul>
				<?php }else{ ?>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<div style="padding:15px">
								<button type="button" class="btn btn-primary btn-xs btn-block">Upload/Pasang Buku</button>
								<button type="button" class="btn btn-primary btn-xs btn-block">Donasi Buku</button>
							</div>
						</li>
						<li>
							<div style="padding:15px 0">
								<button type="button" class="btn btn-default btn-xs btn-block">Beranda</button>
								<button type="button" class="btn btn-default btn-xs btn-block">Profile</button>
							</div>
						</li>
						<li>
							<div style="padding:15px 15px;">
								<img src="http://placehold.it/60x60" style="border-radius:50%;overflow:hidden">
							</div>
						</li>
						<li>
							<div style="padding:15px 0">
								<div style="color:#fff;text-align:center;margin-bottom:5px"><strong>Hi! <?php echo Yii::app()->session['user'] ?></strong></div>
								<a class="btn btn-primary btn-xs" href="index.php/site/logout" style="text-align:center;">Logout</a>
							</div>
						</li>
					</ul>
				<?php } ?>
			</nav>
		</div>
	</header>

		
		<?php echo $content; ?>
		<div class="footer">
			<div class="social">
				<ul>
					<li><a href=""><i class="fa fa-fw fa-twitter"></i></a></li>
					<li><a href=""><i class="fa fa-fw fa-facebook"></i></a></li>
					<li><a href=""><i class="fa fa-fw fa-youtube"></i></a></li>
					<li><a href=""><i class="fa fa-fw fa-instagram"></i></a></li>
					<li><a href=""><i class="fa fa-fw fa-google-plus"></i></a></li>
				</ul>
			</div>
			<div class="partner">
				<img src="http://placehold.it/300x100">
			</div>
			<div class="footer-bottom">
			</div>
		</div>
	</div>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.3.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
</body>
</html>
