<?php
$id_vaksin=$_GET['id_vaksin'];

include 'koneksi.php';
include 'header.php';

$delete = mysqli_query($connect,"DELETE FROM vaksin WHERE id_vaksin='$id_vaksin'");
if ($delete) {
    $status = 'berhasil';
} else {
    $status = 'gagal';
}
header('location:data_vaksin.php?status'.$status);

?>