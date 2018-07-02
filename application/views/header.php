<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="icon" href="/favicon.ico">
		<title>Remas</title>
		<!-- Bootstrap core CSS -->
		<link href="<?php echo base_url('assets/css/bootstrap.min.css');?>" rel="stylesheet">

		<link href="<?php echo base_url('assets/css/style.css');?>" rel="stylesheet">
		
		<link href="<?php echo base_url('assets/fonts/font-awesome.css');?>" rel="stylesheet">

		<link href="<?php echo base_url()?>assets/DataTables/datatables.min.css" rel="stylesheet">

		<script src="<?php echo base_url('assets/js/jquery-3.1.1.min.js');?>"></script>		

	</head>
	<body background="<?php echo base_url();?>images/a13.jpg">
		
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<nav class="navbar navbar-default navbar-fixed-top"  role="navigation">
					<div class="container-fluid">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							
							<a class="navbar-brand" href="<?=base_url()?>index.php/Remas_view/index">REMAJA MASJID AL-AKBAR</a>
						</div>
				
						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse navbar-ex1-collapse">
							<ul class="nav navbar-nav">
								<li><a href="<?=base_url()?>index.php/Remas_view/index"><span class="glyphicon glyphicon-home"></span> Home</a></li>
								<li><a href="<?=base_url()?>index.php/Remas_view/artikel"><span class="glyphicon glyphicon-book"></span> Artikel</a></li>
								<li><a href="<?=base_url()?>index.php/Remas_view/"><span class="glyphicon glyphicon-modal-window"></span> Tentang</a></li>
								<li><a href="<?=base_url()?>index.php/Remas_view/datatable_ajax"><span class="glyphicon glyphicon-user"></span> Keanggotaan</a></li>
								<li><a href="<?=base_url()?>index.php/Remas_view/pengumuman"><span class="glyphicon glyphicon-bullhorn"></span> Informasi</a></li>
								<li><a href="<?=base_url()?>index.php/Remas_view/lokasi"><span class="glyphicon glyphicon-bullhorn"></span> Lokasi</a></li>

							</ul>
							<ul class="nav navbar-nav navbar-right">
								<li><a href="<?=base_url()?>index.php/Remas_view/loginHome"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
							</ul>
							
							
						</div><!-- /.navbar-collapse -->
					</div>
				</nav>