# Nama : Deni Rismanto
# NIM : 230401010301 
# Kelas : IF401
# Nama Mata Kuliah : Pemrograman Web II

<?php
include 'connect-db.php';

$showAlert = '';
if (isset($_GET['status'])) {
    if ($_GET['status'] == 'deleted') {
        $showAlert = 'Data berhasil dihapus.';
    } elseif ($_GET['status'] == 'updated') {
        $showAlert = 'Data berhasil diupdate.';
    } elseif ($_GET['status'] == 'added') {
        $showAlert = 'Barang berhasil ditambahkan.';
    } elseif ($_GET['status'] == 'stock_added') {
        $showAlert = 'Add Stock Berhasil Dilakukan.';
    }
    
}

$result = $conn->query("SELECT * FROM tb_inventory");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Inventory Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body class="bg-gray-100 text-gray-800 p-6">
    <div class="max-w-7xl mx-auto">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-blue-700">📦 Inventory Barang</h2>
            <a href="form-add.php" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow text-sm font-medium">
                <i class="bi bi-plus-circle mr-1"></i> Tambah Barang
            </a>
        </div>

        <?php if ($showAlert): ?>
            <div id="alert-box" class="bg-green-100 border border-green-300 text-green-800 px-4 py-3 rounded mb-4 transition-opacity duration-500">
                ✅ <?= $showAlert ?>
            </div>
            <script>
                setTimeout(() => {
                    const alertBox = document.getElementById('alert-box');
                    if (alertBox) {
                    alertBox.classList.add('opacity-0');
                    setTimeout(() => alertBox.remove(), 500); // Hapus dari DOM setelah fade out
                    }
                }, 5000);
            </script>
        <?php endif; ?>

        <div class="bg-white shadow-md rounded overflow-hidden">
            <div class="overflow-x-auto">
                <table class="min-w-full text-sm text-left text-gray-700">
                    <thead class="bg-blue-50 border-b text-gray-600 font-semibold">
                        <tr>
                            <th class="px-4 py-2">Kode</th>
                            <th class="px-4 py-2">Nama</th>
                            <th class="px-4 py-2">Jumlah</th>
                            <th class="px-4 py-2">Satuan</th>
                            <th class="px-4 py-2">Harga</th>
                            <th class="px-4 py-2">Status</th>
                            <th class="px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php while($row = $result->fetch_assoc()): ?>
                        <tr class="border-b hover:bg-gray-50">
                            <td class="px-4 py-2"><?= $row['kode_barang'] ?></td>
                            <td class="px-4 py-2"><?= $row['nama_barang'] ?></td>
                            <td class="px-4 py-2"><?= $row['jumlah_barang'] ?></td>
                            <td class="px-4 py-2"><?= $row['satuan_barang'] ?></td>
                            <td class="px-4 py-2">Rp <?= number_format($row['harga_beli'], 2, ',', '.') ?></td>
                            <td class="px-4 py-2">
                                <span class="px-2 py-1 text-xs rounded-full <?= $row['status_barang'] ? 'bg-green-100 text-green-700' : 'bg-red-100 text-red-600' ?>">
                                    <?= $row['status_barang'] ? 'Available' : 'Not Available' ?>
                                </span>
                            </td>
                            <td class="px-4 py-2 space-x-1">
                                <a href="form-edit.php?id=<?= $row['id_barang'] ?>" class="inline-block bg-blue-600 hover:bg-blue-700 text-white px-2 py-1 rounded text-xs" title="Edit">
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <a href="use.php?id=<?= $row['id_barang'] ?>" class="inline-block bg-yellow-500 hover:bg-yellow-600 text-white px-2 py-1 rounded text-xs" title="Pakai">
                                    <i class="bi bi-tools"></i>
                                </a>
                                <a href="add-stock.php?id=<?= $row['id_barang'] ?>" class="inline-block bg-cyan-600 hover:bg-cyan-700 text-white px-2 py-1 rounded text-xs" title="Tambah Stok">
                                    <i class="bi bi-plus-lg"></i>
                                </a>
                                <a href="delete.php?id=<?= $row['id_barang'] ?>" onclick="return confirm('Yakin hapus data?')" class="inline-block bg-red-600 hover:bg-red-700 text-white px-2 py-1 rounded text-xs" title="Hapus">
                                    <i class="bi bi-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php endwhile; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</html>
