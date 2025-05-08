<?php 
require "koneksi.php";

if (isset($_POST["submit"])) {
    $idMatkul = $_POST["id_matkul"];
    $namaMatkul = $_POST["nama_matkul"];
    $jumlahSks = $_POST["jumlah_sks"];

    $sql = "INSERT INTO tb_matkul VALUES('$idMatkul','$namaMatkul','$jumlahSks')";

    $result = mysqli_query($koneksi,$sql);

    if($result == true) {
    echo "<script>alert('Data Berhasil Di Tambah')
    window.location.href='index.php'</script>";
    } else {
    echo "<script>alert('Data Gagal Di Tambah')
    window.location.href='index.php'</script>";
    }
}

?>