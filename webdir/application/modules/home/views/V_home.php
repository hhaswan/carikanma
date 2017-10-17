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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style type="text/css">
   @font-face {
         font-family: "Sugarpunch DEMO";
         src: url('fonts/SugarpunchDEMO.otf');
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
            <li class="active"><a href="#">Carikanma! <span class="sr-only">(current)</span></a></li>
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
        <p>
            <form class="form-horizontal">
          <div class="form-group">
          </div>
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
            <form method="post" id="multiple_upload_form" enctype="multipart/form-data" action="upload.php">
              <input type="hidden" name="image_form_submit" value="1"/>
              <label for="uploadfoto" class="control-label col-sm-2">Upload Foto</label>
              <input type="file" name="images[]" id="images" multiple>
            </form>
            </div>

                   <button type="submit" class="btn btn-primary btn-lg btn-block">Tambahkan</button>
        </form>
        </p>
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
                            Belum mempunyai akun? Register <a href="<?php echo base_url()?>home/register">disini</a></span>
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

    <div  class="container">
      <h1 class="fontsugar" style="text-align: center; color: blue">Mau apa?</h1>


          <div class="row">
              <div class="col-xs-8 col-xs-offset-2">
              <div class="input-group">
                      <div class="input-group-btn search-panel">
                          <button type="button" class="btn btn-default dropdown-toggle" data-toggle="dropdown">
                            <span id="search_concept">Filter by</span> <span class="caret"></span>
                          </button>
                          <ul class="dropdown-menu" role="menu">
                            <li><a href="#contains">Contains</a></li>
                            <li><a href="#its_equal">It's equal</a></li>
                            <li><a href="#greather_than">Greather than ></a></li>
                            <li><a href="#less_than">Less than < </a></li>
                            <li class="divider"></li>
                            <li><a href="#all">Anything</a></li>
                          </ul>
                      </div>
                      <input type="hidden" name="search_param" value="all" id="search_param">
                      <input type="text" class="form-control" name="x" placeholder="Search term...">
                      <span class="input-group-btn">
                          <button class="btn btn-default" type="button"><span class="glyphicon glyphicon-search"></span></button>
                      </span>
                  </div>
              </div>
        </div>

        <div style="text-align: center"><br></div>

        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>



        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>



        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>


        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>



        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>



        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary" role="button">Go to...</a> <a href="#" class="btn btn-warning" role="button"><span class="glyphicon glyphicon-star"></span></a></p>
            </div>
          </div>
        </div>

</div>

<script>
  $(document).ready(function(e){
    $('.search-panel .dropdown-menu').find('a').click(function(e) {
    e.preventDefault();
    var param = $(this).attr("href").replace("#","");
    var concept = $(this).text();
    $('.search-panel span#search_concept').text(concept);
    $('.input-group #search_param').val(param);
  });
});
</script>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="<?php echo base_url();?>assets-home/js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url();?>assets-home/js/bootstrap.min.js"></script>
  </body>
</html>
