<!--INNER BANNER START-->

<section id="inner-banner">

  <div class="container">

    <h1>List UMKM</h1>

  </div>

</section>

<!--INNER BANNER END-->



<!--POPULAR JOB CATEGPRIES START-->

<section class="popular-job-caregries popular-categories candidates-listing">

  <div class="holder">

    <div class="container">

      <h4>UMKM Terpopuler</h4>

      <div id="popular-job-slider" class="owl-carousel owl-theme">
        <?php
          foreach ($ambil_data as $row) {
        ?>
        <div class="item">
          <div class="box"> <img alt="img" src="<?php echo base_url();?>assets/images/categories-icon-1.png">
            <h4><a href="#"><?php echo $row->nama_umkm; ?></a></h4>
            <strong><?php echo $row->kategori; ?></strong>
            <span><i class="fa fa-map-marker"></i> <?php echo $row->alamat_umkm; ?> </span>
          </div>
        </div>
        <?php
      }
      ?>
      </div>

    </div>

  </div>

</section>

<!--POPULAR JOB CATEGPRIES END-->
<!--MAIN START-->

<div id="main">

  <!--RECENT JOB SECTION START-->

  <section class="resumes-section padd-tb">

    <div class="container">

      <div class="row">

        <div class="col-md-9 col-sm-8">

          <div class="resumes-content">

            <div class="check-filter">

              <form action="#">

                <ul>

                  <li>

                    <input id="id1" type="checkbox" />

                    <label>Semua UMKM</label>

                  </li>

                  <li>

                    <input id="id2" type="checkbox" />

                    <label>Makanan</label>

                  </li>

                  <li>

                    <input id="id3" type="checkbox" />

                    <label>Kesenian</label>

                  </li>

                  <li>

                    <input id="id4" type="checkbox" />

                    <label>Fashion</label>

                  </li>
                </ul>

              </form>

            </div>

            <h2>Semua UMKM</h2>
             <div id="myUMKM">
                <?php
                  foreach ($ambil_data as $row) {
                ?>
                <div>

            <div class="box">

              <div class="frame"><img src="<?php echo base_url();?>assets/images/resumes/resumes-img-1.jpg" alt="img"></div>

                    <div class="text-box">

                      <h2><?php echo $row->nama_umkm; ?></h2>

                      <h4><?php echo $row->kategori; ?></h4>
                      <p>
                      <i class="fa fa-map-marker"></i> <?php echo $row->alamat_umkm; ?>
                      <br>
                      <i class="fa fa-user" aria-hidden="true"></i><?php echo ' '.$row->nama_pemilik; ?>
                      <br>
                      <i class="fa fa-mobile"></i><?php echo ' '.$row->no_hp.' / '.$row->email; ?>
                    </p>
                      

                <div class="btn-row"><a href="#" class="contact">Lihat Produk</a></div>

              </div>

            </div>

              </div>
                <?php
              }
                ?>
              </div>
              

           <div id="loadMore"> <a href="#" class="load-more"><i class="fa fa-user"></i>Lihat Semua</a></div>
            </div>

          </div>

      </div>

    </div>

  </section>

  <!--RECENT JOB SECTION END-->

</div>

<!--MAIN END-->
