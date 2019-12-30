<!DOCTYPE html>
<html>
<head>
	<title></title>
  <style type="text/css">
    .bold{font-weight:bold;}
  </style>
</head>
<body>
	<table class="table table-striped">
          <tbody>
            <?php foreach($query->result() as $result){ ?>
            <tr>
              <td><?php echo $result->no_soal; ?>. <?php echo $result->pertanyaan; ?>
                </br>
                
                <div class="<?php if($result->jawaban_benar=='a'){ echo 'bold'; } ?>">
                  <table>
                    <tr>
                      <td valign="top">A.&nbsp;</td>
                      <td><?php echo $result->a; ?></td>
                    </tr>
                  </table>
                </div>
                
                <div class="<?php if($result->jawaban_benar=='b'){ echo 'bold'; } ?>">
                  <table>
                    <tr>
                      <td valign="top">B.&nbsp;</td>
                      <td><?php echo $result->b; ?></td>
                    </tr>
                  </table>
                </div>
                
                <div class="<?php if($result->jawaban_benar=='c'){ echo 'bold'; } ?>">
                  <table>
                    <tr>
                      <td valign="top">C.&nbsp;</td>
                      <td><?php echo $result->c; ?></td>
                    </tr>
                  </table>
                </div>
                
                <div class="<?php if($result->jawaban_benar=='d'){ echo 'bold'; } ?>">
                  <table>
                    <tr>
                      <td valign="top">D.&nbsp;</td>
                      <td><?php echo $result->d; ?></td>
                    </tr>
                  </table>
                </div>
                
                <div class="<?php if($result->jawaban_benar=='e'){ echo 'bold'; } ?>">
                  <table>
                    <tr>
                      <td valign="top">E.&nbsp;</td>
                      <td><?php echo $result->e; ?></td>
                    </tr>
                  </table>
                </div>
                
                <u>Jawaban: <b><?php echo $result->jawaban_benar; ?></b></u></br>
              </td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
</body>
</html>