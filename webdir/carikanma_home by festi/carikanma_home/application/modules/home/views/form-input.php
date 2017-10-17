<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	

	<style type="text/css">

	::selection{ background-color: #E13300; color: white; }
	::moz-selection{ background-color: #E13300; color: white; }
	::webkit-selection{ background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body{
		margin: 0 15px 0 15px;
	}
	
	p.footer{
		text-align: right;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 0 10px;
		margin: 20px 0 0 0;
	}
	
	#container{
		margin: 10px;
		border: 1px solid #D0D0D0;
		-webkit-box-shadow: 0 0 8px #D0D0D0;
	}
	</style>
</head>
<body>

<div id="container">
		<form action="<?php echo site_url('home/#myModal') ?>" method="POST">
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
					<input type="submit" name="Tambahkan" value="Tambahkan" />
				</div>
			</div>
		</div>
	</div>
   </div>
			
		

	<p class="footer">Page rendered in <strong>{elapsed_time}</strong> seconds</p>
</div>

</body>
</html>