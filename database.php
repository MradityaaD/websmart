<?php

$hostname = "sql102.infinityfree.com";
$username = "if0_43267359";
$password = "Dattebayo889"; // Sesuai password di kolom MYSQL PASSWORD
$database_name = "if0_43267359_plengertosmart";

$db = mysqli_connect($hostname, $username, $password, $database_name);

if($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}

?>