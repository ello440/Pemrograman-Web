<?php
session_start();

$_SESSION['nama'] = "Gregorius Dhany";

$_SESSION['absen'] = 9;

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Sessiion</title>
</head>
<body>
    <?php
        echo "Nama Saya " . $_SESSION['nama'] . "<br>" ."Nomor Absen ". $_SESSION['absen'];
        ?>
</body>
</html>