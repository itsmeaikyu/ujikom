
<?php
include 'koneksi.php';
//menyimpan data kedalam variabel
$id         =$_POST['id_siswa'];
$nis        =$_POST['nis'];
$nama_siswa =$_POST['nama_siswa'];
$alamat     =$_POST['alamat'];
//query SQL untuk insert data
$query="update tbl_siswa set nis='$nis',nama_siswa='$nama_siswa',
alamat=''"


?>