<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Home</title>

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
      <a href="http://www.creative-tim.com">
           <div class="logo-container">
                <div class="logo">
                    <img src="<?php echo base_url(); ?>assets/img/logo.png" alt="Creative Tim Logo">
                </div>
                <div class="brand">
                    E-peds
                </div>
            </div>
      </a>
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
			<li class="dropdown">
	            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Login
					<b class="caret"></b>
				</a>
	            <ul class="dropdown-menu dropdown-menu-right">
	                    <li><a href="#" data-toggle="modal" data-target="#myModalSignIn"> Login</a></li>
		                <li><a href="#" data-toggle="modal" data-target="#myModalSignUp"> Register</a></li>
		        </ul>
	        </li>
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


				<form class="navbar-form navbar-right" role="search">
					<div class="form-group  is-empty">
	                <input type="text" class="form-control" placeholder="Search">
	                <span class="material-input"></span>
					</div>
					<button type="submit" class="btn btn-white btn-round btn-just-icon">
						<i class="material-icons">search</i><div class="ripple-container"></div>
					</button>
	            </form>

				<div class="title">
					<h2 id="heder">News & Tips</h2>
				</div>

				<div class="text-center">
					<div class="team">
						<div class="row">
							<div class="col-md-12">
			                    <div class="team-player">
			                        <img src="<?php echo base_url(); ?>assets/img/gg.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        </br>
									</br>
									<div class="text-left">
									<button title="Share on Facebook" data-placement="bottom" class="btn btn-primary btn-fab btn-fab-mini btn-round">
										<i class="fa fa-facebook-square"></i>
									</button>
			                        <h3 class="titlenews">Judul<br/>	</h3>
									<h4 class="titlenews">Tanggal<br/>	</h4>
			                        <p class="description">You can write here details about one of your team members. You can give more details about what they do. Feel free to add some <a href="#">links</a> for people to be able to follow them outside the site.</p>
									</br>
									</br>
									</div>
			                    </div>
			                </div>
							<!-- buttons row -->
							<div class="text-left">
							<div class="tim-row" id="buttons-row">
							</br>
							</br>
								<h3 class="titlenews">Comment :<br/>	</h3>
								<pre class="prettyprint">
								<p>We worked over the original Bootstrap classes, choosing a different, slightly intenser color pallete:</p>
								</pre>
							</div>
							</div>
    		<!--  end row -->
						</div>
					</div>

	            </div>

	        </div>
	    </div>
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
							<form class="form" method="" action="">
								<div class="header header-primary text-center">
									<h4>Sign Up</h4>
								</div>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">face</i>
										</span>
										<input type="text" class="form-control" placeholder="Nama_Lengkap...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Email...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" />
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Confirm Password..." class="form-control" />
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">room</i>
										</span>
										<textarea class="form-control" placeholder="Alamat" rows="5"></textarea>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">account_box</i>
										</span>
										</br>

										<label>Gambar Donatur</label>
										<input type="file" class="btn btn-primary" name="gambar_agenda" id="gambar_agenda"/>
									</div>
								</div>
								<div class="footer text-center">
								</br>
								</br>
									<button type="button" class="btn btn-primary btn-round">Sign Up</button>
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
							<form class="form" method="" action="">
								<div class="header header-primary text-center">
									<h4>Sign In</h4>
								</div>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
										<input type="text" class="form-control" placeholder="Email...">
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
										<input type="password" placeholder="Password..." class="form-control" />
									</div>
								</div>
								<div class="footer text-center">
								</br>
								</br>
									<button type="button" class="btn btn-primary btn-round">Sign In</button>
								</div>
							</form>
						</div>

			</div>
		</div>
	</div>
	<!--  End Modal -->

</body>
	<!--   Core JS Files   -->
	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
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
