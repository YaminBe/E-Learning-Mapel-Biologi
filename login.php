
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
    <meta name="author" content="GeeksLabs">
    <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
    <link rel="shortcut icon" href="assets/img/favicon.png">
    <title>Login Biolearning sma muhammadiyah</title>
    <!-- Bootstrap CSS -->    
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- bootstrap theme -->
    <link href="assets/css/bootstrap-theme.css" rel="stylesheet">
    <!--external css-->
    <!-- font icon -->
    <link href="assets/css/elegant-icons-style.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- Custom styles -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/style-responsive.css" rel="stylesheet" />
    <script src="assets/dist/sweetalert.min.js"></script>
  <link rel="stylesheet" href="assets/dist/sweetalert.css">
</head>
  <body class="login-img3-body">
    <div class="container">
      <form action="" method="post" class="login-form">        
        <div class="login-wrap">
        <CENTER><h2><b>LOGIN</b></h2></CENTER>
        <CENTER><h2><b>BIO-LEARNING</b></h2></CENTER>
            <p class="login-img"><i class="icon_lock_alt"></i></p>
            <div class="input-group">
              <span class="input-group-addon"><i class="icon_profile"></i></span>
              <input type="text" name="user" class="form-control" placeholder="Username" autofocus>
            </div>
            <div class="input-group">
                <span class="input-group-addon"><i class="icon_key_alt"></i></span>
                <input type="password" name="pass" class="form-control" placeholder="Password">
            </div>
            <input type="submit" name="login" value="login" class="btn btn-info btn-lg btn-block"> 
            <br>
            <center><b>&copy Copyright Revi Sumardi 2017</b></center>       
      </div>
      </form>
    <!-- koding login-->
    <?php
    session_start();
    include 'inc/koneksi.php';
    $user = @$_POST['user'];
    $pass = @$_POST['pass'];
    $login = @$_POST['login'];
    if ($login) {
    if ($user == ""|| $pass == "") {

    ?>
    <script type="text/javascript"> alert("username/password tidak boleh kosong")</script>

    <?php
    } else{
    $sql = mysql_query("select * from tb_user where username = '$user' and password = md5('$pass') ") or die(mysql_error());
    $data = mysql_fetch_array($sql);
    $cek = mysql_num_rows($sql);
    if ($cek >= 1) {
    if ($data['level'] == "admin") {

    @$_SESSION['admin'] = $data['kode_user'];

        ?>
        <script type="text/javascript">
        swal(" Sukses !", " Login Sebagai Admin", "success")
        window.location.href="admin.php";     
        </script>
        <?php 



    }elseif ($data['level'] == "guru") {
    @$_SESSION['guru'] = $data['kode_user'];
     ?>
        <script type="text/javascript">
        swal(" Sukses !", " Login Sebagai Guru", "success")
        window.location.href="halaman_guru.php";     
        </script>
        <?php 


    }elseif ($data['level'] == "siswa") {
    @$_SESSION['siswa'] = $data['kode_user'];


       ?>
        <script type="text/javascript">
        swal(" Sukses !", " Login Sebagai Siswa", "success")
        window.location.href="halaman_siswa.php";     
        </script>
        <?php 

    }else{
      ?>
      <script type="text/javascript">
      swal("Error ", " Perika Kembali Username Dan Passwor Anda !!", "error");
      </script>
      <?php

    }
    }

    }
    }

    ?>

    <br>
 <div class="text-center">

  <a href="" style="text-decoration-color: red;"><b>Biologi - Learning SMA Muhammadiyah</b></a> by <a href="https://bootstrapmade.com/">Revi Sumardi 2017</a>

  </div>
  </div>


  </body>
</html>

