<div class="box">
  <div class="box-header">
    <h3 class="box-title"><?php echo $titleku; ?></h3>
  </div>
  <!-- /.box-header -->
  <div class="box-body">
    <table id="example1" class="table table-bordered table-striped table-hover">
      <thead>
      <tr>
        <th class="col-md-1">No.</th>
        <th class="col-md-2">Nama Produk</th>
        <th class="col-md-5">Deskripsi</th>
        <th class="col-md-3">Foto Produk</th>
        <th class="col-md-1">Action</th>
      </tr>
      </thead>
      <tbody>
        <?php
          $no = 1;
          foreach ($ambil_data as $row) {
        ?>
      <tr>
        <td><?php echo $no++ ;?></td>
        <td><?php echo $row->nama_produk; ?></td>
        <td><?php echo $row->deskripsi;?></td>
        <td><?php echo $row->foto_produk;?></td>
        <td><a href="<?php echo base_url('adm/produk/edit/'.$row->id_produk) ?>" class="btn-xs btn-success"><span class="fa fa-edit"></span></a>
        <a href="<?php echo base_url('adm/produk/hapus/').$row->id_produk ?>" class="btn-xs btn-danger" onclick="return confirm('Anda yakin akan menghapus data?')"><span class="fa fa-remove"></span></a></td>
      </tr>
      <?php
         }
       ?>
      </tbody>
    </table>
  </div>
  <!-- /.box-body -->
</div>
