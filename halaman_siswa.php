<?php
session_start();
include "inc/koneksi.php";
if (@$_SESSION['siswa']) {
?>
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
            <span><img src="img/LOGODEN.png"></span>
          
            <!--logo end-->
            <!-- top menu atas kanan-->
            <div class="top-nav notification-row">          
                <ul class="nav pull-right top-menu">

                <!-- user login dropdown start-->
                    <li class="dropdown">
                        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                                <span class="profile-ava">
                                Assalamu'alaikum,
                                <?php
                              if (@$_SESSION['admin']) {
                                $user_terlogin = @$_SESSION['admin'];
                                # code...
                              }elseif (@$_SESSION['guru']) {
                                $user_terlogin = @$_SESSION['guru'];
                                # code...
                              }elseif (@$_SESSION['siswa']) {
                                $user_terlogin =@$_SESSION['siswa'];
                                # code...
                              }

                              $sql_user = mysql_query("select * from tb_user where kode_user = '$user_terlogin'") or die(mysql_error());
                              $data_user = mysql_fetch_array($sql_user);
                              ?>
                                <img alt="" src="gambar/<?php echo $data_user ['gambar']; ?>" width="40px" >
                                </span>
                                <span class="profile-ava"><?php echo $data_user ['nama_lengkap']; ?></span>
                          </a>

                        <ul class="dropdown-menu extended logout">
                            <div class="log-arrow-up"></div>                            
                            <li>
                                <a href="inc/logoutsis.php"><i class="icon_key_alt"></i>Keluar</a>
                            </li>                
                                                   
                        </ul>
                    </li>
                    <!-- user login dropdown end -->       
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
                                  <li><a class="btn primary" href="?page=perangkat&action=kontak" title="Bootstrap 3 themes generator"><span class="icon_mail_alt"></span> Kontak</a></li>

                                  <li class="dropdown">
                                  <a href="javascript:;"class="dropdown-toggle"  data-toggle="dropdown"><span class="icon_profile"></span> Profil Sekolah<b class="caret"></b></a>

                                      <ul class="dropdown-menu">
                                          <li><a href="?page=perangkat&action=sejarah"><span class="icon_desktop"></span> Sejarah</a></li>
                                          <li><a href="?page=perangkat&action=visi"><span class="icon_desktop"></span> Visi & Misi</a></li>
                                          <li><a href="?page=perangkat&action=tujuan"><span class="icon_desktop"></span> Tujuan</a></li>
                                      </ul>
                                  </li>
                                   <li class="dropdown">
                                  <a href="javascript:;"class="dropdown-toggle"  data-toggle="dropdown"><span class="icon_documents_alt"></span> Forum <b class="caret"></b></a>

                                      <ul class="dropdown-menu">
                                          <li><a href="?page=tugas&action=lihat_forum"><span class="icon_document_alt"></span>  Lihat Forum </a></li>
                                          <li><a href="?page=tugas&action=lakukan_didskusi"><span class="icon_document_alt"></span>  Lakukan diskusi </a></li>
                                      </ul>
                                  </li>
                                  <li class="dropdown">
                                  <a href="javascript:;"class="dropdown-toggle"  data-toggle="dropdown"><span class="icon_documents_alt"></span> Cek Tugas / Quiz<b class="caret"></b></a>

                                      <ul class="dropdown-menu">
                                          <li><a href="?page=tugas&action=lihat_quiz"><span class="icon_document_alt"></span>  Lihat Quiz</a></li>
                                          <li><a href="?page=tugas&action=lihat"><span class="icon_document_alt"></span>  Lihat Tugas</a></li>
                                      </ul>
                                  </li>

                                     <li class="dropdown">
                                  <a href="javascript:;"class="dropdown-toggle"  data-toggle="dropdown"><span class="icon_documents_alt"></span> Upload Tugas<b class="caret"></b></a>

                                      <ul class="dropdown-menu">
                                          <li><a href="?page=tugas&action=upload"><span class="icon_document_alt"></span>  Upload Tugas Biologi</a></li>
                                                                                  
                                      </ul>
                                  </li>
                                  <li class="dropdown">
                                  <a href="javascript:;" class="dropdown-toggle"  data-toggle="dropdown"><span class="icon_documents_alt"></span> Perangkat<b class="caret"></b></a>

                                      <ul class="dropdown-menu">
                                        <li><a href="?page=perangkat"><span class="icon_document_alt"></span>  Materi</a></li>
                                          <li><a href="?page=perangkat&action=silabus"><span class="icon_document_alt"></span>  Silabus</a></li>
                                          <li><a href="?page=perangkat&action=rpp"><span class="icon_document_alt"></span>  RPP</a></li>
                                      </ul>                                      
                                  </li>
                                   <li><a class="btn primary" href="inc/logoutsis.php" title="Bootstrap 3 themes generator"><span class="icon_key"></span> Keluar</a></li>
                                          
                                 
                              </ul>
                          </div><!-- /.navbar-collapse -->
                      </nav>

                      <!--navigation end-->
                      <section class="panel">
                        <div class="panel-body">
                        <div class="panel panel-primary">
                          <div class="panel-heading">
                        <i class="icon_profile">
                         </i>
                         <h4> Selamat Datang di Menu <?php echo $data_user['level']; ?></h4>                                 </div>
            
              <div class="panel-content">
                            <!-- page start-->
               <?php

                $page = @$_GET['page'];
                $action = @$_GET['action'];

                if ($page == "tugas") {
                  if ($action=="lihat") {
                     include "page_siswa/tampil_tugas.php";

                  }elseif ($action=="upload") {

                    include "page_siswa/upload_tugas.php";

                  }elseif ($action=="lihat_quiz") {

                    include "soal.php";

                  }elseif ($action=="hapus_tugas") {

                    include"page_siswa/hapus.php";
                    # code...
                  }elseif ($action=="lihat_forum") {

                    include"page_siswa/lihat_forum.php";
                    # code...
                  }elseif ($action=="hapus_forum") {

                    include"page_siswa/hapus_forum.php";
                    # code...
                  }elseif ($action=="lakukan_didskusi") {

                    include"page_siswa/input_forum.php";
                    # code...
                  }elseif ($action=="hapus_diskusi") {

                    include"page_siswa/hapus_forumku.php";
                    # code...
                  }elseif ($action=="edit_diskusi") {

                    include"page_siswa/edit_forumku.php";
                    # code...
                  }

                } elseif ($page == "perangkat") {
                  if ($action=="") {
                     include"page_siswa/lihat_materi.php";

                  }elseif ($action=="silabus") {

                    include "page_siswa/lihat_silabus.php";
                  }elseif ($action=="rpp") {
                    include "page_siswa/lihat_rpp.php";
                  }elseif ($action=="kontak") {
                    include "profil_sekolah/kontak.php";
                  }elseif ($action=="sejarah") {
                    include "profil_sekolah/sejarah.php";
                  }elseif ($action=="visi") {
                    include "profil_sekolah/visi.php";
                  }elseif ($action=="tujuan") {
                    include "profil_sekolah/tujuan.php";
                  }
                  
                } elseif ($page == "") {

               include 'page_siswa/home_siswa.php';
                } else{

                  echo "404 ! HALAMAN TIDAK DITEMUKAN";
                }

                ?>               
             
              <!-- page end-->                        
               
                        </div>
                        </div>  
                        </div>
                      </section>
                  </div>
                  <div class="col-xs-6 col-md-3">
                   <section class="panel">  
                          <div class="panel-heading">                          
                          <p><center><h4> Waktu Sekarang
                          <?php
                          include"jam.php";
                          ?></center></p>  </h4>                        
                          </div>
                         
                        </div>  
                      
                      </section>                     
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




<?php
} else{
echo "<script>window.location='/bio/login.php';</script>";


}

