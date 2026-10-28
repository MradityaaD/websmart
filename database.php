<?php
$hostname = "sql_host_lu_disini";
$username = "username_lu_disini";
$password = "password_lu_disini";
$database_name = "nama_database_lu_disini";

$db = mysqli_connect($hostname, $username, $password, $database_name);
if($db->connect_error) {
    die("Koneksi gagal: " . $db->connect_error);
}
?>
