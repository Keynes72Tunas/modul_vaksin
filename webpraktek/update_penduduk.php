<?php
include "koneksi.php";

$NIK            = $_POST['NIK'];
$Nama           = $_POST['Nama'];
$Nomor_hp          = $_POST['Nomor_hp'];
$Email       = $_POST['Email'];
$Jenis_kelamin        = $_POST['Jenis_kelamin'];
$Tanggal_lahir  = $_POST['Tanggal_lahir'];
$id_vaksin  = $_POST['id_vaksin'];
$id_puskesmas    = $_POST['id_puskesmas'];

$query = "UPDATE penduduk SET Nama='$Nama', Nomor_hp='$Nomor_hp', Email='$Email', Jenis_kelamin='$Jenis_kelamin',
Tanggal_lahir='$Tanggal_lahir', id_vaksin='$id_vaksin', id_puskesmas='$id_puskesmas' where NIK='$NIK'";

$update = mysqli_query($connect,$query);

if($update) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:index.php?status=".$status);