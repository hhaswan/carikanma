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
	
	<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Sign up</button>

	
	<div id="myModal" class="modal fade" role="dialog">
		<div class="modal-dialog">
			
			<div class="modal-content">
				
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal">&times;</button>
					<h4 class="modal-title">Sign up</h4>
				</div>
				
				<div class="modal-body">
					<p><form class="form-horizontal">
                     <div class="form-group">
                      <label class="control-label col-sm-2" for="emailaddress">E-mail</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-sm-2" for="namaumkm">Nama UMKM</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-sm-2" for="alamat">Alamat</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control">
                      </div>
                    </div>
                     <div class="form-group">
                      <label class="control-label col-sm-2" for="handphone">No HP</label>
                      <div class="col-sm-10">
                          <input type="text" class="form-control">
                      </div>
                    </div>   
                    <div class="col-md-6">
                      <div class="form-group">
                      	<label>Upload KTP</label>
                      	<div class="input-group">
                      		<span class="input-group-btn">
                      			<span class="btn btn-default btn file">Browse...<input type="file" name="imgInp">
                      			</span>
                      		</span>
                      	</div>
                      	<img id="img-upload">
                      </div>
                    </div>
                     <div class="col-md-6">
                      <div class="form-group">
                      	<label>Upload Surat Ijin Usaha</label>
                      	<div class="input-group">
                      		<span class="input-group-btn">
                      			<span class="btn btn-default btn file">Browse...<input type="file" name="imgInp">
                      			</span>
                      		</span>
                      	</div>
                      	<img id="img-upload">
                      </div>
                     </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Daftar</button>
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