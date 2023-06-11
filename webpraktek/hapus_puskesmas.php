<?php
$id_puskesmas=$_GET['id_puskesmas'];

include 'koneksi.php';
include 'header.php';

$delete = mysqli_query($connect,"DELETE FROM puskesmas WHERE id_puskesmas='$id_puskesmas'");
if ($delete) {
    $status = 'berhasil';
} else {
    $status = 'gagal';
}
header('location:data_puskesmas.php?status'.$status);

?>