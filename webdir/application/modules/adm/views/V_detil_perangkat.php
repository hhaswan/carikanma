<div class="right_col" role="main">
  <div class="row tile_count">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <?php
                      foreach ($ambil_data as $row) {
                        //perangkat_data adalah nama kolom dari database
                      $datas = json_decode($row->perangkat_data,true);
                      //foreach($datas as $datum){
                         // echo $datum['name_r'];
                    ?>
                    <h2><?php echo $titleku." - ". $datas['typety_perangkat'].' '.$datas['type_perangkat'];?></h2>
                    <div class="clearfix"></div>
                  </div>
                    <table class="table table-hover" cellspacing="0" width="100%">
                      <tbody>
                        <tr>
                          <td>Nama Perangkat</td>
                          <td><?php echo $datas['typety_perangkat'].' '.$datas['type_perangkat']; ?></td>
                        </tr>
                        <tr>
                          <td>Jenis</td>
                          <td><?php echo $datas['jenis_perangkat']; ?></td>
                        </tr>
                        <tr>
                          <td>Total Interface</td>
                          <td><?php echo $datas['tport_perangkat']; ?> Port</td>
                        </tr>
                        <tr>
                          <td>IP Address</td>
                          <td><?php echo $datas['ip_perangkat'];?></td>
                        </tr>
                        <tr>
                          <td>Port</td>
                          <td><?php echo $datas['port_perangkat'];?></td>
                        </tr>
                        <tr>
                          <td>User</td>
                          <td><?php echo $datas['user_perangkat'];?></td>
                        </tr>
                        <tr>
                          <td>Password</td>
                          <td>
                            <?php echo $datas['pwdty_perangkat'];
                            echo "&nbsp;";
                            echo $datas['pwd_perangkat'];
                            ?>
                          </td>
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
          </div>
        </div>
