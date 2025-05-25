<?php
include 'connect-db.php';

$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah_barang'];
$satuan = $_POST['satuan_barang'];
$harga = $_POST['harga_beli'];
$status = $_POST['status_barang'];

$sql = "INSERT INTO tb_inventory (kode_barang, nama_barang, jumlah_barang, satuan_barang, harga_beli, status_barang)
        VALUES ('$kode', '$nama', $jumlah, '$satuan', $harga, $status)";

if ($conn->query($sql)) {
    header("Location: index.php?status=added");
    exit();
} else {
    echo "Gagal menambah data: " . $conn->error;
}
?>
