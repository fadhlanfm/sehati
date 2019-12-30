<style type="text/css">
  /*
 * Globals
 */

/* Links */
a,
a:focus,
a:hover {
  color: #fff;
}




/*
 * Base structure
 */

html,
body {
  height: 100%;
  background-color: #0084B4;
}
body {
  color: #fff;
  text-align: center;
  text-shadow: 0 1px 3px rgba(0,0,0,.5);
}

/* Padding for spacing */
.inner {
  padding: 0px;
}

/*
 * Cover
 */

.cover {
  padding: 0px 0px;
}
.cover .btn-lg {
  padding: 10px 20px;
  font-weight: bold;
}


.modal{
  color: black;
}
</style>
<?php 
  function getFirstChar($myvalue) {
    $arr = explode(' ',trim($myvalue));
    return $arr[0];
}

$anggota1=getFirstChar($this->session->userdata('anggota1'));
$anggota2=getFirstChar($this->session->userdata('anggota2'));
$anggota3=getFirstChar($this->session->userdata('anggota3'));
$sekolah=$this->session->userdata('sekolah');

      foreach($mulai->result() as $mulai){
      $mulai=$mulai->mulai;

    }
  
?>
<div class="container">
  <div class="inner cover" style="padding-top: 13%;">
    <p class="lead">, السلام عليكم و رحمة الله و بركاته</p>
    <h2 class="cover-heading"><?php echo '<b>'.$anggota1.'</b>, <b>'.$anggota2.'</b>, <b>'.$anggota3.'</b> dari <b>'.$sekolah.'</b>!'; ?></h2>
    
    <?php foreach($kerja->result() as $result){ 
      $kerja = $result->kerja;
    }
    if ($kerja==0) { ?>
      <!-- Display the countdown timer in an element -->
    <p class="lead" id="demo"></p>
    <p class="lead" id="demo1"></p>
  
  <!-- countdown -->
  <script>
    // Set the date we're counting down to
    var countDownDate = new Date("<?php echo $mulai; ?>").getTime();

    // Update the count down every 1 second
    var x = setInterval(function() {

    // Get todays date and time
    var now = new Date().getTime();

    // Find the distance between now an the count down date
    var distance = countDownDate - now;

    // Time calculations for days, hours, minutes and seconds
    var days = Math.floor(distance / (1000 * 60 * 60 * 24));
    var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
    var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
    var seconds = Math.floor((distance % (1000 * 60)) / 1000);

    // Display the result in the element with id="demo"
    document.getElementById("demo").innerHTML = 'Seleksi online akan dibuka pada: <?php echo $mulai; ?></br>Countdown: <mark background-color: white;><a style="color: red;">' + days + " hari, " + hours + " jam, "
    + minutes + " menit, " + seconds + " detik</a></mark></br>Silahkan <a><u>CEK data tim, peraturan, dan ubah password </u></a> terlebih dahulu pada panel di atas";

    if (distance < 0) {
      clearInterval(x);
      document.getElementById("demo").innerHTML = '<p class="lead">Seleksi online telah dibuka</br>Selamat mengerjakan!</p><p class="lead"></p>';
      document.getElementById('mulaiBtn').disabled = false;
      button.disabled = false;
    }
  }, 1000);
  </script>
  <!-- <a id="mulaiBtn" class="btn btn-lg btn-default disabled" role="button"><span class="glyphicon glyphicon-pencil"></span> Mulai</a> -->
  <button id="mulaiBtn" class="btn btn-lg btn-default" disabled><span class="glyphicon glyphicon-pencil"></span> Mulai</button>
    <?php }else{ ?>
    TERIMAKASIH
      <?php }
    ?>

    

    
  </div>
</div>

  
  <!-- modal tim -->
  <div class="modal fade bd-example-modal-smmm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
        Anggota tim:</br>1. <?php echo $this->session->userdata('anggota1'); ?></br>2. <?php echo $this->session->userdata('anggota2'); ?></br>3. <?php echo $this->session->userdata('anggota3'); ?></br>Sekolah: <?php echo $this->session->userdata('sekolah'); ?></br>Email: <?php echo $this->session->userdata('email');?></br>No Telepon: <?php echo $this->session->userdata('telepon');?></br>Jika ada kesalahan data hubungi: </div>
    </div>
  </div>

  <!-- modal bantuan -->
  <div class="modal fade bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
      <button type="button" class="close" data-dismiss="modal">&times;</button>
      <ol>
        Hubungi:
        <li>Khairunnisa Yurita R 081394611264 (line: kyurita98)</li>
        <li>Ilma Chaerunnisa 085697619968 (line: ilmaaa12)</li>
      </ol></div>
    </div>
  </div>

  <!-- modal logout -->
  <div class="modal fade bd-example-modal-smm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <div class="modal-body">Anda ingin logout?</div>
        <div class="modal-footer">
          <a href="<?php echo site_url("login/logoutprocess"); ?>" class="btn btn-danger btn-block"><span class="glyphicon glyphicon-off"></span> Ya</a>
        </div>
        </div>
    </div>
  </div>

  

  <!-- start Modal mulai -->
  <div class="modal fade" id="mulaiModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:7px 12px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Petunjuk Pengerjaan</h4>
        </div>
        <div class="modal-body">
        بسم الله الرحمان الرحيم
          <ol>
            <li>Gunakan browser laptop/komputer dan memiliki koneksi yang stabil</li>
            <li>Terdapat 100 soal pilihan ganda</li>
            <li>Waktu pengerjaan: 60 menit</li>
            <li>Ketika waktu habis, jawaban akan otomatis tersubmit seadanya</li>
            <li>Logout atau menutup browser saat pengerjaan sama dengan <b>diskualifikasi</b></li>
            <li>Hasil seleksi online akan diumumkan pada 25 Agustus 2017 </li>
            <li>Dipersilahkan berdoa sebelum memulai</li>
          </ol>
        </div>
        <div class="modal-footer">
        <form action="<?php echo site_url("tim/kerja"); ?>">
          <input type="checkbox" required class="pull-left"><p style="text-align: left">&nbsp;&nbsp;Saya sudah membaca dan memahami petunjuk pengerjaan</p></input>
          <button type="submit" class="btn btn-success pull-center"><span class="glyphicon glyphicon-pencil"></span> Mulai</button>
        </form>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end Modal mulai -->

  <!-- start Modal peraturan -->
  <div class="modal fade" id="peraturanModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:7px 12px;">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4>Peraturan</h4>
        </div>
        <div class="modal-body">
          بسم الله الرحمان الرحيم
          <ol>
            <li>Gunakan browser laptop/komputer dan memiliki koneksi yang stabil</li>
            <li>Terdapat 100 soal pilihan ganda</li>
            <li>Waktu pengerjaan: 60 menit</li>
            <li>Klik tombol "Mulai" untuk memulai tes. Tombol akan muncul otomatis ketika <i>countdown</i> berakhir</li>
            <li>Batas memulai pengerjaan adalah ... menit setelah <i>countdown</i> berakhir. Lewat dari itu, tidak bisa lagi</li>
            <li>Ketika waktu habis, jawaban akan otomatis tersubmit seadanya</li>
            <li>Logout atau menutup browser saat pengerjaan sama dengan <b>diskualifikasi</b></li>
            <li>Hasil seleksi online akan diumumkan pada 25 Agustus 2017 </li>
            <li>Dipersilahkan menghubungi panitia jika butuh bantuan</li>
          </ol>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end Modal peraturan -->

  <!-- start Modal password -->
  <div class="modal fade" id="passwordModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4><span class="glyphicon glyphicon-lock"></span> Ubah Password</h4>
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" id="myForm" onsubmit="return checkForm(this);" method="POST" action="<?php echo site_url("tim/gantiPassword"); ?>">
            <?php 
                if($this->input->get('report')== -1){
                  echo '<div class="alert alert-danger" style="padding: 2px">Password salah. Silahkan ulangi</div>';
                }
            ?>
            <div class="form-group">
              <input type="password" id="pwd_skrg" class="form-control" placeholder="Password sekarang" name="pwd_skrg" required> 
            </div>
            <div class="form-group">
              <input type="password" id="pwd1" class="form-control" placeholder="Password baru" name="pwd1" required pattern=".{6,}" title="Minimal 6 karakter">
            </div>
            <div class="form-group">
              <input type="password" id="pwd2" class="form-control" placeholder="Ulangi password baru" name="pwd2" required>
            </div>
              <button type="submit" class="btn btn-primary btn-block">Simpan Perubahan</button>
          </form>
        </div>
      </div>
      
    </div>
  </div>
  <!-- end Modal password -->

<script>
$(document).ready(function(){
    $("#mulaiBtn").click(function(){
        $("#mulaiModal").modal();
    });
});

$(document).ready(function(){
    $("#passwordBtn").click(function(){
        $("#passwordModal").modal();
    });
});

$(document).ready(function(){
    $("#peraturanBtn").click(function(){
        $("#peraturanModal").modal();
    });
});

var pwd1 = document.getElementById("pwd1"), 
    pwd2 = document.getElementById("pwd2"), 
    pwd_skrg = document.getElementById("pwd_skrg");

function isConfirmed(){
  if(pwd1.value != pwd2.value) {
    pwd2.setCustomValidity("Konfirmasi salah");
  } else {
    pwd2.setCustomValidity('');
  }
}

function isDifferent(){
  if(pwd1.value == pwd_skrg.value) {
    pwd1.setCustomValidity("Password tidak boleh sama");
  } else {
    pwd1.setCustomValidity('');
  }
}

pwd_skrg.onchange = isDifferent;
pwd1.onkeyup = isDifferent;
pwd1.onchange = isConfirmed;
pwd2.onkeyup = isConfirmed;
</script>

<?php 
    if($this->input->get('report')== -1){
      echo '<script>$(document).ready(function(){$("#passwordModal").modal("show");});</script>';
    }
?>