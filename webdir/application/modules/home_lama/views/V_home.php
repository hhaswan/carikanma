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
                            <li><a href="#contains">Terpopuler</a></li>
                            <li><a href="#its_equal">Kota</a></li>
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

        <div style="text-align: center"><br></div>
        <hr>
<div class="container-fluid" style="background-color: lightgray">
  <p><h3>Produk populer</h3></p>
  <?php
    $no = 1;
    foreach ($ambil_data as $row) {
  ?>
        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">

            <img src="..." alt="...">
            <div class="caption">
              <h4><?php echo $row->nama_produk; ?></h4>
              <small><p><?php echo $row->deskripsi;?></p></small>
              <p><a href="#" class="btn btn-primary btn-xs btn-xs" role="button">Selengkapnya disini</a> <a href="#" class="btn btn-success btn-xs" role="button"><span class="glyphicon glyphicon-star"></span> Like</a></p>
            </div>

          </div>
        </div>

        <?php
           }
         ?>

</div>
<hr>
<div class="container-fluid" style="background-color: lightgray; padding-bottom:35px">
  <p><h3>Baru ditambahkan</h3></p>
        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary btn-xs" role="button">Selengkapnya disini</a> <a href="#" class="btn btn-success btn-xs" role="button"><span class="glyphicon glyphicon-star"></span> Like</a></p>
            </div>
          </div>
        </div>



        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary btn-xs" role="button">Selengkapnya disini</a> <a href="#" class="btn btn-success btn-xs" role="button"><span class="glyphicon glyphicon-star"></span> Like</a></p>
            </div>
          </div>
        </div>

        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary btn-xs" role="button">Selengkapnya disini</a> <a href="#" class="btn btn-success btn-xs" role="button"><span class="glyphicon glyphicon-star"></span> Like</a></p>
            </div>
          </div>
        </div>



        <div class="col-sm-4 col-md-3">
          <div class="thumbnail">
            <img src="..." alt="...">
            <div class="caption">
              <h3>Thumbnail label</h3>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
              <p><a href="#" class="btn btn-primary btn-xs" role="button">Selengkapnya disini</a> <a href="#" class="btn btn-success btn-xs" role="button"><span class="glyphicon glyphicon-star"></span> Like</a></p>
            </div>
          </div>
        </div>
</div>
<hr>
</div>
