<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Carikanma!</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>assets-home/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets-home/css/bootstrap.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
   @font-face {
         font-family: "Sugarpunch DEMO";
         src: url('<?php echo base_url();?>assets-home/fonts/SugarpunchDEMO.otf');
         }

   .fontsugar {
         font-family: "Sugarpunch DEMO";
         }
</style>

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
            <li class="active"><a href="<?php echo base_url()?>">Carikanma! <span class="sr-only">(current)</span></a></li>
            <li data-toggle="modal" data-target="#myproduk"><a href="#">Tambah Produk</a></li>
          </ul>
          <!-- kanan -->
          <ul class="nav navbar-nav navbar-right">
              <li data-toggle="modal" data-target="#mylogin"><a href="#">Login</a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Account <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="<?php echo base_url() ?>adm">Admin Page</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="#">Keluar</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
<!-- modal tambah produk start -->
<div id="myproduk" class="modal fade myModal" role="dialog" aria-labelladby="myModal" aria-hidden="true" tabindex="-1" >
  <div class="modal-dialog">

    <div class="modal-content">

      <div class="modal-header">
        <button type="link" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Tambah Produk</h4>
      </div>

      <div class="modal-body">

            <form class="form-horizontal" method="post" enctype="multipart/form-data" action="upload.php">
          <div class="form-group">
            <label class="control-label col-sm-2">Nama Produk</label>
            <div class="col-sm-10">
                <input type="text" class="form-control">
            </div>
          </div>
           <div class="form-group">
            <label for="deskripsiproduk" class="control-label col-sm-2">Deskripsi Produk</label>
            <div class="col-sm-10">
                <textarea class="form-control" rows="3"></textarea>
            </div>
            </div>
            <div class="form-group">

              <input type="hidden" name="image_form_submit" value="1"/>
              <label for="uploadfoto" class="control-label col-sm-2">Upload Foto</label>
              <input type="file" name="images[]" id="images" multiple>

            </div>

                   <button type="submit" class="btn btn-primary btn-lg btn-block">Tambahkan</button>
        </form>

      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
      </div>
    </div>
  </div>
</div>
<!-- modal tambah produk end -->
    <!--modal register start-->
    <div id="mylogin" class="modal fade" role="dialog">
  		<div class="modal-dialog">

  			<div class="modal-content">

  				<div class="modal-header">
  					<button type="button" class="close" data-dismiss="modal">&times;</button>
  					<h4 class="modal-title">Login</h4>
  				</div>

  				<div class="modal-body">
  					<p>
              <form class="form-horizontal">
               <div class="form-group">
                <label class="control-label col-sm-2" for="username">Username</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control">
                </div>
              </div>
                      <div class="form-group">
                        <label class="control-label col-sm-2" for="password">Password</label>
                        <div class="col-sm-10">
                            <input type="password" class="form-control">
                        </div>
                      </div>
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Login</button>

                        <div class="col-sm-10"><span class="small">
                            Belum mempunyai akun? Registrasi <a href="<?php echo base_url()?>registrasi">disini</a></span>
                        </div>


                    </form>
                    </p>
  				</div>

  				<div class="modal-footer">
  					<button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
  				</div>
  			</div>
  		</div>
  	</div>
    <!--model register end-->
