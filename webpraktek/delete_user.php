<?php
$id=$_GET['id'];

include 'koneksi.php';
include 'header.php';

$delete = mysqli_query($connect,"DELETE FROM user WHERE id='$id'");
if ($delete) {
    $status = 'berhasil';
} else {
    $status = 'gagal';
}
header('location:list_user.php?status'.$status);

?>