<?php
include "koneksi.php";

$id_puskesmas            = $_POST['id_puskesmas'];
$nama_puskes          = $_POST['nama_puskes'];

$query = "UPDATE puskesmas SET nama_puskes='$nama_puskes' where id_puskesmas='$id_puskesmas'";

$update = mysqli_query($connect,$query);

if($update) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:data_puskesmas.php?status=".$status);