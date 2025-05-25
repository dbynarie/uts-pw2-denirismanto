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
    <title>Pakai Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">
    <div class="w-full max-w-md bg-white shadow-lg rounded-lg p-6">
        <h3 class="text-2xl font-bold text-red-600 mb-6">
            Pakai Barang: <span class="text-gray-800"><?= $data['nama_barang'] ?></span>
        </h3>
        <form action="process.php" method="POST" class="space-y-5">
            <input type="hidden" name="id_barang" value="<?= $data['id_barang'] ?>">
            <input type="hidden" name="jumlah_barang" value="<?= $data['jumlah_barang'] ?>">

            <div>
                <label class="block mb-1 font-medium text-gray-700">Jumlah yang Dipakai</label>
                <input type="number" name="jumlah_pakai" class="w-full px-3 py-2 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-red-500" required>
            </div>

            <div class="flex justify-between pt-4">
                <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded shadow font-medium">
                    Gunakan
                </button>
                <a href="index.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded shadow font-medium">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</body>
</html>
