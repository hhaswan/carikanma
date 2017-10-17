<!-- Main content -->
<section class="content">
  <!-- Small boxes (Stat box) -->
  <div class="row">

    <div class="box box-info">
      <div class="box-header with-border">
        <h3 class="box-title"><?php echo $titleku; ?></h3>
      </div>
    <form class="form-horizontal" action="add_perangkat" method="post" enctype="multipart/form-data">
      <div class="box-body">
        <div class="form-group">
          <label class="control-label col-sm-2">Jenis Perangkat</label>
          <p class="col-sm-4">
          <input type="radio" class="flat" name="jenis_pkt" id="kategoriU" value="Router" checked="" required /> Router
          <input type="radio" class="flat" name="jenis_pkt" id="kategoriP" value="Switch" /> Switch
        </p>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">Merk/Type</label>
          <div class="col-sm-2">
            <select class="form-control" name="typety_pkt">
              <option>Cisco</option>
              <option>HP</option>
            </select>
          </div>
          <div class="form-group col-sm-4">
            <input type="text" class="form-control" placeholder="S3850" name="type_pkt">
          </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2">Total Interface</label>
        <div class="col-sm-6">
          <input type="number" class="form-control" placeholder="24" name="tport_pkt">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">IP address</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" placeholder="10.0.0.1" name="ip_pkt">
          </div>
        </div>
        <div class="form-group">
          <label class="control-label col-sm-2">Port</label>
        <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="22" name="port_pkt">
        </div>
      </div>
      <div class="form-group">
        <label class="control-label col-sm-2">User login</label>
          <div class="col-sm-6">
          <input type="text" class="form-control" placeholder="router" name="user_pkt">
        </div>
      </div>

      <div class="form-group">
        <label class="control-label col-sm-2">Password</label>
        <div class="col-sm-2">
          <select class="form-control" name="pwdty_pkt">
            <option></option>
            <option>default</option>
            <option>merah</option>
            <option>hitam</option>
          </select>
        </div>
      <div class="form-group col-sm-4">
        <input type="text" class="form-control" placeholder="password" name="pwd_pkt">
      </div>
    </div>
    <div class="ln_solid"></div>
              <div class="form-group">
        <div class="box-footer">
          <button type="button" class="btn btn-danger">Cancel</button>
          <button type="reset" class="btn btn-primary">Reset</button>
          <button type="submit" class="col-sm-offset-1 btn btn-success">Submit</button>

      </div>
    </div>
    </form>
  </div>
  </div>
</section>
