<?php
include 'connect-db.php';
$id = $_GET['id'];

$sql = "DELETE FROM tb_inventory WHERE id_barang=$id";
if ($conn->query($sql)) {
    header("Location: index.php?status=deleted");
} else {
    echo "Gagal hapus: " . $conn->error;
}
?>
