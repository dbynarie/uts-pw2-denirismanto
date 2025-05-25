<?php
include 'connect-db.php';

$id = $_POST['id_barang'];
$kode = $_POST['kode_barang'];
$nama = $_POST['nama_barang'];
$jumlah = $_POST['jumlah_barang'];
$satuan = $_POST['satuan_barang'];
$harga = $_POST['harga_beli'];
$status = $_POST['status_barang'];

$sql = "UPDATE tb_inventory SET kode_barang='$kode', nama_barang='$nama', jumlah_barang=$jumlah,
        satuan_barang='$satuan', harga_beli=$harga, status_barang=$status WHERE id_barang=$id";

if ($conn->query($sql)) {
    header("Location: index.php");
} else {
    echo "Gagal update data: " . $conn->error;
}
?>
