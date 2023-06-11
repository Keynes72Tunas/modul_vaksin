<?php
$NIK                     = $_POST["NIK"];
$Nama                    = $_POST["Nama"];
$Nomor_hp                = $_POST["Nomor_hp"];
$Email                   = $_POST["Email"];
$Jenis_kelamin           = $_POST["Jenis_kelamin"];
$Tanggal_lahir           = $_POST["Tanggal_lahir"];
$id_vaksin            = $_POST["id_vaksin"];
$id_puskesmas            = $_POST["id_puskesmas"];



include 'koneksi.php';
$query = "INSERT INTO penduduk (NIK, Nama, Nomor_hp, Email, Jenis_kelamin, Tanggal_lahir, id_vaksin, id_puskesmas) 
values ('$NIK', '$Nama', '$Nomor_hp', '$Email', '$Jenis_kelamin', '$Tanggal_lahir', '$id_vaksin', '$id_puskesmas')";

$insert = mysqli_query($connect,$query);

if($insert) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:index.php?status=".$status);
?>