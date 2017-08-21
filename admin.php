<?php
session_start();
include "inc/koneksi.php";
if (@$_SESSION['admin']) {
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
<title>Dashboard admin</title>
<link href="assets/css/bootstrap.min.css" rel="stylesheet">
<link href="assets/css/bootstrap-theme.css" rel="stylesheet">
<link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
<link href="assets/css/font-awesome.min.css" rel="stylesheet" />
<link href="assets/css/style.css" rel="stylesheet">
<link href="assets/css/style-responsive.css" rel="stylesheet" />
</head>
<body>
<section id="container" class="">      
<header class="header dark-bg">
<div class="toggle-nav">
<div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
</div>
<a href="" class="logo"><img src="img/LOGODEN.png"> </a>
<div class="nav search-row" id="top_menu">
<ul class="nav top-menu">                    
  <li>
      <form class="navbar-form">
          <input class="form-control" placeholder="Search" type="text">
      </form>                        
  </li> 
</ul>              
</div>
<div class="top-nav notification-row">          
<ul class="nav pull-right top-menu">
  <li class="dropdown">
      <a data-toggle="dropdown" class="dropdown-toggle" href="#">
              <span class="profile-ava">
              Assalamu'alaikum,
              <?php
            if (@$_SESSION['admin']) {
              $user_terlogin = @$_SESSION['admin'];
            }elseif (@$_SESSION['guru']) {
              $user_terlogin = @$_SESSION['guru'];
            }elseif (@$_SESSION['siswa']) {
              $user_terlogin =@$_SESSION['siswa'];
            }

            $sql_user = mysql_query("select * from tb_user where kode_user = '$user_terlogin'") or die(mysql_error());
            $data_user = mysql_fetch_array($sql_user);
            ?>
              <img alt="" src="gambar/<?php echo $data_user ['gambar']; ?>" width="40px" >
              </span>
              <span class="profile-ava"><?php echo $data_user ['nama_lengkap']; ?></span></a>
      <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>                          
          <li>
             <li class="eborder-top">
              <a href="inc/logout.php"><i class="icon_key_alt"></i> Keluar</a>
          </li>
          <li>
          </li>                
      </ul>
  </li>     
</ul>
</div>
</header> 
<aside>
<div id="sidebar"  class="nav-collapse red-bg">
<ul class="sidebar-menu">
<br>
<li class="text-center">
<h4><?php echo $data_user['level']; ?></h4>              
 <div class="user-img-div">
 <span class="profile-ava">
 <img  alt="" src="gambar/<?php echo $data_user ['gambar']; ?>" width="100px" >
 </span>
 <h4><?php echo $data_user['nama_lengkap']; ?></h4>
  </div>
</li>              
   <li class="">
        <a class="" href="?page=">
            <i class="icon_house_alt"></i>
            <span>Home</span>
        </a>
    </li>
     <li class="sub-menu ">
        <a href="javascript:;" class="">
            <i class="icon_documents_alt"></i>
            <span>Input Data</span>
            <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">                        
           <li><a class="" href="?page=user">Input Data User</a></li>
           <li><a class="" href="?page=user&action=input_materi">Input Materi</a></li>
           <li><a class="" href="?page=user&action=input_silabus">Input Silabus</a></li>
           <li><a class="" href="?page=user&action=input_rpp">Input RPP</a></li>
        </ul>
    </li>  
     <li class="sub-menu">
        <a href="javascript:;" class="">
            <i class="icon_document_alt"></i>
            <span>Lihat Data</span>
            <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
            <li><a class="" href="?page=user&action=tampil_data"> Data User</a></li>                          
           
            <li><a class="" href="?page=user&action=input_materi">Data Materi</a></li>
        </ul>
    </li> 
   <li>
     <li class="sub-menu">
        <a href="javascript:;" class="">
            <i class="icon_document_alt"></i>
            <span>Penugasan</span>
            <span class="menu-arrow arrow_carrot-right"></span>
        </a>
        <ul class="sub">
            <li><a class="" href="?page=tugas&action=input_tugas">Input Tugas</a></li>                         
        </ul>
    </li> 
    <li class="sub-menu">
        <a href="?page=tugas&action=forum" class="">
            <i class="icon_genius"></i>
            <span>Forum</span>
            <span class="menu-arrow arrow_carrot-right"></span>
        </a>
    </li>  
    <li class="sub-menu">
        <a href="inc/logout.php" class="">
           
            <span class="fa fa-lock"> Logout</span>
            <span class="menu-arrow arrow_carrot-right"></span>
        </a>
    </li>                                      
</ul>
</div>
</aside>
<br>
<section id="main-content">
  <section class="wrapper">
<div class="row">
<div class="col-lg-12">
	<h5 class="page-header"><i class="fa fa fa-home">
  </i>Selamat Datang di Menu ADMIN</h5>
	<ol class="breadcrumb">
	</li>
	<li><i class="fa fa-home"></i><a href="?page=">Home</a></li>
	</ol>
</div>
</div>
<!-- page start-->
<?php

$page = @$_GET['page'];
$action = @$_GET['action'];

if ($page == "user") {

if ($action=="") {

include "page/input_user.php";

}elseif ($action=="tampil_data") {

include "page/tampil_user.php";

}elseif ($action=="edit") {

include "page/edit_user.php";

}elseif ($action=="hapus") {

include"page/hapus.php";              

}elseif ($action=="input_materi") {

include"page/input_materi.php";              

}elseif ($action=="input_silabus") {

include"page/input_silabus.php";              

}elseif ($action=="input_rpp") {

include"page/input_rpp.php";              

}elseif ($action=="hapus_materi") {

include"page/hapus_materi.php";              

}elseif ($action=="hapus_silabus") {

include"page/hapus_silabus.php";              

}elseif ($action=="hapus_rpp") {

include"page/hapus_rpp.php";              

}



} elseif ($page == "tugas"){

if ($action=="input_tugas"){

include"page/input_tugas.php";

}elseif ($action=="hapus_tugas"){

include "page/hapus_tugas.php";

}elseif ($action=="forum") {

include "page/forum.php";

}elseif ($action=="edit_forum") {

include "page/edit_forum.php";

}elseif ($action=="hapus_forum") {

include "page/hapus_forum.php";
}


} elseif ($page == "") {

include 'home.php';
} else{

echo "404 ! HALAMAN TIDAK DITEMUKAN";
}

?>              
<!-- page end-->
  </section>
</section>
<!--main content end-->
<div class="text-center">
    <div class="credits">
        <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Bio - Learning SMA Muhamadiyah @2017 </a> by <a href="https://bootstrapmade.com/">Revi Sumardi</a>
    </div>
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
<?php
} else{
echo "<script>window.location='/bio/login.php';</script>";


}
