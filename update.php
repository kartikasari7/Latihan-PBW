<?php
require "koneksi.php";

if(isset($_POST['submit'])) {
    $idMatkul = $_POST ['id_matkul'];
    $namaMatkul = $_POST['nama_matkul'];
    $jumlahSks = $_POST['jumlah_sks'];
    
    $sql = "UPDATE tb_matkul SET
    nama_matkul = '$namaMatkul',
    jumlah_sks = '$jumlahSks'
    WHERE id_matkul = '$idMatkul'";

    $result = mysqli_query($koneksi,$sql);
    if($result == true) {
        echo "<script>alert('Ubah Data Berhasil')
        window.location.href='index.php'</script>";
    } else {
        echo "<script> alert(Ubah Data Gagal')
       window.location.href='index.php'</script>";
    }
}