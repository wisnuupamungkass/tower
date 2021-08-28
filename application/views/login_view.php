<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>DINAS PERHUBUNGAN SUKOHARJO</title>
    <link href="<?php echo base_url(); ?>login/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url(); ?>login/css/font-awesome.min.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>login/css/main.css" rel="stylesheet">
	<link href="<?php echo base_url(); ?>login/css/animate.css" rel="stylesheet">	
	<link href="<?php echo base_url(); ?>login/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="<?php echo base_url(); ?>login/images/favicon.png">
	<style type="text/css">
		border: none;
		vertical-align: top;
    </style>
    <script>
		function validateForm() {
			var x = document.forms["contact-form"]["username"].value;
			var y = document.forms["contact-form"]["password"].value;
			if (x == null || x == "") {
				alert("Username Masih Kosong");
				return false;
			}
			else if(y == null || y == "") {
				alert("Password Masih Kosong");
				return false;
			}
		}
		</script>
</head><!--/head-->

<body>
	<header id="header" role="banner">		
		<div class="main-nav">
			<div class="container">
				<div class="header-top">
					<div class="pull-right social-icons">
						<a href="https://twitter.com/dishubinfokom"><i class="fa fa-twitter"></i></a>
						<a href="https://www.facebook.com/Dishub-infokom-Sukoharjo-856416741092948/"><i class="fa fa-facebook"></i></a>
						<a href="http://cctv-dishub.sukoharjokab.go.id"><i class="fa fa-google-plus"></i></a>
						<a href="https://www.youtube.com/watch?v=_dVaEPyhq9A"><i class="fa fa-youtube"></i></a>
					</div>
				</div>     
		        <div class="row">	        		
		            <div class="navbar-header">
		                <a class="navbar-brand">
		                	<img class="img-logo" src="<?php echo base_url(); ?>login/images/logo1.png" alt="logo1" width=100% height=160%>
		                </a>
		            </div>
		            <div class="collapse navbar-collapse">
		                <ul class="nav navbar-nav navbar-right">                 
		                    <li><a class="no_scroll" href="<?php echo base_url().'index.php/Download/unduh_nasional' ?>" target="_blank">Peraturan Nasional</a></li>                         
		                    <li><a class="no_scroll" href="<?php echo base_url().'index.php/Download/unduh_daerah' ?>" target="_blank">Peraturan Daerah</a></li>
		                    <li><a class="no_scroll" href="http://localhost:8080/tower/peta/pencarian.php" target="_blank">Pencarian Menara</a></li>
		                    <li class="scroll"><a href="#login">Login</a></li>       
		                </ul>
		            </div>
		        </div>
	        </div>
        </div>                    
    </header>
    <!--/#header--> 

	<section id="explore">
		<div class="container">
		<br><br>
			<div id="main-slider" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#main-slider" data-slide-to="0" class="active"></li>
				<li data-target="#main-slider" data-slide-to="1"></li>
				<li data-target="#main-slider" data-slide-to="2"></li>
				<li data-target="#main-slider" data-slide-to="3"></li>
				<li data-target="#main-slider" data-slide-to="4"></li>
				<li data-target="#main-slider" data-slide-to="5"></li>
			</ol>
			</ol>
			</ol>
			</ol>
			<div class="carousel-inner">
				<div class="item active">
					<img class="img-carousel" src="<?php echo base_url(); ?>login/images/slider/01_antena_tbg.jpg" alt="slider">						
					<div class="carousel-caption">
						<h4>MENARA BERSAMA GROUP KABUPATEN SUKOHARJO</h4>
						<a href="<?php echo base_url(); ?>login/images/slider/01_antena_tbg.jpg">LIHAT DETAIL <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-carousel" src="<?php echo base_url(); ?>login/images/slider/01_antena_dss.jpg" alt="slider">	
					<div class="carousel-caption">
						<h4>MENARA DIAN SWASTATIKA SENTOSA KABUPATEN SUKOHARJO</h4>
						<a href="<?php echo base_url(); ?>login/images/slider/01_antena_dss.jpg">LIHAT DETAIL <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-carousel" src="<?php echo base_url(); ?>login/images/slider/01_antena_mitratel.jpg" alt="slider">	
					<div class="carousel-caption">
						<h4>MENARA DAYAMITRA TELEKOMUNIKASI KABUPATEN SUKOHARJO</h4>
						<a href="<?php echo base_url(); ?>login/images/slider/01_antena_mitratel.jpg">LIHAT DETAIL <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-carousel" src="<?php echo base_url(); ?>login/images/slider/01_antena_tbg.jpg" alt="slider">	
					<div class="carousel-caption">
						<h4>MENARA PROTELINDO KABUPATEN SUKOHARJO</h4>
						<a href="<?php echo base_url(); ?>login/images/slider/01_antena_tbg.jpg" >LIHAT DETAIL <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-carousel" src="<?php echo base_url(); ?>login/images/slider/02_full_site_tower_dss.jpg" alt="slider">	
					<div class="carousel-caption">
						<h4>MENARA DIAN SWASTATIKA SENTOSA KABUPATEN SUKOHARJO</h4>
						<a href="<?php echo base_url(); ?>login/images/slider/02_full_site_tower_dss.jpg" >LIHAT DETAIL <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
				<div class="item">
					<img class="img-carousel" src="<?php echo base_url(); ?>login/images/slider/02_full_site_tower_sti.jpg" alt="slider">	
					<div class="carousel-caption">
						<h4>MENARA STI KABUPATEN SUKOHARJO</h4>
						<a href="<?php echo base_url(); ?>login/images/slider/02_full_site_tower_sti.jpg" >LIHAT DETAIL <i class="fa fa-angle-right"></i></a>
					</div>
				</div>
			</div>
		</div>    	
		</div>
	</section><!--/#explore-->

	<section id="event">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div id="event-carousel" class="carousel slide" data-interval="false">
						<center><h2 class="heading">GALLERY MENARA TELEKOMUNIKASI</h2></center>
						<a class="even-control-left" href="#event-carousel" data-slide="prev"><i class="fa fa-angle-left"></i></a>
						<a class="even-control-right" href="#event-carousel" data-slide="next"><i class="fa fa-angle-right"></i></a>
						<div class="carousel-inner">
							<div class="item active">
								<div class="row">
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Axis.jpg" alt="event-image" width="200" />
											<h4>Menara AXIS</h4>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Bakrie.jpg" alt="event-image" width="200" />
											<h4>Menara Bakrie</h4>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Indosat.jpg" alt="event-image" width="200" />
											<h4>Menara Indosat</h4>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara XL.jpg" alt="event-image" width="200" />
											<h4>Menara XL</h4>
										</div>
									</div>
								</div>
							</div>
							<div class="item">
								<div class="row">
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Axis.jpg" alt="event-image" width="200" />
											<h4>Menara AXIS</h4>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Telkomsel.jpg" alt="event-image" width="200" />
											<h4>Menara Telkomsel</h4>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Bakrie.jpg" alt="event-image" width="200" />
											<h4>Menara Bakrie</h4>
										</div>
									</div>
									<div class="col-sm-3">
										<div class="single-event">
											<img class="expando" border="0"  height="200" src="<?php echo base_url(); ?>login/images/event/Menara Indosat.jpg" alt="event-image" width="200" />
											<h4>Menara Indosat</h4>
										</div>
									</div>
								</div>
							</div>
						</div><br>
					</div>
				</div>
			</div>			
		</div>
	</section><!--/#event-->

	<section id="login">
		<div class="contact-section">
			<div class="ear-piece">
				<img class="img-contact" src="<?php echo base_url(); ?>login/images/ear-piece.png" alt="">
			</div>
			<div class="container">
				<div class="row">
					<div class="col-sm-4 col-sm-offset-4">
						<div class="contact-text">
							<h3><strong>Contact</strong></h3>
							<address>
								Email: dishubinfokom@sukoharjo.go.id<br>
								Telepon: (0271) 593037<br>
								Website: </i> <a href="http://dishubinfokom.sukoharjokab.go.id/"> dishubinfokom.sukoharjokab.go.id</a>
							</address>
						</div>
						<div class="contact-address">
							<h3><strong>Alamat</strong></h3>
							<address>
								Jl. Rajawali No.7, Joho
								Kec. Sukoharjo,<br>
								Kabupaten Sukoharjo
								Jawa Tengah
							</address>
						</div>
					</div>
					
					<div class="col-sm-3 col-sm-offset-1">
						<div id="contact-section">
							<h3><strong>Login Administrator</strong></h3>
					    	<div class="status alert alert-success" style="display: none"></div>
							<?php
							 // Cetak session
							if($this->session->flashdata('sukses')) {
								echo $this->session->flashdata('sukses');
							}
							// Cetak error
								echo validation_errors();
							?>
					    	<form id="main-contact-form" class="contact-form" name="contact-form" onsubmit="return validateForm()" action="<?php echo base_url('index.php/login') ?>" method="post">
					            <div class="form-group">
									<input type="text" class="form-control" name="username" id="username" placeholder="Username">
								</div>
					            <div class="form-group">
					                <input type="password" class="form-control" name="password" id="password" placeholder="Password">
					            </div>                  
					            <div class="form-group">
					                 <button class="btn btn-primary" type="submit" id="submit">Login</button>
					            </div>
					        </form>	       
					    </div>
					</div>
				</div>
			</div>
		</div>		
	</section>
    <!--/#contact-->

    <footer id="footer">
        <div class="container">
            <div class="text-center">
                <p> Copyright  &copy; 2016<a target="_blank" href="http://dishubinfokom.sukoharjokab.go.id/"> SIDAMENTEL </a>Dinas Perhubungan Informatika dan Komunikasi Sukoharjo<br>All Rights Reserved </p>                
            </div>
        </div>
    </footer>
    <!--/#footer-->
  
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/jquery.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="<?php echo base_url(); ?>login/js/smoothscroll.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/jquery.parallax.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/jquery.scrollTo.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/jquery.nav.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/main.js"></script>
    <script type="text/javascript" src="<?php echo base_url(); ?>login/js/jimage.js"></script>
</body>
</html>