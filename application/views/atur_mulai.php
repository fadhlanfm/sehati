<div class="container">
<form action="<?php echo site_url("admin/atur_mulai"); ?>" method="POST">
	Seleksi Online akan dimulai pada <b><?php foreach($query->result() as $result){
	echo $result->mulai;
	} ?></b></br></br>
	<div style="text-align: center">Countdown: <b><p id="demo" style="color: red"></p></b> </br></div>
  Ubah menjadi:
  <input type="datetime-local" name="mulai" required>
  <button type="submit" class="btn btn-success">Atur Mulai</button>
</form>
</div>

<script>
//<?php echo $result->mulai; ?>
// Set the date we're counting down to
var countDownDate = new Date("<?php echo $result->mulai; ?>").getTime();

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
    
    // Output the result in an element with id="demo"
    document.getElementById("demo").innerHTML = days + "d " + hours + "h "
    + minutes + "m " + seconds + "s ";
    
    // If the count down is over, write some text 
    if (distance < 0) {
        clearInterval(x);
        document.getElementById("demo").innerHTML = "MULAI";
    }
}, 1000);
</script>