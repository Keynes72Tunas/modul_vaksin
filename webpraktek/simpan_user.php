<?php
include "koneksi.php";
$id = $_POST['id'];
$nama = $_POST['nama'];
$usernama = $_POST['usernama'];
$password = $_POST['password'];
$sql = "INSERT INTO user(id, nama, usernama, password) VALUES('$id', '$nama', '$usernama', '$password')";
if (mysqli_query($connect, $sql)){
    header("location:home.php");
}elseif(!mysqli_query($connect, $sql)){
    header("location:login.php");
}

?>