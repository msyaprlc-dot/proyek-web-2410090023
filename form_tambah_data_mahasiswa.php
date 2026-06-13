<html> 
 <head>        
  <title>Tambah Data Mahasiswa</title>
 </head>
 <body>
  <h1>Tambah Data Mahasiswa</h1>
  <form action="ctrl_mahasiswa.php?act=tambah" method ="POST"> 
   <table border ="0">
    
    <tr> 
     <td> Nama Mahasiswa </td> 
     <td> : <input type="text" name="txt_nm"></td>
    </tr>
    <tr> 
     <td> Alamat </td> 
     <td> : <textarea name='txt_almt' style='width: 250px; height: 
             100px;'></textarea>
     </td>
    </tr>
    <tr> 
     <td> Telp </td> 
     <td> : <input type="text" name="txt_telp"> </td>
    </tr>
    <tr> 
     <td> Email </td> 
     <td> : <input type="text" name="txt_email"> </td>
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
