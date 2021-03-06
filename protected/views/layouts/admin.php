<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Skebbook - Admin</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/admin/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/admin/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="<?php echo Yii::app()->getBaseUrl(true); ?>/admin/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href=""><?php echo Yii::app()->session['hal'];?></a>

            </div>
            <!-- /.navbar-header -->
            <ul class="nav navbar-top-links navbar-right">
                <li><a href="<?php echo Yii::app()->getBaseUrl(true); ?>/site/logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a></li>
            </ul>

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/user/verifikasi"><i class="fa fa-users fa-fw"></i> Verifikasi User</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/user/admin"><i class="fa fa-users fa-fw"></i>Manage Users</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/TujuanDonasi/admin"><i class="fa fa-users fa-fw"></i>Manage Tujuan Donasi</a>
                        </li>
                        <li>
                            <a href="<?php echo Yii::app()->getBaseUrl(true); ?>/TujuanDonasi/create"><i class="fa fa-users fa-fw"></i>Tambah Tujuan Donasi</a>
                        </li>
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>

        <?php echo $content; ?>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

<!-- jQuery -->
    <!-- <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/jquery.min.js"></script> -->

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo Yii::app()->getBaseUrl(true); ?>/js/sb-admin-2.js"></script>

</body>

</html>