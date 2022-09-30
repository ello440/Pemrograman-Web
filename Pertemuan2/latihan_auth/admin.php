<?php
session_start();

if(isset($_SESSION['username'])){
    header('Location:login-page.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>admin </title>
</head>
<body>
    <h1><p align=center>Hello, Selamat Datang <?= $_SESSION['username']; ?>!!</p>
</h1>
<p align=center>Kamu Berada di page <b>Admin</b></p>
<br><h3><p align=center><a href='logout.php'>logout</a></p></h3>
</body>
</html>