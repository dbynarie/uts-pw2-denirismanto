<?php
$host = "172.25.101.56";
$user = "userinventory";
$pass = "userinventory123";
$db   = "db_inventory";

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
