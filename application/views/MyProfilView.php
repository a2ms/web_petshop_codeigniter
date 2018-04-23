<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/img/apple-icon.png">
	<link rel="icon" type="image/png" href="<?php echo base_url(); ?>assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Profile Page</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
	<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" />
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
	<link href="<?php echo base_url(); ?>assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/material-kit.css" rel="stylesheet"/>

	<link href="<?php echo base_url(); ?>assets/css/demo.css" rel="stylesheet" />
	<link href="<?php echo base_url(); ?>assets/css/Home.css" rel="stylesheet" />

	<script src="<?php echo base_url(); ?>assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url(); ?>assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="<?php echo base_url(); ?>assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="<?php echo base_url(); ?>assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="<?php echo base_url(); ?>assets/js/material-kit.js" type="text/javascript"></script>

</head>

<body class="profile-page">
	<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

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
		</div>
	</nav>

	<div class="wrapper">
		<div class="header header-filter" style="background-image: url('http://www.petstopwatford.com/web/images/main-banner.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
				<div class="container">
					<div class="row">
						<div class="profile">
							<div class="avatar">
								<img src="<?php echo base_url(); ?>foto/<?php echo $this->session->userdata('foto'); ?>" alt="Circle Image" class="img-circle img-responsive img-raised">
							</div>
							<div class="name">
								<h3 class="title"><?php echo $this->session->userdata('nama_lengkap'); ?></h3>
							</br>
						</div>
					</div>
				</div>
				<form class="navbar-form navbar-right" role="search">
					<div class="form-group  is-empty">
						<input type="text" class="form-control" placeholder="Search">
						<span class="material-input"></span>
					</div>
					<button type="submit" class="btn btn-white btn-round btn-just-icon">
						<i class="material-icons">search</i><div class="ripple-container"></div>
					</button>
				</form>

				<div class="row">

					<div class="row">
						<div class="col-md-12">
						</br>
					</br>
					<!-- Tabs with icons on Card -->
					<div class="card card-nav-tabs">
						<div class="header header-success">
							<div class="nav-tabs-navigation">
						<div class="nav-tabs-wrapper">
							<ul class="nav nav-tabs" data-tabs="tabs">
								<li>
									<h4>My  Pet</h4>
								</li>
								<li class="pull-right">
									<a href="#pablo" onclick="return SetMethodHewan('add',0);">
										<i class="material-icons">add</i>
										Add Ads
									</a>
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
						foreach ($MyPetList as $mypet)
						{
							?>
							<div class="col-md-3">
								<div class="card">
									<div class="content">
										<div class="tab-content">
											<div class="text-center">
												<img src="<?php echo base_url('assets/img/'.$mypet->foto);?>" class="img-rounded" width="100px" height="100px">
											</div>
											<div class="text-center">
											</br>
											<h4> <?php echo $mypet->judul?> </h4>
										</div>
										<div class="text-center">
											<p> <?php echo $mypet->harga?> </p>
										</div>
										<div class="text-center">
											<button type="button" id="btnIdHewan" class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModalDAds" onclick="SaveIdHewan(<?php echo $mypet->id_hewan ?>)">Sold</button>
											<button type="button" class="btn btn-primary btn-round" onclick="SetMethodHewan('update',<?php echo $mypet->id_hewan ?>)">Update</button>
										</div>
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
<!-- Aksesoris pet -->
	<div class="card card-nav-tabs">
		<div class="header header-success">
			<div class="nav-tabs-navigation">
				<div class="nav-tabs-wrapper">
					<ul class="nav nav-tabs" data-tabs="tabs">
						<li>
							<h4>My Pet Accessories</h4>
						</li>
						<li class="pull-right">
							<a href="#pablo" onclick="return SetMethodAksesoris('add',0);">
								<i class="material-icons">add</i>
								Add Ads
							</a>
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
				foreach ($MyAccessoriesList as $myaccessories)
				{
					?>
					<div class="col-md-3">
						<div class="card">
							<div class="content">
								<div class="tab-content">
									<div class="text-center">
										<img src="<?php echo base_url('assets/img/'.$myaccessories->foto);?>" class="img-rounded" width="100px" height="100px">
									</div>
									<div class="text-center">
									</br>
									<h4> <?php echo $myaccessories->judul?> </h4>
								</div>
								<div class="text-center">
									<p> <?php echo $myaccessories->harga?> </p>
								</div>
								<div class="text-center">
									<button type="button" id="btnIdHewan" class="btn btn-primary btn-round" data-toggle="modal" data-target="#myModalDAds" onclick="SaveIdHewan(<?php echo $mypet->id_hewan ?>)">Sold</button>
									<button type="button" class="btn btn-primary btn-round" onclick="SetMethodHewan('update',<?php echo $myaccessories->id_aksesoris ?>)">Update</button>
								</div>
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

<!-- Modal Pet -->
<div class="modal fade" id="ModalPet" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</br>

		<div class="card card-signup">
			<form class="form" class="form" id="FormModalPet">
				<div class="header header-primary text-center">
					<h4 title="TitleModalPet">Add Ads</h4>
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
							<b>Error Alert:</b><br/><br/> <p id="ErrorMessage">Maaf pengguna belum terdaftar</p>
						</div>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">title</i>
						</span>
						<input type="text" id="txtJudul" class="form-control" placeholder="Title Ads..." name="judul">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">attach_money</i>
						</span>
						<input type="text" id="txtHarga" class="form-control" placeholder="Price..." name="harga">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">pets</i>
						</span>
						<select name="kategori_hewan" id="cbJenisHewan" class="form-control">
							<option value="Kucing">Kucing</option>
							<option value="Anjing">Anjing</option>
							<option value="Small Pet">Small Pet</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">pets</i>
						</span>
						<input type="text" class="form-control" id="txtJenis" placeholder="Pet Type..." name="jenis_hewan">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">description</i>
						</span>
						<textarea class="form-control" id="txtDeskripsi" placeholder="Description..." rows="5" name="deskripsi"></textarea>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">add_a_photo</i>
						</span>
					</br>

					<label>Photo</label>
					<input type="file" class="btn btn-primary" name="gambar" id="gambar"/>
				</div>
			</div>
			<div class="footer text-center">
			</br>
		</br>
		<input type="submit" class="btn btn-primary btn-round" value="Post"/>
	</div>
</form>
</div>

</div>
</div>
</div>
<!--  Modal Pet -->

<!-- modal aksesoris pet -->
<div class="modal fade" id="ModalAksesoris" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</br>

		<div class="card card-signup">
			<form class="form" class="form" id="FormModalAksesoris">
				<div class="header header-primary text-center">
					<h4>Add Ads</h4>
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
							<b>Error Alert:</b><br/><br/> <p id="ErrorMessage">Maaf pengguna belum terdaftar</p>
						</div>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">title</i>
						</span>
						<input type="text" class="form-control" placeholder="Title Ads..." name="judul">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">attach_money</i>
						</span>
						<input type="text" class="form-control" placeholder="Price..." name="harga">
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">pets</i>
						</span>
						<select id="cbJenisHewan" name="kategori_hewan" class="form-control">
							<option value="Kucing">Kucing</option>
							<option value="Anjing">Anjing</option>
							<option value="Small Pet">Small Pet</option>
						</select>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">description</i>
						</span>
						<textarea class="form-control" placeholder="Description..." rows="5" name="deskripsi"></textarea>
					</div>

					<div class="input-group">
						<span class="input-group-addon">
							<i class="material-icons">add_a_photo</i>
						</span>
					</br>

					<label>Photo</label>
					<input type="file" class="btn btn-primary" name="gambar" id="gambar"/>
				</div>
			</div>
			<div class="footer text-center">
			</br>
		</br>
		<input type="submit" class="btn btn-primary btn-round" value="Post"/>
	</div>
</form>
</div>

</div>
</div>
</div>
<!-- modal aksesoris pet -->

<!-- Sart Modal Delete Ads -->
<div class="modal fade" id="myModalDAds" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
		</br>

		<div class="card card-signup">
			<form class="form" method="" action="">
				<div class="header header-primary text-center">
					<h4>Alert..!!!</h4>
				</div>
				<div class="content">
				</br>
			</br>
			<div class="text-center">
				<h4>Are You Sure This Ads Sold Out???</h4>
			</div>
			<div class="footer text-center">
			</br>
		</br>
		<button type="button" class="btn btn-primary btn-round" onclick="SoldOut()">Yes</button>
		<button type="button" class="btn btn-danger btn-round" data-dismiss="modal" aria-label="Close">No</button>
	</div>
</form>
</div>

</div>
</div>
</div>
<!--  End Modal -->

<script type="text/javascript">

var id_hewan;
var action;

function SetMethodHewan(Action,Id_hewan)
{
	id_hewan=Id_hewan;
	action=Action;
	if(action=="update")
	{
		SetData(id_hewan);
	}
	if(action=="add")
	{
		ClearData();
		$("#ModalPet").modal('show');
	}
}

function SetMethodAksesoris(Action,Id_hewan)
{
	id_hewan=Id_hewan;
	action=Action;
	if(action=="update")
	{
		SetData(id_hewan);
	}
	if(action=="add")
	{
		ClearData();
		$("#ModalAksesoris").modal('show');
	}
}

$("#FormModalPet").submit(function(e)
{
	e.preventDefault();

	var formData=new FormData(this);
	formData.append('id_hewan',id_hewan);

	if(action=="update")
	{
		$.ajax({
			url:"<?php echo site_url('pengguna/updatehewan'); ?>",
			type:"POST",
			data:formData,
			processData:false,
			contentType:false,
			cache:false,
			async:false
		}).done(function(response){
			if(response!='')
			{
				document.getElementById("ErrorMessage").innerHTML=response;
				$("#alertmodal_danger").show('fast');
			}
			else
			{
				window.location.href = "<?php echo site_url('layout/myprofile'); ?>";
			}
		});
	}
	if(action=="add")
	{
		$.ajax({
			url:"<?php echo site_url('pengguna/inserthewan'); ?>",
			type:"POST",
			data:formData,
			processData:false,
			contentType:false,
			cache:false,
			async:false
		}).done(function(response){
			if(response!='')
			{
				document.getElementById("ErrorMessage").innerHTML=response;
				$("#alertmodal_danger").show('fast');
			}
			else
			{
				window.location.href = "<?php echo site_url('layout/myprofile'); ?>";
			}
		});
	}
});

$("#FormModalAksesoris").submit(function(e)
{
	e.preventDefault();

	var formData=new FormData(this);
	formData.append('id_hewan',id_hewan);

	if(action=="update")
	{
		$.ajax({
			url:"<?php echo site_url('pengguna/updatehewan'); ?>",
			type:"POST",
			data:formData,
			processData:false,
			contentType:false,
			cache:false,
			async:false
		}).done(function(response){
			if(response!='')
			{
				document.getElementById("ErrorMessage").innerHTML=response;
				$("#alertmodal_danger").show('fast');
			}
			else
			{
				window.location.href = "<?php echo site_url('layout/myprofile'); ?>";
			}
		});
	}
	if(action=="add")
	{
		$.ajax({
			url:"<?php echo site_url('pengguna/inserthewan'); ?>",
			type:"POST",
			data:formData,
			processData:false,
			contentType:false,
			cache:false,
			async:false
		}).done(function(response){
			if(response!='')
			{
				document.getElementById("ErrorMessage").innerHTML=response;
				$("#alertmodal_danger").show('fast');
			}
			else
			{
				window.location.href = "<?php echo site_url('layout/myprofile'); ?>";
			}
		});
	}
});

function ClearData()
{
	$('#txtJudul').val("");
	$('#txtHarga').val("");
	$('#txtJenis').val("");
	$('#txtDeskripsi').val("");
}

function UpdateHewan(id)
{
	$.ajax({
		type: "GET",
		url: "<?php echo site_url('pengguna/updatehewan'); ?>",
		data: "id_hewan="+id
	}).done(function(response) {
		if(response!='')
		{
			document.getElementById("ErrorMessage").innerHTML=response;
			$("#alertmodal_danger").show('fast');
		}
		else
		{
			window.location.href = "<?php echo site_url('layout/myprofile'); ?>";
		}
	});
}

function SoldOut()
{
	$.ajax({
		type: "GET",
		url: "<?php echo site_url('soldout'); ?>",
		data: "id_hewan="+id_hewan
	}).done(function( msg ) {
		window.location.href = "<?php echo site_url('layout/myprofile'); ?>";
	});
}

function SetData(id)
{
	id_hewan=id;
	$.ajax({
		type: "GET",
		url: "<?php echo site_url('setdata'); ?>",
		data: "id_hewan="+id,
		dataType: "JSON"
	}).done(function( data ) {
		$('#txtJudul').val(data.judul);
		$('#txtHarga').val(data.harga);
		$('#txtJenis').val(data.kategori_hewan);
		var dropdown=document.getElementById("cbJenisHewan");
		DropDownSetSelected(dropdown, data.jenis_hewan);
		$('#txtDeskripsi').val(data.deskripsi);
		$('#ModalPet').modal('show'); // show bootstrap modal when complete loaded
	});
}

function DropDownSetSelected(selectObj, valueToSet) {
	for (var i = 0; i < selectObj.options.length; i++) {
		if (selectObj.options[i].text== valueToSet) {
			selectObj.options[i].selected = true;
			return;
		}
	}
}
</script>
</body>
</html>
