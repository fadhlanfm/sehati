<!-- <meta http-equiv="refresh" content="3;url=<?php echo site_url("tim/kumpul"); ?>" /> -->
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
  
?>
<div class="container" id="container">
  <div class="inner cover" style="padding-top: 5%;">
  <!-- mulai disini -->
  
    

  <form action="<?php echo site_url("tim/kumpul"); ?>" method="POST" id="cartCheckout">
  </div>
</div>

<!-- <a href="#" id="element" data-toggle="tooltip" data-placement="right" title="Klik untuk selesai"><button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-ok"></span> Submit</button></a> -->
  <div class="col-sm-8">
<div style="height:580px;width:100%;border:1px solid #ccc;font:16px/26px Georgia, Garamond, Serif;overflow:auto; background-color: #E8F6F3; color: #17202A">
  <table style="text-align:left" border="1">
      <?php foreach($query->result() as $result){ ?>
      <input type="hidden" name="soal[]" value="<?php echo $result->no_soal; ?>">
      <tr><td><?php echo $result->no_soal; ?>. <?php echo $result->pertanyaan; ?></br><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="a">A.&nbsp;<?php echo $result->a; ?></br><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="b">B.&nbsp;<?php echo $result->b; ?></br><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="c">C.&nbsp;<?php echo $result->c; ?></br><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="d">D.&nbsp;<?php echo $result->d; ?></br><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="e">E.&nbsp;<?php echo $result->e; ?></td></tr>
      <!-- <tr><td><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="a">A.&nbsp;<?php echo $result->a; ?></td></tr>
      <tr><td><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="b">B.&nbsp;<?php echo $result->b; ?></td></tr>
      <tr><td><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="c">C.&nbsp;<?php echo $result->c; ?></td></tr>
      <tr><td><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="d">D.&nbsp;<?php echo $result->d; ?></td></tr>
      <tr><td><input type="radio" name="jawaban_<?php echo $result->no_soal; ?>" value="e">E.&nbsp;<?php echo $result->e; ?></td></tr> -->
      <?php } ?>
      <tr><td></td></tr>
    </table>
    </div>
</div>
<div class="col-sm-1">
<!-- Modify this according to your requirement -->

<!-- countown -->
<!-- <h4>
  Akan otomatis submit dalam <span id="countdown" style="color: red;">3600</span> detik
</h4>

<script type="text/javascript">
    
    // Total seconds to wait
    var seconds = 5;
    
    function countdown() {
        seconds = seconds - 1;
        if (seconds < 0) {
            // Chnage your redirection link here
            window.location = "<?php echo site_url("tim/kumpul"); ?>";
        } else {
            // Update remaining seconds
            document.getElementById("countdown").innerHTML = seconds;
            // Count down using javascript
            window.setTimeout("countdown()", 1000);
        }
    }
    
    // Run countdown function
    countdown();
    
</script> -->

<!-- <h3 style="color: red;">Sisa Waktu = <span id="timer"></span></h3>

<script type="text/javascript">
  document.getElementById('timer').innerHTML =
  0 + ":" + 3;
  startTimer();

function startTimer() {
  var presentTime = document.getElementById('timer').innerHTML;
  var timeArray = presentTime.split(/[:]+/);
  var m = timeArray[0];
  var s = checkSecond((timeArray[1] - 1));
  if(s==59){m=m-1}
  if(m<0){alert('WAKTU HABIS!')}
  
  document.getElementById('timer').innerHTML =
    m + ":" + s;
  setTimeout(startTimer, 1000);
}

function checkSecond(sec) {
  if (sec < 10 && sec >= 0) {sec = "0" + sec}; // add zero in front of numbers < 10
  if (sec < 0) {sec = "59"};
  return sec;
}
</script> -->
<div id="status"></div>
<script type="text/javascript">
countDown(5,"status");
var Text = 'hello';

    function setInput(button) {
       button.style.visibility = "hidden";
       document.getElementById("haraptunggu").innerHTML = "Harap tunggu...";
    }
</script>


<div id="haraptunggu"></div>
<a href="#" id="tombolSubmit" data-toggle="tooltip" data-placement="right" title="Klik untuk selesai"><button type="submit" class="btn btn-default" value="Submit" onclick='setInput(this);'><span class="glyphicon glyphicon-ok"></span> Submit</button></a></div>
</form>

<script type="text/javascript">
    /*var iteration = true;
    var time = new Date();
    var delay = 5000; // 5 secondes

    while(iteration) {
        if(time.getTime() + 5000 < new Date().getTime()) {
             iteration = false;
        }
    }

    document.getElementByID('tombolSubmit').click();*/
    //setTimeount(document.getElementByID('tombolSubmit').click(),5000);
    //window.setInterval(function(){$('input[type="submit"][value="Submit"]').trigger('click');.}, 1000);
    /*window.onload=function(){ 
        window.setTimeout(document.cartCheckout.submit.bind(document.cartCheckout), 5000);
    };*/
secs = 2;
timer = setInterval(function () {
    var element = document.getElementById("status");
    element.innerHTML = "<h2>You have <b>"+secs+"</b> seconds to answer the questions</h2>";
    if(secs < 1){
        $("#tombolSubmit").hide();
        clearInterval(timer);
        document.getElementById('cartCheckout').submit();
        alert("WAKTU HABIS!");
        document.getElementById("haraptunggu").innerHTML = "Harap tunggu...";
    }
    secs--;
}, 1000)
</script>



  
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
  $("#selesai").click(function() {
    $("html, body").animate({ scrollTop: $(document).height() }, 1000);
    setTimeout(
  function() 
  {
    $('#element').tooltip('show');
  }, 2000);
    
  });

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