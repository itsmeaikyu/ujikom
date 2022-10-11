<?php
include 'koneksi.php';
$id     = $_GET['id'];
$siswa  = mysqli_query($koneksi, "select * 
from tbl_siswa where id_siswa='$id'");
$row     = mysqli_fetch_array($siswa);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FORM EDIT SISWA</title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>
<body>
    <h2>FORM EDIT SISWA</h2>

    <div class="container">
       <form action="proses_edit_siswa.php" method="POST" enctype="multipart/form-data">
       <input type="hidden" value="<?php echo $row['id_siswa'];?>" name="id_siswa">
        <div class="row">
            <div class="col-25">
              <label for="ns">Nis Siswa</label>
            </div>
            <div class="col-75">
                <input type="text" id="ns" name="nis" value="<?php echo $row['nis'];?>"required>
            </div>
</div>
<div class="row">
    <div class="col-25">
        <label for="nm">Nama Siswa</label>
    </div>
    <div class="col-75">
        <input type="text" id="nm" name="nama_siswa" value="<?php echo $row['nama_siswa'];?>" required>
    </div>
</div>

<div class="row">
    <div class="col-25">
      <label for="almt">Alamat</label>
    </div>
    <div class="col-75">
        <td><input  value="<?php echo $row['alamat'];?>" type="text" name="alamat"required ></td>
    </div>
</div>
<br>
<div class="row">
   <div class="col-25">
    <label for="ft">Foto</label>
   </div>
    <img src="gambar/<?php echo $row['foto']?>" width="100px" height="100px">
   <!-- <div class="col-75"> -->
    <!-- <input type="file" id="ft" name="gambar"> -->
    <!-- <p style="color:red">Extensi yang diperbolehkan .png | .jpg | .jpeg |.gif</p> -->
   </div>
</div>

<div class="row">
    <button type="submit" name="upload" value="submit">SIMPAN</button>
    <button type="reset" name="batal" value="batal">BATAL SIMPAN</button>
</div>
       </form>
    </div>
    
</body>
</html>




<!-- 
<!DOCTYPE html>
<html>
    <head>
        <title>Form Edit Siswa</title>
    </head>
    <body>
        <form method="post" action="proses_update.php">
            <input type="hidden" value="<?php echo $row['id_siswa'];?>" name="id_siswa">
            <table>
                <tr><td>NIS</td><td><input type="text" value="<?php echo $row['nis'];?>" name="nis"></td></tr>
                <tr><td>NAMA</td><td><input type="text" value="<?php echo $row['nama_siswa'];?>" name="nama"></td></tr>
                
                <tr><td>ALAMAT</td><td><input value="<?php echo $row['alamat'];?>" type="text" name="alamat"></td></tr>
                <tr><td colspan="2"><button type="submit" value="simpan">SIMPAN PERUBAHAN</button>
                        <a href="tampil_siswa.php">Kembali</a></td></tr>
            </table>
        </form>
    </body>
</html>
 -->
