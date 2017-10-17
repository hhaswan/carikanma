        <div class="right_col" role="main">
          <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2><?php echo $titleku; ?></h2>
                    <div class="clearfix"></div>
                  </div>
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                          <th>No</th>
                          <th>Jenis</th>
                          <th>Merk</th>
                          <th>IP Address</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      <?php
                        $no = 1;
                        foreach ($ambil_data as $row) {
                          //perangkat_data adalah nama kolom dari database
                        $datas = json_decode($row->perangkat_data,true);
                        //foreach($datas as $datum){
                           // echo $datum['name_r'];
                      ?>
                        <tr>
                          <td><?php echo $no++ ;?></td>
                          <td><?php echo $datas['jenis_perangkat']; ?></td>
                          <td><?php echo $datas['typety_perangkat'].' '.$datas['type_perangkat'];?></td>
                          <td><?php echo $datas['ip_perangkat'];?></td>
                          <td><a href="<?php echo base_url('perangkat/detil/'.$row->perangkat_id) ?>" class="fa fa-eye"></a>&nbsp;<a href="<?php echo base_url('perangkat/hapus/').$row->perangkat_id ?>" onclick="return confirm('Anda yakin akan menghapus data?')" class="fa fa-remove"></a>&nbsp;<a href="<?php echo base_url('perangkat/edit/'.$row->perangkat_id) ?>" class="fa fa-edit"></a></td>
                        </tr>
                       <?php
                          }
                        ?>
                      </tbody>
                    </table>


                  </div>
                </div>
              </div>
            </div>
