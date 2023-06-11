<?php
include "koneksi.php";

$id_vaksin            = $_POST['id_vaksin'];
$jenis_vaksin          = $_POST['jenis_vaksin'];

$query = "UPDATE vaksin SET jenis_vaksin='$jenis_vaksin' where id_vaksin='$id_vaksin'";

$update = mysqli_query($connect,$query);

if($update) {
    echo"berhasil";
}else{
    echo "gagal";
}

header("location:data_vaksin.php?status=".$status);