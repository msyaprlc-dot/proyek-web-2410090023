<?php
  require_once "koneksi.php";
  $cari=$_GET['id'];
  $sql = "SELECT * FROM tb_mahasiswa WHERE id_mahasiswa = '$cari'";
  $result = mysqli_query($con, $sql);
  $data = mysqli_fetch_row($result);
?> 
<html>  
  <head>        
   <title>Update Data Mahasiswa</title>
  </head>
  <body>
   <h1>Update Data Mahasiswa</h1>
   <form action="ctrl_mahasiswa.php?act=update" method ="POST"> 
    <table border ="0">
     <input type="hidden" name="idn" 
            value="<?php echo $data[0]; ?>">
     <tr> 
       <td> ID Mahasiswa </td> 
       <td> : <input type="text" 
                     value="<?php echo $data[0]; ?>"
                     disabled>
       </td>
     </tr>
     <tr> 
       <td> Nama Mahasiswa </td> 
       <td> : <input type="text" name="txt_nm" 
                     value="<?php echo $data[2]; ?> ">
       </td>
     </tr>
     <tr> 
       <td> Alamat </td> 
       <td> : <textarea name='txt_almt' style='width: 250px; height: 
               100px;'><?php echo $data[3]; ?> </textarea>
       </td>
     </tr>
     <tr> 
       <td> Telp </td> 
       <td> : <input type="text" name="txt_telp" 
              value="<?php echo $data[4]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> Email </td> 
       <td> : <input type="text" name="txt_email" 
                     value="<?php echo $data[5]; ?>"> 
       </td>
     </tr>
     <tr> 
       <td> <input type="submit" value="Save">   
            <input type=button value=Back onclick=self.history.back()> 
       </td>
     </tr>
   </table>            
  </form>
 </body>
</html>
