<?php
include 'connect-db.php';

$id = $_POST['id_barang'];
$jumlah_sekarang = $_POST['jumlah_barang'];
$jumlah_tambah = $_POST['jumlah_tambah'];

$jumlah_baru = $jumlah_sekarang + $jumlah_tambah;


$status_baru = ($jumlah_baru > 0) ? 1 : 0;

$sql = "UPDATE tb_inventory SET jumlah_barang=$jumlah_baru, status_barang=$status_baru WHERE id_barang=$id";

if ($conn->query($sql)) {
    header("Location: index.php?id=$id&status=stock_added");
    exit();
} else {
    echo "Gagal menambah stok: " . $conn->error;
}
?>
