<!DOCTYPE html>
<html>
<head>
	<title>Carikanma !</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<script type="text/JavaScript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
</head>
<body>
   <div class="container">		
	<center><h1>Carikanma !</h1></center>
	<br/>
	
	
<button type="button" class="btn btn-success btn-md" data-toggle="modal" data-target="#myModal">
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Tambah Produk
</button>
	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Tambah Produk</h4>
				</div>
				
				<div class="modal-body">
					<p>
              <form class="form-horizontal">
            <div class="form-group">
              <label class="control-label col-sm-2" for="kategoriumkm" >Kategori</label>
              <div class="col-sm-10">
              <select class="form-control" id="kategoriumkm">
                  <option>Bahan Baku</option>
                  <option>Kerajinan</option>
                  <option>Makanan</option>
              </select>
              </div>
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
              <div class="col-md-6">
                      <div class="form-group">
                        <label>Upload Foto</label>
                        <div class="input-group">
                          <span class="input-group-btn">
                            <span class="btn btn-default btn file">Browse...<input type="file" name="imgInp">
                            </span>
                          </span>
                        </div>
                        <img id="img-upload">
                      </div>
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
</body>
</html>