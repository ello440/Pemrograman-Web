<?php

$connection = mysqli_connect("localhost", "root", "", "db_counter1");

if (!$connection) {
    echo mysqli_connect_error();
}
$query_counting = mysqli_query($connection, "UPDATE tb_counter48 SET counter = counter + 1");
$query_select = mysqli_query($connection, "SELECT counter FROM tb_counter48");
$data = mysqli_fetch_row($query_select);

echo "Anda adalah pengunjung ke-" . $data[0] . "hari ini";

mysqli_close($connection);
