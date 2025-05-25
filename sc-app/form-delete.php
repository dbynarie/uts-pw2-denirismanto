<?php
include 'connect-db.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_inventory WHERE id_barang=$id";
if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal hapus: " . $conn->error;
}
?>
