<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #0E7191;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}

body {
  padding-top: 200px;
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SEHATI 8 | Admin</title>
<link rel="icon" href="<?php echo base_url('assets/img/logo.png'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script type="text/javascript">
  $(function() {

  //highlight the current nav
  $("#daftartim a:contains('Daftar Tim')").parent().addClass('active');
  $("#banksoal a:contains('Bank Soal')").parent().addClass('active');
  $("#hasil a:contains('Hasil')").parent().addClass('active');
  

  //make menus drop automatically
  $('ul.nav li.dropdown').hover(function() {
    $('.dropdown-menu', this).fadeIn();
  }, function() {
    $('.dropdown-menu', this).fadeOut('fast');
  });//hover
  
}); //jQuery is loaded
</script>
</head>
<body>
<!-- start navbar -->
  <section class="navbar navbar-default navbar-fixed-top">
  <ul class="nav navbar navbar-fixed-top nav-pills">  
    <li <?php if($this->uri->segment(2)==""){echo 'class="active"';}?>><a href="<?php echo base_url('admin'); ?>">Atur Mulai</a></li>
    <li <?php if($this->uri->segment(2)=="lihat_tim"){echo 'class="active"';}?>><a href="<?php echo base_url('admin/lihat_tim'); ?>">Daftar Tim</a></li>
    <li <?php if($this->uri->segment(2)=="lihat_soal"){echo 'class="active"';}?>><a href="<?php echo base_url('admin/lihat_soal'); ?>">Bank Soal</a></li>
    <li <?php if($this->uri->segment(2)=="lihat_hasil"){echo 'class="active"';}?>><a href="<?php echo base_url('admin/lihat_hasil'); ?>">Hasil</a></li>
    <li class="nav nav-pills pull-right"><a  style="color: red" href="<?php echo base_url('login/logoutprocess'); ?>">Log Out</a></li>
    <a class="nav nav-pills pull-right"><img src="<?php echo base_url('assets/img/logo_putih.jpg');?>" width="23" height="23"/> Welcome, Admin Sehati 8!</a>
  </ul>
  </section>
  <!-- end navbar -->
<div class="container">
<div id="wrapper">
  <!-- Page Content -->
  <div id="page-wrapper">
    <?php echo $content; ?>
    <!-- /.container-fluid -->
    <footer class="footer text-center"></footer>
  </div>
  <!-- /#page-wrapper -->
</div>
</div>
<!-- /#wrapper -->
</body>
</html>