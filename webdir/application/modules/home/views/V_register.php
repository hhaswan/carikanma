
<!DOCTYPE html>
<html>
<head>
	<title>Register | Carikanma!</title>
	<link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-home/css/bootstrap.css">
	<script type="text/JavaScript" src="<?php echo base_url();?>assets-home/js/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url();?>assets-home/js/bootstrap.min.js"></script>
</head>
<body>

	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">

				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand glyphicon glyphicon-search" href="#"></a>
			</div>

			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav">
					<li class="active"><a href="#">Carikanma! <span class="sr-only">(current)</span></a></li>
					<li><a href="#">Tambah Produk</a></li>
				</ul>

				<!-- kanan -->
				<ul class="nav navbar-nav navbar-right">
						<li data-toggle="modal" data-target="#mylogin"><a href="#">Login</a></li>
					<li class="dropdown">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
						<ul class="dropdown-menu">
							<li><a href="#">Profil</a></li>
							<li><a href="#">Data Produk</a></li>
							<li><a href="#">Data UMKM</a></li>
							<li role="separator" class="divider"></li>
							<li><a href="#">Keluar</a></li>
						</ul>
					</li>
				</ul>
			</div><!-- /.navbar-collapse -->
		</div><!-- /.container-fluid -->
	</nav>


	<div id="sukses" class="modal fade" role="dialog">
		<div class="modal-dialog">

			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Peringatan!</h4>
				</div>

				<div class="modal-body">
					<p>Registrasi sukses, silakan cek email anda !</p>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
				</div>
			</div>
		</div>
	</div>

	<div class="container-fluid">
	<div class="col-md-6 col-sm-5">

<img src="<?php echo base_url();?>assets-home/img/search_logo.png" width="40%">
		<p>Anda hanya membutuhkan satu akun
Satu akun gratis memberikan Anda akses ke semua produk Google.
<br>
Nikmati semuanya
<br>
Beralih antar-perangkat dan lanjutkan lagi yang tadi Anda tinggalkan.
</p>
	</div>
  <div class="col-md-6 col-sm-7">
			<form>
				  	<div class="form-group">
				    <label for="email">Email address:</label>
				    <input type="email" class="form-control" id="email">
				  </div>
				<div class="form-group">
				<label for="email">Nama lengkap :</label>
				<input type="email" class="form-control" id="email">
			</div>
				  <div class="form-group" >
				    <label for="pwd">Password:</label>
				    <input type="password" class="form-control" id="pwd">
				  </div>

				  <button type="button" class="btn btn-default" data-toggle="modal" data-target="#sukses">Submit</button>

				</form>

	</div>
</div>

</body>
</html>
