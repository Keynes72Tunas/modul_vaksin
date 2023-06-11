<?php
$id_puskesmas                     = $_POST["id_puskesmas"];
$nama_puskes                    = $_POST["nama_puskes"];


include 'koneksi.php';
$query = "INSERT INTO puskesmas (id_puskesmas, nama_puskes) 
values ('$id_puskesmas', '$nama_puskes')";

$insert = mysqli_query($connect,$query);

if($insert) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:index.php?status=".$status);
?>