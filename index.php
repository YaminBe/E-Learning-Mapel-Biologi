<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="img/favicon.png">

    <title>Bio-Learning</title>

    <!-- Bootstrap CSS -->  
    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    
  </head>

  <body>
  <!-- container section start -->
  <section id="container" class="">
      <!--header start-->
      
      <header class="header dark-bg">
            <div class="toggle-nav">
                <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"></div>
            </div>          

            <!--logo start-->
            <a href="menu.php" class="logo"><img src="img/LOGODEN.png"> </a>
            <!--logo end-->


            <!-- top menu atas kanan-->
            <div class="top-nav notification-row">          
                <ul class="nav pull-right top-menu">
                <a class="btn btn-danger" href="login.php" title="Bootstrap 3 themes generator">
                <span class="icon_profile"></span> Login</a>           
                </ul>
           </div>
           <!--top menu atas akhir-->

      </header>      
      <!--header end-->
      <!--main content start-->
      <br>
      <br> 
 

    <section id="content">   
                           
          <section class="wrapper">
           <div class="row">                  
                  <div class="col-xs-12 col-md-9">
                  <!--navigation start-->
                      <nav class="navbar navbar-inverse" role="navigation">
                          <!-- Brand and toggle get grouped for better mobile display -->
                          <div class="navbar-header">
                              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                                  <span class="sr-only">Toggle navigation</span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                                  <span class="icon-bar"></span>
                              </button>
                              
                          </div>

                          <!-- Collect the nav links, forms, and other content for toggling -->
                          <div class="collapse navbar-collapse navbar-ex1-collapse">
                              <ul class="nav navbar-nav">
                                  <li><a class="btn primary" href="?page=" title="Bootstrap 3 themes generator"><span class="icon_house_alt"></span> Home</a></li>
                                  <li><a class="btn primary" href="?page=kontak" title="Bootstrap 3 themes generator"><span class="icon_profile"></span> Kontak</a></li>
                                   <li><a class="btn primary" href="?page=sejarah" title="Bootstrap 3 themes generator"><span class="icon_pin_alt"></span> Sejarah</a></li>
                                    <li><a class="btn primary" href="?page=visi" title="Bootstrap 3 themes generator"><span class="icon_mail_alt"></span> Visi & Misi</a></li>
                                    <li><a class="btn primary" href="?page=tujuan" title="Bootstrap 3 themes generator"><span class="icon_target"></span> Tujuan</a></li>
                                     <li><a class="btn primary" href="login.php" title="Bootstrap 3 themes generator"><span class="fa fa-user"></span> Login</a></li>
                                  
                              </ul>
                          </div><!-- /.navbar-collapse -->
                      </nav>

                      <!--navigation end-->
                      <section class="panel">
                        <div class="panel-body">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                         <marquee> <img src="icon/mr.png"></marquee>
                          </div>
                          <div class="panel-content">
                          <!--carousel start-->
                      <section class="panel">
                          <div id="c-slide" class="carousel slide auto panel-body">
                              <ol class="carousel-indicators out">
                                  <li class="active" data-slide-to="0" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="1" data-target="#c-slide"></li>
                                  <li class="" data-slide-to="2" data-target="#c-slide"></li>
                              </ol>
                              <div class="carousel-inner">
                                  <div class="item text-center active">
                                  <img src="img/slide/h1.jpg">
                                  </div>
                                  <div class="item text-center">
                                  <img src="img/slide/header.jpg">
                                  
                                  </div>
                                  <div class="item text-center">
                                  <img src="img/slide/header1.jpg">
                                   
                                  </div>
                              </div>
                              <a data-slide="prev" href="#c-slide" class="left carousel-control">
                                  <i class="arrow_carrot-left_alt2"></i>
                              </a>
                              <a data-slide="next" href="#c-slide" class="right carousel-control">
                                  <i class="arrow_carrot-right_alt2"></i>
                              </a>
                          </div>
                      </section>
                      <!--carousel end-->

                          <?php

                          $page=@$_GET['page'];
                          if ($page =="login") {

                            include "login.php";
                            # code...
                          }else if ($page =="kontak") {
                            include"profil_sekolah/kontak.php";
                            # code...
                          }else if ($page =="sejarah") {
                            include"profil_sekolah/sejarah.php";
                            # code...
                          }else if($page =="visi"){
                            include"profil_sekolah/visi.php";

                          }else if($page =="tujuan"){
                            include"profil_sekolah/tujuan.php";

                          }else if($page ==""){
                            include"Home.php";

                          }

                          ?>                       
                        </div>
                        </div>  
                        </div>
                      </section>
                  </div>
                                  
       </section>
  <!-- container section end -->

    <!-- javascripts -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- nice scroll -->
    <script src="assets/js/jquery.scrollTo.min.js"></script>
    <script src="assets/js/jquery.nicescroll.js" type="text/javascript"></script><!--custome script for all page-->
    <script src="assets/js/scripts.js"></script>
  </body>
</html>
