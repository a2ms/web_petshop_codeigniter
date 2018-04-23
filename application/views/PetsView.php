<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>All Pets</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/material-kit.css" rel="stylesheet"/>

	<!-- CSS Just for demo purpose, don't include it in your project -->
	<link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/Home.css" rel="stylesheet" />

	<!--Javascript boss, ojo diotak atik-->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/jquery-ui.js"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
</head>

<body class="tutorial-page">

	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button id="menu-toggle" type="button" class="navbar-toggle">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar bar1"></span>
					<span class="icon-bar bar2"></span>
					<span class="icon-bar bar3"></span>
				</button>
				<?php if($this->session->userdata('status')=='login')
				{
					$foto=$this->session->userdata('foto');
					echo '<a href="#"">
					<div class="logo-container">
						<div class="logo">
							<img src="'.base_url().'foto/'.$this->session->userdata('foto').'" alt="Creative Tim Logo">
						</div>
						<div class="brand">
							'.$this->session->userdata('nama_lengkap').'
						</div>
					</div>
				</a>';
			}?>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse">
			<ul  class="nav navbar-nav navbar-right">
        <li>
  				<a href="<?php echo base_url(); ?>">Home</a>
  			</li>
  			<li>
  				<a href="<?php echo site_url('layout/allpet'); ?>">Pets</a>
  			</li>
  			<li>
  				<a href="<?php echo site_url('layout/petaccessories'); ?>">Accesories</a>
  			</li>
  			<li>
  				<a href="<?php echo site_url('layout/news'); ?>">News</a>
  			</li>
				<?php if($this->session->userdata('status')=='login')
				{
					echo '
					<li>
					<a href="'.base_url().'index.php/layout/myprofile">My Profile</a>
					</li>
					<li>
					<a href="'.base_url().'index.php/logout">Logout</a>
				</li>';
			}
			else {
				echo '<li class="dropdown">
				<a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
					<b class="caret"></b>
				</a>
				<ul class="dropdown-menu dropdown-menu-right">
					<li><a href="#" data-toggle="modal" data-target="#myModalSignIn"> Login</a></li>
					<li><a href="#" data-toggle="modal" data-target="#myModalSignUp"> Register</a></li>
				</ul>
			</li>';
		}?>
	</ul>

</div><!-- /.navbar-collapse -->
</div><!-- /.container-fluid -->
</nav>

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('http://www.petstopwatford.com/web/images/main-banner.jpg');">
		<div class="container">
			<div class="row">
			</div>
		</div>
	</div>

	<div class="main main-raised">
		<div class="profile-content">
			<div class="container">


				<form class="navbar-form navbar-right" role="search" action="<?php echo site_url('searching');?>" method="post">
						<div class="form-group  is-empty">
							<input type="text" class="form-control" placeholder="Search" name="cari">
							<span class="material-input"></span>
						</div>
						<button type="submit" class="btn btn-white btn-round btn-just-icon">
							<i class="material-icons">search</i><div class="ripple-container"></div>
						</button>
					</form>
				<div class="row">
					<div class="title">
						<h2 id="heder">Electronic-PetDomesticShop</h2>
					</div>
					<div class="row">
            <div class="col-md-3">
              <div class="card card-nav-tabs">
                <div class="header header-success">
                  <!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
                  <div class="nav-tabs-navigation">
                    <div class="nav-tabs-wrapper">
                      <ul class="nav nav-tabs" data-tabs="tabs">
                        <li>
                          <h4>Category</h4>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="content">
                  <div class="tab-content">
                    <div>
                      <ul>
                        <h4>
                          <a href="<?php echo site_url('layout/dogpet'); ?>">
                            <i class="material-icons">send</i>
                            Dog Pet
                          </a>
                        </h4>
                        <h4>
                          <a href="<?php echo site_url('layout/catpet'); ?>">
                            <i class="material-icons">send</i>
                            Cat Pet
                          </a>
                        </h4>
                        <h4>
                          <a href="<?php echo site_url('layout/smallpet'); ?>">
                            <i class="material-icons">send</i>
                            Small Pet
                          </a>
                        </h4>
                        <h4>
                          <a href="<?php echo site_url('layout/petaccessories'); ?>">
                            <i class="material-icons">send</i>
                            Pet Accessories
                          </a>
                        </h4>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div>

						<div class="col-md-9">
							<!-- Carousel Card -->
							<div class="card card-raised card-carousel">
								<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
									<div class="carousel slide" data-ride="carousel">

										<!-- Indicators -->
										<ol class="carousel-indicators">
											<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
											<li data-target="#carousel-example-generic" data-slide-to="1"></li>
											<li data-target="#carousel-example-generic" data-slide-to="2"></li>
											<li data-target="#carousel-example-generic" data-slide-to="3"></li>
											<li data-target="#carousel-example-generic" data-slide-to="4"></li>
										</ol>

										<!-- Wrapper for slides -->
										<div class="carousel-inner">
											<div class="item active">
												<img src="<?php echo base_url(); ?>assets/img/bg2.jpeg" alt="Awesome Image">
											</div>
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/img/bg3.jpeg" alt="Awesome Image">
											</div>
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/img/bg4.jpeg" alt="Awesome Image">
											</div>
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/img/bg5.jpeg" alt="Awesome Image">
											</div>
											<div class="item">
												<img src="<?php echo base_url(); ?>assets/img/bg6.jpeg" alt="Awesome Image">
											</div>
										</div>

										<!-- Controls -->
										<a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
											<i class="material-icons">keyboard_arrow_left</i>
										</a>
										<a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
											<i class="material-icons">keyboard_arrow_right</i>
										</a>
									</div>
								</div>
							</div>
							<!-- End Carousel Card -->

						</div>
					</div>
					<div class="col-md-12">
					</br>
				</br>
				<!-- Tabs with icons on Card -->
				<div class="card card-nav-tabs">
					<div class="header header-success">
						<!-- colors: "header-primary", "header-info", "header-success", "header-warning", "header-danger" -->
						<div class="nav-tabs-navigation">
									<!--<ul class="pull-right">
										<li class="btn btn-primary" data-toggle="modal" data-target="#myModal">
												<i class="material-icons">add</i>
												Add Agenda
										</li>
									</ul> -->
									<div class="nav-tabs-wrapper">
										<ul class="nav nav-tabs" data-tabs="tabs">
											<li>
												<h4>Pets</h4>
											</li>
										</ul>
									</div>
								</div>
							</div>
					<div class="content">
						<div class="tab-content">
							<!-- Tabs with icons on Card -->
							<?php
								$start = 0;
								foreach ($AllPetList as $allpet)
								{
							?>
							<div class="col-md-3">
								<div class="card">
									<div class="content">
										<div class="tab-content">
											<div class="text-center">
											<img src="<?php echo base_url('assets/img/'.$allpet->foto);?>" class="img-rounded" width="100px" height="100px">
											</div>
											<div class="text-center">
											</br>
											<h4> <?php echo $allpet->judul?> </h4>
										</div>
										<div class="text-center">
											<p> <?php echo $allpet->harga?> </p>
										</div>
									</div>
									<div class="text-center">
										<button type="button" class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModalDAds">Buy</button>
									</div>
								</div>
								</div>
								</br>
								</br>
							</div>
							<?php
							}
							?>
						<!-- End Tabs with icons on Card -->
						</div>
					</div>
				</div>
				</br>
				</br>
				<!-- End Tabs with icons on Card -->
				<div class="text-center">
					<ul class="pagination pagination-info">
							<?php
										echo '<li><a href="javascript:void(0);">' . $this->pagination->create_links() .'</a></li>';
							?>
					</ul>
				</div>
				</div>
<footer class="footer footer-transparent">
	<div class="container">
		<div class="copyright">
			&copy; 2017 E-peds, made with love
		</div>
	</div>
</footer>


<!-- Sart Modal Sign Up -->
<div class="modal fade" id="myModalSignUp" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</br>
		<div class="card card-signup">
			<form id="formRegister" class="form" action="<?php echo site_url('register'); ?>" method="post" enctype="multipart/form-data">
				<div class="header header-primary text-center">
					<h4>Sign Up</h4>
				</div>
				<div class="content">
					<div class="alert alert-danger" id="alertmodal_danger">
						<div class="container-fluid">
							<div class="alert-icon">
								<i class="material-icons">error_outline</i>
							</div>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="material-icons">clear</i></span>
							</button>
							<b>Error Alert:</b><br/><br/> <p id="ErrorMessageRegister">Maaf pengguna belum terdaftar</p>
						</div>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">face</i>
						</span>
						<input type="text" class="form-control" placeholder="Nama Lengkap..." name="nama_lengkap">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">email</i>
						</span>
						<input type="text" class="form-control" placeholder="Email..." name="email">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock_outline</i>
						</span>
						<input type="password" placeholder="Password..." class="form-control" name="katasandi"/>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock_outline</i>
						</span>
						<input type="password" placeholder="Confirm Password..." class="form-control" name="konfirmasikatasandi" />
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">room</i>
						</span>
						<textarea class="form-control" placeholder="Alamat" rows="5" name="alamat"></textarea>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">account_box</i>
						</span>
					</br>

					<label>Foto Profil</label>
					<input type="file" class="btn btn-primary" id="gambar" name="gambar"/>
				</div>
			</div>
			<div class="footer text-center">
			</br>
		</br>
		<input type="submit" class="btn btn-primary btn-round" value="Sign Up"/>
	</div>
</form>
</div>
</div>
</div>
</div>
<!--  End Modal -->

<!-- Sart Modal Sign In -->
<div class="modal fade" id="myModalSignIn" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</br>

		<div class="card card-signup">
			<form id="formLogin" class="form" action="<?php echo site_url('login'); ?>" method="post" enctype="multipart/form-data">
				<div class="header header-primary text-center">
					<h4>Sign In</h4>
				</div>
				<div class="content">
					<!-- Alert -->
					<div class="alert alert-success">
						<div class="container-fluid">
							<div class="alert-icon">
								<i class="material-icons">check</i>
							</div>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="material-icons">clear</i></span>
							</button>
							<b>Success Alert:</b> Yuhuuu! Login Success
						</div>
					</div>

					<div class="alert alert-danger" id="alertmodal_danger">
						<div class="container-fluid">
							<div class="alert-icon">
								<i class="material-icons">error_outline</i>
							</div>
							<button type="button" class="close" data-dismiss="alert" aria-label="Close">
								<span aria-hidden="true"><i class="material-icons">clear</i></span>
							</button>
							<b>Error Alert:</b><br/><br/> <p id="ErrorMessageLogin">Maaf pengguna belum terdaftar</p>
						</div>
					</div>
					<!-- End Alert -->

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">email</i>
						</span>
						<input type="text" class="form-control" placeholder="Email..." name="email">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">lock_outline</i>
						</span>
						<input type="password" placeholder="Password..." class="form-control" name="katasandi"/>
					</div>
				</div>
				<div class="footer text-center">
				</br>
			</br>
			<input type="submit" class="btn btn-primary btn-round" value="Sign in"/>
		</div>
	</form>
</div>

</div>
</div>
</div>
<!--  End Modal -->

<!-- Sart Modal Buy Ads -->
	<div class="modal fade" id="myModalDAds" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content">
			</br>

					<div class="card card-signup">
							<form class="form" method="" action="">
								<div class="header header-primary text-center">
									<h4>Buy..?</h4>
								</div>
								<div class="content">
								</br>
								</br>
								<div class="text-center">
									<h4>Are You Sure Want to Buy This Pet???</h4>
									</div>
								<div class="footer text-center">
								</br>
								</br>
									<button type="button" class="btn btn-primary btn-round">Yes</button>
									<button type="button" class="btn btn-danger btn-round">No</button>
								</div>
							</form>
						</div>

			</div>
		</div>
	</div>
	<!--  End Modal -->

<script type="text/javascript">

$(document).ready(function()
{
	$("#formLogin").submit(function(e)
	{
		e.preventDefault();

		$.ajax({
			url:"<?php echo site_url('login'); ?>",
			type:"POST",
			data:$(this).serialize()
		}).done(function(responseLogin){

			if(responseLogin!='')
			{
				document.getElementById("ErrorMessageLogin").innerHTML=responseLogin;
				$("#alertmodal_danger").show('fast');
				//$(".alert.alert-danger").show('fast');
			}
			else
			{
				window.location.href = "http://localhost/epeds_web/";
			}
		});


	});
});

	$("#formRegister").submit(function(e)
	{
		e.preventDefault();

		$.ajax({
			url:"<?php echo site_url('register'); ?>",
			type:"POST",
			data:new FormData(this),
			processData:false,
      contentType:false,
      cache:false,
      async:false
		}).done(function(responseRegister){

			if(responseRegister!='')
			{
				document.getElementById("ErrorMessageRegister").innerHTML=responseRegister;
				$("#alertmodal_danger").show('fast');
				//$(".alert.alert-danger").show('fast');
			}
			else
			{
				window.location.href = "http://localhost/epeds_web/";
			}
		});
	});

</script>


</body>
<!--   Core JS Files   -->

<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>

<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js" type="text/javascript"></script>

<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
<script src="<?php echo base_url(); ?>assets/js/material-kit.js" type="text/javascript"></script>

<script>

	$().ready(function(){

		$(window).on('scroll', materialKit.checkScrollForTransparentNavbar);

	});

</script>




</html>
