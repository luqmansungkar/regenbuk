<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<meta name="description" content="Regenerasi Buku adalah situs jual beli buku bekas secara online. Memberikan kemudahan dan solusi bagi kamu untuk menjual dan mencari buku bekas melalui situs website di www.regenerasibuku.com" />
	<meta name="keywords" content="regenerasi buku, jual beli buku, beli buku online" />
	<meta name="ROBOTS" CONTENT="INDEX, FOLLOW" />

	<title>Situs Jual Beli dan Berdonasi Buku</title>
	<link rel="icon" href="<?php echo Yii::app()->request->baseUrl; ?>/img/favicon.png" type="image/x-icon" />

	<!-- Fonts -->
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans">
	
	<!-- Default CSS -->
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.min.css">
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap-theme.css">
	
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/slippry.css">
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/font-awesome.css">
	<link media="all" type="text/css" rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.css">
	
	
</head>
<body>
<!-- Docs master nav -->
	<header class="navbar navbar-default navbar-static-top bs-docs-nav" style="background-image:none;"id="top" role="banner">
		<div class="container-fluid" style="max-width:1200px">
			<div class="navbar-header">
				<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?php echo Yii::app()->request->baseUrl; ?>/" style="padding: 22px 15px; width:50%;"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo.png" height="70" alt="logo"></a>
			</div>
			<nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<?php if (Yii::app()->session['role'] == null) { ?>			
				<ul class="nav navbar-nav navbar-right">
					<!--<li class="" >
						<a href="<?php echo Yii::app()->request->baseUrl; ?>" style="text-align:center;">
							<div style="margin-bottom:5px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon_home.png"  height="30" width="30"></div>
							<span class="btn btn-primary btn-xs">Beranda</span>
						</a>
					</li>-->
					<li class="" style="padding:7px 15px;margin-top:5px">
						<?php $this->widget('LoginWidget'); ?>
					</li>
					<li class="" >
						<a href="<?php echo Yii::app()->request->baseUrl; ?>/user/register" style="text-align:center;">
							<!--<div style="text-align:center;margin-bottom:5px"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/icon_person.png" height="30" width="30"></div>-->
							<span class="btn btn-primary btn-xs" style="margin-top:3px; padding:7px;" >Daftar</span>
						</a>
					</li>
				</ul>
				<?php }else{ ?>
					<ul class="nav navbar-nav navbar-right">
						<li>
							<div style="padding:15px">
							<?php if (Yii::app()->session['role'] == 'admin') { ?>
								<a class="btn btn-primary btn-xs btn-block" href="<?php echo Yii::app()->request->baseUrl; ?>/tujuanDonasi/create">Tujuan Donasi</a>
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/donasi/buat" class="btn btn-primary btn-xs btn-block">Verifikasi User</a>
							<?php } else { ?>
								<a class="btn btn-primary btn-xs btn-block" href="<?php echo Yii::app()->request->baseUrl; ?>/post/buat">Pasang Iklan</a>
								<a href="<?php echo Yii::app()->request->baseUrl; ?>/donasi/buat" class="btn btn-primary btn-xs btn-block">Donasi Buku</a>
								<?php } ?>
							</div>
						</li>
						<li>
							<div style="padding:15px 0">
								<!-- <a class="btn btn-default btn-xs btn-block" href="<?php echo Yii::app()->request->baseUrl; ?>" >Beranda</a> -->
								<?php if (Yii::app()->session['role'] == 'admin') { ?>
									<a class="btn btn-default btn-xs btn-block" href="<?php echo Yii::app()->request->baseUrl; ?>/user/admin">List User</a>
								<?php } else { ?>
									<!-- <a class="btn btn-default btn-xs btn-block" href="<?php echo Yii::app()->request->baseUrl; ?>/user/profile">Profile</a> -->
								<?php } ?>
							</div>
						</li>
						<li>
							<div style="padding:15px 15px;">
								<?php 
									$model = User::model()->findByPK(Yii::app()->session['id']);
								?>
								<img src="<?php 
									if (empty($model->foto)) {
										echo "http://placehold.it/60x60";
									}else{
										echo Yii::app()->request->baseUrl."/images/user/".$model->foto;
									}
								?>" style="border-radius:50%;overflow:hidden;width:60px;height:60px">
							</div>
						</li>
						<li>
							<div style="padding:35px 0; margin-left:20px;">
								<div style="color:#3075AF;" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><strong>Hi! <?php echo Yii::app()->session['user'] ?> <span class="caret"></span></strong></div>  
								  <ul class="dropdown-menu" role="menu" style="top:auto">
								    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/profile">Beranda</a></li>
								    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/editprofile">Edit Profile</a></li>
								    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/user/ubahpassword">Ganti Password</a></li>
								    <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/site/logout">Logout</a></li>
								  </ul>
								
							</div>
						</li>
					</ul>
				<?php } ?>
			</nav>
		</div>
		<div style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/line.png); height:15px;background-size: contain; background-repeat: repeat-x"><!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/line.png"> --></div>
	</header>

		
		<?php echo $content; ?>
		<div class="footer" style="background-color:#03476A;">
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
				<img src="<?php echo Yii::app()->request->baseUrl; ?>/img/logo_footer.png" style="max-height:80px; margin:25px;"><br/>
					<img src="http://placehold.it/60x60" width='60'>
					<img src="http://placehold.it/60x60" width='60'>
					<img src="http://placehold.it/60x60" width='60'>
					<img src="http://placehold.it/60x60" width='60'>
			</div>
			<div style="background-image: url(<?php echo Yii::app()->request->baseUrl; ?>/img/line.png); height:15px; background-size: contain; background-repeat: repeat-x"><!-- <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/line.png"> --></div>
			<div class="footer-bottom">
				<a href="http://skebsecure.strikingly.com">Jual beli aman</a> | <a href="http://skebpolicy.strikingly.com">Syarat dan Ketentuan</a>  | <a href="http://skebcontact.strikingly.com">Hubungi Kami</a> 
			</div>
		</div>
	</div>

	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-2.1.3.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.min.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/script.js"></script>
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/validator.min.js"></script>
	
	<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/slippry.min.js"></script>
</body>
</html>
