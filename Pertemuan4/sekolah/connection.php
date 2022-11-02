<?php

$connection = mysqli_connect("localhost", "root", "", "sekolahku");
if(!$connection){
    echo mysqli_connect_error();
}
