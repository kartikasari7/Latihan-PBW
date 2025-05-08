<?php
require "koneksi.php";

$idMatkul = $_GET["id_matkul"];

$sql = "DELETE FROM tb_matkul WHERE id_matkul='$idMatkul'";

$result = mysqli_query($koneksi,$sql);

if($result == true) {
    echo "<script>alert('Hapus Data Berhasil')
    window.location.href='index.php'</script>";
} else {
    echo "<script>alert('Hapus Data Gagal')
    window.location.href='index.php'</script>";  
}

?>