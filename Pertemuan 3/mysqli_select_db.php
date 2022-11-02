<?php
$connection = mysqli_connect("localhost", "root", "", "project11");
if(!$connection) {
    die("Conecction Failed :" . mysqli_connect_error());
}  echo "Connection Successfully to project11 <br>";
// ubah koneksi ke database project2
$connection_2 = mysqli_select_db($connection, "project2");
if(!$connection_2) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully to project2";
// ...isi kode php untuk database project2...
?>