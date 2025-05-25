<?php
include 'connect-db.php';
$id = $_GET['id'];
$result = $conn->query("SELECT * FROM tb_inventory WHERE id_barang=$id");
$data = $result->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-lg bg-white shadow-md rounded-lg p-6">
        <h3 class="text-2xl font-bold text-blue-700 mb-6">Edit Barang</h3>
        <form action="update.php" method="POST" class="space-y-5">
            <input type="hidden" name="id_barang" value="<?= $data['id_barang'] ?>">

            <div>
                <label class="block text-gray-700 font-medium mb-1">Kode Barang</label>
                <input type="text" name="kode_barang" value="<?= $data['kode_barang'] ?>" required
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Nama Barang</label>
                <input type="text" name="nama_barang" value="<?= $data['nama_barang'] ?>" required
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Jumlah Barang</label>
                <input type="number" name="jumlah_barang" value="<?= $data['jumlah_barang'] ?>" required
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Satuan</label>
                <select name="satuan_barang"
                        class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <?php
                    $satuan = ['pcs', 'kg', 'liter', 'meter'];
                    foreach ($satuan as $s) {
                        $selected = ($data['satuan_barang'] == $s) ? 'selected' : '';
                        echo "<option value='$s' $selected>$s</option>";
                    }
                    ?>
                </select>
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Harga Beli</label>
                <input type="number" step="0.01" name="harga_beli" value="<?= $data['harga_beli'] ?>" required
                       class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label class="block text-gray-700 font-medium mb-1">Status</label>
                <div class="flex items-center space-x-4 mt-1">
                    <label class="inline-flex items-center">
                        <input type="radio" name="status_barang" value="1" <?= $data['status_barang'] ? 'checked' : '' ?>
                               class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Available</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="status_barang" value="0" <?= !$data['status_barang'] ? 'checked' : '' ?>
                               class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2 text-gray-700">Not Available</span>
                    </label>
                </div>
            </div>

            <div class="flex justify-between pt-4">
                <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded shadow font-medium">
                    Update
                </button>
                <a href="index.php"
                   class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded shadow font-medium">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</body>
</html>
