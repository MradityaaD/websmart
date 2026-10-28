<?php

$hostname = "";
$username = "";
$password = ""; // Sesuai password di kolom MYSQL PASSWORD
$database_name = "";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}

?>
