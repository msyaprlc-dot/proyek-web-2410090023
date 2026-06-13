<?php 
  require_once "koneksi.php";	
  $act = $_GET['act'];
  
  if($act == "tambah") {
    $sql = "INSERT INTO tb_mahasiswa 
              (nm_mahasiswa, alamat, telp, email) 
	          VALUES 
		          ('$_POST[txt_nm]', '$_POST[txt_almt]', 
               '$_POST[txt_telp]', '$_POST[txt_email]')";	 					
    
    mysqli_query($con, $sql); 

    // Menutup koneksi
    db_disconnect($con);
  } 

  if($act == "update") {
    $sql = "UPDATE tb_mahasiswa SET							 	        
            nm_mahasiswa = '$_POST[txt_nm]',
            alamat 	  = '$_POST[txt_almt]',
            telp 	  = '$_POST[txt_telp]',
            email 	  = '$_POST[txt_email]' 				  	
            WHERE id_mahasiswa = '$_POST[idn]'"; 
				
    mysqli_query($con, $sql);

	  // Menutup koneksi
	  db_disconnect($con);
  }
  if($act == "hapus") {
    $sql = "DELETE FROM tb_mahasiswa WHERE id_mahasiswa = $_GET[idm]";
    mysqli_query($con, $sql);

    // Menutup koneksi
    db_disconnect($con);
  }
  header('location:tampil_data_mahasiswa3.php'); 
?>
