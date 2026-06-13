<?php
  require_once "koneksi.php";
  
  $sql = "SELECT tb_mahasiswa.nim, tb_mahasiswa.nama, tb_mahasiswa.tempat_lahir, 
                 tb_mahasiswa.tanggal_lahir, tb_fakultas.nama_fakultas, 
                 tb_jurusan.nama_jurusan, tb_mahasiswa.ipk 
          FROM tb_mahasiswa 
          JOIN tb_jurusan ON tb_mahasiswa.id_jurusan = tb_jurusan.id_jurusan 
          JOIN tb_fakultas ON tb_jurusan.id_fakultas = tb_fakultas.id_fakultas";
          
  $result = mysqli_query($con, $sql);
?>
<html>
 <head>
  <title>Daftar Mahasiswa</title>
 </head>  
 <body>
  <h2>Daftar Mahasiswa</h2>
  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>NIM</th>
      <th>Nama</th>
      <th>Tempat Lahir</th>
      <th>Tanggal Lahir</th>
      <th>Fakultas</th>
      <th>Jurusan</th>
      <th>IPK</th>
    </tr>

    <?php while ($data = mysqli_fetch_row($result)): ?>
    <tr>
      <td><?php echo $data[0]; ?></td> <td><?php echo $data[1]; ?></td> <td><?php echo $data[2]; ?></td> <td><?php echo $data[3]; ?></td> <td><?php echo $data[4]; ?></td> <td><?php echo $data[5]; ?></td> <td><?php echo $data[6]; ?></td> </tr>  
    <?php endwhile; ?>
    
  </table>
 </body>
</html>

<?php
  mysqli_free_result($result); 
  db_disconnect($con);
?>