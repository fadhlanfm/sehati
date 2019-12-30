<!DOCTYPE html>
<html lang="en">
<head>
<style>
body {margin:0;}

.navbar {
  overflow: hidden;
  background-color: #333;
  position: fixed;
  top: 0;
  width: 100%;
}

.navbar a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 25px;
  text-decoration: none;
  font-size: 17px;
}

.main {
  padding: 16px;
  margin-top: 30px;
  height: 1500px; /* Used in this example to enable scrolling */
}
</style>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="">
<meta name="author" content="">
<title>SEHATI 8 | Seleksi Online</title>
<link rel="icon" href="<?php echo base_url('assets/img/logo.png'); ?>">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
        <nav class="navbar navbar-default" style="margin: 0">
                <!-- Brand and toggle button -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" style="text-align: middle">
                      <div class="row">
                        <img class="img" width="19" height="20" src="<?php echo site_url("assets/img/logo_undip.png"); ?>">
                        <img class="img" width="25" height="25" src="<?php echo site_url("assets/img/logo.png"); ?>">
                        SEHATI 8
                      </div>
                    </a>
                </div>
                <!-- End -->
                <!-- Your website Links -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">Home</a></li>
                        <li><a href="#" id="timBtn" data-toggle="modal" data-target=".bd-example-modal-smmm">Data Tim</a></li>
                        <li><a href="#" id="peraturanBtn">Peraturan</a></li>
                        <li><a href="#" id="passwordBtn">Ubah Password</a></li>
                        <li><a href="#" id="bantuanBtn" data-toggle="modal" data-target=".bd-example-modal-sm">Bantuan</a></li>
                    </ul>
                    <ul class="nav navbar-nav navbar-right">
                      <li><a href="#" id="logoutBtn" data-toggle="modal" data-target=".bd-example-modal-smm" style="color: #EC7063;">Log Out</a></li>
                    </ul>
                </div>
                <!-- End -->
        </nav>


<!-- <div id="wrapper"> --><!-- 
  start navbar
  <div class="navbar">
    <a>Tim</a>
    <a style="color: red" href="<?php echo base_url('login/logoutprocess'); ?>">Log Out</a>
  </div>
  end navbar -->
  <!-- Page Content -->
  <!-- <div id="page-wrapper"> -->
    <?php echo $content; ?>
    <!-- /.container-fluid -->
  <!-- </div> -->
  <!-- /#page-wrapper -->
<!-- </div> -->
<!-- /#wrapper -->
</body>
</html>