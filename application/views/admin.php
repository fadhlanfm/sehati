<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table class="table table-striped">
          <thead>
            <tr>
              <td>Nomor tim</td>
              <td>Email</td>
              <td>Password</td>
              <td>Sekolah</td>
              <td>Anggota 1</td>
              <td>Anggota 2</td>
              <td>Anggota 3</td>
            </tr>
          </thead>
          <tbody>
            <?php foreach($query->result() as $result){ ?>
            <tr>
              <td><?php echo htmlspecialchars($result->no_tim); ?></td>
              <td><?php echo htmlspecialchars($result->email); ?></td>
              <td><?php echo htmlspecialchars($result->password); ?></td>
              <td><?php echo htmlspecialchars($result->sekolah); ?></td>
              <td><?php echo htmlspecialchars($result->anggota1); ?></td>
              <td><?php echo htmlspecialchars($result->anggota2); ?></td>
              <td><?php echo htmlspecialchars($result->anggota3); ?></td>
            </tr>
            <?php } ?>
          </tbody>
        </table>
</body>
</html>