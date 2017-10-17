<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Bootstrap 101 Template</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

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

        <div style="text-align: center">Login</div>
        <div style="text-align: center">
        	<p><a href="#myModal" data-toggle="modal" data-target="#myModal">Add Product</a></p>
        </div>
        
       <div class="container">
	<div id="myModal" class="modal fade myModal" role="dialog" aria-labelladby="myModal" aria-hidden="true" tabindex="-1" >
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
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>