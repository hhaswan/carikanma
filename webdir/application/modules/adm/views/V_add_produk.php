<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $titleku; ?></h3>
      </div>
      <!-- form start -->
    <form class="form-horizontal" action="add_produk" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label class="control-label col-md-2">Nama Produk</label>
          <div class="col-md-10">
              <input type="text" class="form-control" name="nm_produk">
          </div>
        </div>
         <div class="form-group">
          <label for="deskripsiproduk" class="control-label col-md-2">Deskripsi Produk</label>
          <div class="col-md-10">
              <textarea class="form-control" rows="3" name="desc_produk"></textarea>
          </div>
          </div>
          <div class="form-group">
            <label for="uploadfoto" class="control-label col-md-2">Upload Foto</label>
            <div class="col-md-10">
              <input type="file" name="images[]" id="images" multiple>
          </div>
          </div>

                 <button type="submit" class="btn btn-primary col-sm-offset-2">Tambahkan</button>
      </div>
    </form>
    <!-- form end -->

  </div>
</section>
