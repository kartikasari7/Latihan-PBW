<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "db_matkul";

$koneksi = mysqli_connect ($host,$user,$password,$db);

if($koneksi == true) {
    echo "Koneksi Ke database $db berhasil";
}else{
    echo "Koneksi Ke database $db gagal";
}

?>