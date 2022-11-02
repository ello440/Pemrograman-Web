<?php
$connection = mysqli_connect("localhost", "root", "", "project11");
if(!$connection) {
    die("Connection Failed : " . mysqli_connect_error());
}  echo "Connection Successfully to project11 <br>";
$query = mysqli_query($connection, "SELECT ID, NamaLengkap, jurusan FROM guru");

if (!$query) {
    echo ("Error query " . mysqli_error($connection));
}
echo "<br> Hasil Numerik <br>";
while ($data = mysqli_fetch_array($query, MYSQLI_NUM)) {
    print "ID : " . $data[0] . "<br>";
    print "NamaLengkap : " . $data[1] . "<br>";
    print "jurusan : " . $data[2] . "<br>";
}

while ($row = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
    print "ID : " . $row[ID] . "<br>";
    print "NamaLengkap : " . $row[NamaLengkap] . "<br>";
    print "jurusan : " . $row[jurusan] . "<br>";
}

mysqli_close($connection);
?>