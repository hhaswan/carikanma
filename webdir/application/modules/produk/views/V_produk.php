<!--INNER BANNER START-->
<section id="inner-banner">
  <div class="container">
    <h1>List Produk</h1>
  </div>
</section>
<!--INNER BANNER END-->
<!--POPULAR JOB CATEGPRIES START-->
<section class="popular-job-caregries popular-categories candidates-listing">
  <div class="holder">
    <div class="container">
      <h4>Produk Terlaris</h4>
      <div id="popular-job-slider" class="owl-carousel owl-theme">
        <?php
          foreach ($ambil_data as $row) {
        ?>
        <div class="item">
          <div class="box"> <img alt="img" src="<?php echo base_url();?>assets/images/categories-icon-1.png">
            <h4><a href="#"><?php echo $row->nama_produk; ?></a></h4>
            <strong><?php echo $row->id_produk; ?> Likes</strong>
            <p>di <?php echo $row->nama_umkm; ?></p>
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

                    <label>Semua Produk</label>

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

            <h2>Semua Produk</h2>
            <div id="myProducts">
                <?php
                  foreach ($ambil_data as $row) {
                ?>
                <div>

                  <div class="box">

                    <div class="frame"><img src="<?php echo base_url();?>assets/images/resumes/resumes-img-1.jpg" alt="img"></div>

                    <div class="text-box">

                      <h4><?php echo $row->nama_produk; ?></h4>

                      <p><?php echo $row->nama_produk.' '.$row->deskripsi; ?></p>
                      <p>
                        <i class="fa fa-map-marker"></i><?php echo '<b> '.$row->nama_umkm.'</b> ('.$row->alamat_umkm.')' ?>
                        <br><i class="fa fa-mobile"></i><?php echo ' '.$row->no_hp.' / '.$row->email; ?>
                      </p>

                
                  <a href="#" class="btn btn-warning"><?php echo $row->id_produk.' ' ?><i class="fa fa-thumbs-o-up" aria-hidden="true"></i></a></div>
            </div>

                </div>
                <?php
              }
                ?>

              </div>
              

           <div id="loadMore"> <a href="#" class="load-more"><i class="fa fa-user"></i>Lihat Semua</a></div>
            </div>

          </div>

       <!--  <div class="col-md-3 col-sm-4">

          <h2>Related People</h2>

          <aside>

            <div class="sidebar">

              <div class="related-people">

                <ul>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-1.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Bettymesfin</a></strong> <span><i class="fa fa-tags"></i>Developer</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-2.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Cammy</a></strong> <span><i class="fa fa-tags"></i>Front Desk Specialist</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-3.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Jane Doe</a></strong> <span><i class="fa fa-tags"></i>Marketing Online</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-4.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Angela Haze</a></strong> <span><i class="fa fa-tags"></i>Accountant</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-5.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Suzy Biggs</a></strong> <span><i class="fa fa-tags"></i>HR Manager Expert</span> <span><i class="fa fa-map-marker"></i>London, UK</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-6.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Rachael Smith</a></strong> <span><i class="fa fa-tags"></i>Lead Designer</span> <span><i class="fa fa-map-marker"></i>New York, NY</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-1.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Bettymesfin</a></strong> <span><i class="fa fa-tags"></i>Developer</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-2.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Cammy</a></strong> <span><i class="fa fa-tags"></i>Front Desk Specialist</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-3.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Jane Doe</a></strong> <span><i class="fa fa-tags"></i>Marketing Online</span> <span><i class="fa fa-map-marker"></i>Atlanta</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-4.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Angela Haze</a></strong> <span><i class="fa fa-tags"></i>Accountant</span> <span><i class="fa fa-map-marker"></i>Berlin</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-5.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Suzy Biggs</a></strong> <span><i class="fa fa-tags"></i>HR Manager Expert</span> <span><i class="fa fa-map-marker"></i>London, UK</span> </div>

                  </li>

                  <li>

                    <div class="frame"><a href="#"><img src="<?php echo base_url();?>assets/images/resumes/related-img-6.jpg" alt="img"></a></div>

                    <div class="text-box"> <strong class="name"><a href="#">Rachael Smith</a></strong> <span><i class="fa fa-tags"></i>Lead Designer</span> <span><i class="fa fa-map-marker"></i>New York, NY</span> </div>

                  </li>

                </ul>

              </div>

            </div>

          </aside>

        </div> -->

      </div>

    </div>

  </section>

  <!--RECENT JOB SECTION END-->

</div>

<!--MAIN END-->
