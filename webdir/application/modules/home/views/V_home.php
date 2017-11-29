  <!--BANNER START-->
  <div class="banner-outer">
    <div id="banner" class="element"> <img src="<?php echo base_url();?>assets/images/banner-img-1.png" alt="banner"> </div>
    <div class="caption">
      <div class="holder">
        <h1>Carikanma!</h1>
        <form action="#">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
                <input type="text" placeholder="Kecamatan">
              </div>
              <div class="col-md-5 col-sm-5">
                <input type="text" placeholder="Kata kunci yang ingin dicari">
              </div>
              <div class="col-md-1 col-sm-1">
                <button type="submit"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </div>
        </form>
        <div class="btn-row"> <a href="<?php echo base_url();?>produk/add_produk"><i class="fa fa-user"></i>Pengusaha</a> <a href="#recentproduk"><i class="fa fa-search"></i>Pencari</a> </div>
<!--
Pengusaha diarahkan ke tambah produk
Pencari diarahkan ke #recent produk -->
      </div>
    </div>
    <div class="browse-job-section">
      <div class="container">
        <div class="holder"> <a href="<?php echo base_url();?>produk" class="btn-brows">Cari Produk</a> <strong class="title">Mencari bahan baku yang dibutuhkan untuk UMKM Anda dengan cepat dan mudah di  seluruh Makassar</strong> </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->
  <!--MAIN START-->
  <div id="main">
    <!--POPULAR JOB CATEGORIES START-->
    <section class="popular-categories">

      <div class="container">

        <div class="clearfix">

          <h2>Produk Paling Dicari &nbsp; </h2></div> 
          <div id="popular-job-slider" class="owl-carousel owl-theme">
          <?php
            foreach ($ambil_data as $row) {
          ?>
          <div class="item">
            <div class="box"> <img alt="img" src="<?php echo base_url();?>assets/images/categories-icon-1.png">
              <h4><a href="#"><?php echo $row->nama_produk; ?></a></h4>
              <strong><?php echo $row->id_produk; ?> Likes</strong>
              <p>di Lokasi</p>
            </div>
          </div>
          <?php
        }
          ?>
</div>
        </div>
        
      </div>
     
    </section>
    <!--POPULAR JOB CATEGORIES END-->
    <!--RECENT JOB SECTION START-->

    <section class="recent-row padd-tb">
      <div class="container">
        <div class="row">
          <div class="col-md-9 col-sm-8">
            <div id="content-area">
              <h2>Produk terakhir</h2>
              <ul id="myList">
                <?php
                  foreach ($ambil_data as $row) {
                ?>
                <li>
                  <div class="box">
                    <div class="thumb"><a href="#"><img src="<?php echo base_url();?>assets/images/recent-job-thumb-1.jpg" alt="img"></a></div>
                    <div class="text-col">
                      <h4><a href="#"><?php echo $row->nama_produk; ?></a></h4>
                        <p><?php echo $row->nama_produk.' '.$row->deskripsi; ?></p>
                        <p>
                        <i class="fa fa-map-marker"></i><?php echo '<b> '.$row->nama_umkm.'</b> ('.$row->alamat_umkm.')' ?>
                        <br><i class="fa fa-mobile"></i><?php echo ' '.$row->no_hp.' / '.$row->email; ?>
                        </p>
                      </div>
                </li>
                <?php
                    
              }
                ?>
              </ul>
              <div id="loadMore"> <a href="#" class="load-more"><i class="fa fa-user"></i>Lihat Semua</a></div>
            </div>
          </div>
          <div class="col-md-3 col-sm-4">

            <h2>UMKM Produk Terbanyak</h2>

            <aside>

              <div class="sidebar">

                <div class="box">

                  <div class="thumb"> <a href="#"><img src="<?php echo base_url();?>assets/images/features-img-1.jpg" alt="img"></a>

                    <div class="caption"><img src="<?php echo base_url();?>assets/images/envato-text.png" alt="envato"></div>

                  </div>

                  <div class="text-box"> <a href="#" class="btn-time">Lihat Semua</a>

                    <h4><a href="#">UI/UX Visual Designers</a></h4>

                    <a href="#" class="text"><i class="fa fa-map-marker"></i>Moorgate, London</a> <a href="#" class="text"><i class="fa fa-calendar"></i>Dec 22, 2015 - Mar 17, 2016 </a> <strong class="price"><i class="fa fa-money"></i>$4000 - $5000</strong> <a href="#" class="btn-apply">See More</a> </div>

                </div>

              </div>

            </aside>

          </div>

        </div>

      </div>

    </section>

    <!--RECENT JOB SECTION END-->



    <!--CALL TO ACTION SECTION START-->

    <section class="call-action-section">

      <div class="container">

        <div class="text-box">

          <h2>Produk mudah ditemukan</h2>

          <p>Anda ingin menambahkan UMKM dan produk Anda? </p>

        </div>

        <a href="<?php echo base_url();?>sign/in" class="btn-get">Registrasi &amp; Coba sekarang!</a> </div>

    </section>
    <!--CALL TO ACTION SECTION END-->
    <!--POST AREA START-->
  </div>
  <!--MAIN END-->
