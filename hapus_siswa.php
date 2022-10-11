<?php

include "koneksi.php";

// Ambil id dari Hasil Link Hapus

$id = $_GET['id'];

$queryunlink=mysqli_fetch_array(mysqli_query($koneksi,"SELECT * FROM tbl_siswa WHERE id_siswa='$id'"));
$filename=$queryunlink["foto"];
unlink('gambar/'.$filename);
$hapus=mysqli_query($koneksi,"DELETE from tbl_siswa WHERE id_siswa='$id'");

    echo "
        <script>
        alert('Data Berhasil di Hapus');
        document.location.href='tampil_siswa.php';
        </script>
 
    ";
?>