<?php
$server="localhost";
$username="root";
$password="";
$database="webpraktek";

$connect=mysqli_connect($server,$username,$password) or die("koneksi gagal");
mysqli_select_db($connect,$database) or die ("database tidak ditemukan");

?>