<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Carikanma</title>
<!--CUSTOM CSS-->
<link href="<?php echo base_url();?>assets/css/custom.css" rel="stylesheet" type="text/css">
<!--BOOTSTRAP CSS-->
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css">
<!--COLOR CSS-->
<link href="<?php echo base_url();?>assets/css/color.css" rel="stylesheet" type="text/css">
<!--RESPONSIVE CSS-->
<link href="<?php echo base_url();?>assets/css/responsive.css" rel="stylesheet" type="text/css">
<!--OWL CAROUSEL CSS-->
<link href="<?php echo base_url();?>assets/css/owl.carousel.css" rel="stylesheet" type="text/css">
<!--FONTAWESOME CSS-->
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--TEXT EDITOR CSS-->
<!-- <link href="<?php echo base_url();?>assets/css/editor.css" type="text/css" rel="stylesheet"/> -->
<!--SCROLL FOR SIDEBAR NAVIGATION-->
<link href="<?php echo base_url();?>assets/css/jquery.mCustomScrollbar.css" rel="stylesheet" type="text/css">
<!--FAVICON ICON-->
<link rel="icon" href="<?php echo base_url();?>assets/images/favicon.ico" type="image/x-icon">
<!--GOOGLE FONTS-->
<link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,500,700,900' rel='stylesheet' type='text/css'>
<!--[if lt IE 9]>

      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>

    <![endif]-->
</head>
<body class="theme-style-1">
<!--WRAPPER START-->
<div id="wrapper">
  <!--HEADER START-->
  <header id="header">
    <div class="container">
      <!--NAVIGATION START-->
      <div class="navigation-col">
        <nav class="navbar navbar-inverse">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

            <strong class="logo"><a href="<?php echo base_url();?>"><img src="<?php echo base_url();?>assets/images/logo.png" alt="logo"></a></strong> </div>
          <div id="navbar" class="collapse navbar-collapse">
            <ul class="nav navbar-nav" id="nav">
              <li><a href="<?php echo base_url();?>">Halaman Utama</a></li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Produk<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url();?>produk"><span class="fa fa-list"></span>List Produk</a></li>
                <li><a href="<?php echo base_url();?>produk/add_produk"><span class="fa fa-plus"></span>Tambah Produk</a></li>              
              </ul>
              </li>
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">UMKM<span class="caret"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="<?php echo base_url();?>umkm"><span class="fa fa-list"></span>List UMKM</a></li>
                <li><a href="<?php echo base_url();?>umkm/add_umkm"><span class="fa fa-pencil"></span>Registrasi UMKM</a></li>              
              </ul>
              </li>
            </ul>
          </div>
        </nav>
      </div>
      <!--NAVIGATION END-->
    </div>
    <!--USER OPTION COLUMN START-->
    <div class="user-option-col">
      <div class="thumb">
        <div class="dropdown">
          <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true"> <img src="<?php echo base_url();?>assets/images/user-img.png" alt="img"></button>
          <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
            <li><a href="#">Profil</a></li>
            <li><a href="#">Trafik</a></li>
            <li><a href="<?php echo base_url();?>sign/in">Log Out</a></li>
          </ul>
        </div>
      </div>
      
    </div>
    <!--USER OPTION COLUMN END-->
  </header>
  <!--HEADER END-->
