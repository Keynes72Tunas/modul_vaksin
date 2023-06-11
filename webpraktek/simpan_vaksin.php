<?php

$id_vaksin      = $_POST["id_vaksin"];
$jenis_vaksin   = $_POST["jenis_vaksin"];




include 'koneksi.php';
$query = "INSERT INTO vaksin (id_vaksin, jenis_vaksin) 
values ('$id_vaksin', '$jenis_vaksin')";

$insert = mysqli_query($connect,$query);

if($insert) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:index.php?status=".$status);
?>