<div class="container">
<div class="right_col" role="main">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $titleku; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form class="form-horizontal form-label-left" action="<?php echo site_url('perangkat/edit_perangkat'); ?>" method="post">

											<?php
                        //$no = 1;
                        foreach ($edit_data as $row) {
                        //perangkat_data adalah nama tabel dari database
                        $datas = json_decode($row->perangkat_data,true);

                      ?>
										<input type="hidden" class="form-control" name="perangkat_id" value="<?php echo $row->perangkat_id; ?>">
                    <div class="form-group">
                    <label class="control-label col-md-3 col-sm-3 col-xs-12">Jenis Perangkat</label>
                      <p class="col-md-9 col-sm-9 col-xs-12">
                        <input type="radio" class="flat" name="jenis_pkt" id="kategoriU" value="Router" checked="" required /> Router
                        <input type="radio" class="flat" name="jenis_pkt" id="kategoriP" value="Switch" /> Switch
                      </p>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12">Merk/Type</label>
                        <div class="col-md-3 col-sm-3 col-xs-6">
                          <select class="form-control" name="typety_pkt">
                            <option>Cisco</option>
                            <option>HP</option>
                          </select>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                          <input type="text" class="form-control col-md-2 col-sm-2 col-xs-6" placeholder="S3850" name="type_pkt" value="<?php echo $datas['type_perangkat'];?>">
                        </div>
                      </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Total Interface</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="number" class="form-control" placeholder="24" name="tport_pkt" value="<?php echo $datas['tport_perangkat'];?>">
                          </div>
                        </div>
                          <div class="form-group">
                            <label class="control-label col-md-3 col-sm-3 col-xs-12">IP address</label>
                            <div class="col-md-9 col-sm-9 col-xs-12">
                              <input type="text" class="form-control" placeholder="10.0.0.1" name="ip_pkt" value="<?php echo $datas['ip_perangkat'];?>">
                            </div>
                          </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">Port</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" placeholder="22" name="port_pkt" value="<?php echo $datas['port_perangkat'];?>">
                          </div>
                        </div>
                        <div class="form-group">
                          <label class="control-label col-md-3 col-sm-3 col-xs-12">User login</label>
                          <div class="col-md-9 col-sm-9 col-xs-12">
                            <input type="text" class="form-control" placeholder="router" name="user_pkt" value="<?php echo $datas['user_perangkat'];?>">
                          </div>
                        </div>

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                          <div class="col-md-3 col-sm-3 col-xs-6">
                            <select class="form-control" name="pwdty_pkt">
                              <option></option>
                              <option>default</option>
                              <option>merah</option>
                              <option>hitam</option>
                            </select>
                          </div>
                        <div class="col-md-6 col-sm-6 col-xs-6 form-group">
                          <input type="text" class="form-control col-md-2 col-sm-2 col-xs-6" placeholder="password" name="pwd_pkt" value="<?php echo $datas['pwd_perangkat'];?>">
                        </div>
                    </div>
                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-9 col-sm-9 col-xs-12 col-md-offset-3">
                          <button type="button" class="btn btn-primary">Cancel</button>
                          <button type="reset" class="btn btn-primary">Reset</button>
                          <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                      </div>

											<?php
												 }
											 ?>

                    </form>
                  </div>
                </div>
</div>
</div>
