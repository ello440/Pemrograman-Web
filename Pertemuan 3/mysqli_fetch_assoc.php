<?php
$connection = mysqli_connect("localhost", "root", "", "project11");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully to project11 <br>";

$query = mysqli_query($connection, "SELECT ID, NamaLengkap, jurusan FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
}
$data = mysqli_fetch_assoc($query);
print_r($data);

mysqli_close($connection);
?>