<?php
include 'connect-db.php';

$id = $_POST['id_barang'];
$stok = $_POST['jumlah_barang'];
$pakai = $_POST['jumlah_pakai'];

if ($pakai > $stok) {
    echo "<script>alert('Jumlah pakai lebih dari stok!'); window.location='index.php';</script>";
    exit;
}

$sisa = $stok - $pakai;
$status = ($sisa == 0) ? 0 : 1;

$sql = "UPDATE tb_inventory SET jumlah_barang=$sisa, status_barang=$status WHERE id_barang=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal update: " . $conn->error;
}
?>
