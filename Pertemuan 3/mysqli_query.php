<?php
$connection = mysqli_connect("localhost", "root", "", "project11");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully to project11 <br>";
$query_insert = mysqli_query($connection, "INSERT INTO guru(ID, NamaLengkap, Alamat, TL, NIP, jurusan) VALUES('', 'Gregorius Dhany E', 'Surakarta', '2005-09-04', '21983', 'RPL')");
if(!$query_insert) {
    echo ("Error query" . mysql_error($connection));
}
mysqli_close(($connection));
?>