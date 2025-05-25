<?php include 'connect-db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Barang</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 min-h-screen p-6 flex items-center justify-center">
    <div class="w-full max-w-xl bg-white rounded-lg shadow p-8">
        <h3 class="text-2xl font-bold mb-6 text-blue-700">Tambah Data Barang</h3>
        <form action="insert.php" method="POST" class="space-y-5">
            <div>
                <label class="block mb-1 font-medium">Kode Barang</label>
                <input type="text" name="kode_barang" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Nama Barang</label>
                <input type="text" name="nama_barang" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Jumlah Barang</label>
                <input type="number" name="jumlah_barang" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block mb-1 font-medium">Satuan</label>
                <select name="satuan_barang" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500">
                    <option value="pcs">pcs</option>
                    <option value="kg">kg</option>
                    <option value="liter">liter</option>
                    <option value="meter">meter</option>
                </select>
            </div>
            <div>
                <label class="block mb-1 font-medium">Harga Beli</label>
                <input type="number" step="0.01" name="harga_beli" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-blue-500" required>
            </div>
            <div>
                <label class="block mb-2 font-medium">Status</label>
                <div class="flex gap-4">
                    <label class="inline-flex items-center">
                        <input type="radio" name="status_barang" value="1" checked class="text-blue-600 focus:ring-blue-500">
                        <span class="ml-2">Available</span>
                    </label>
                    <label class="inline-flex items-center">
                        <input type="radio" name="status_barang" value="0" class="text-red-600 focus:ring-red-500">
                        <span class="ml-2">Not Available</span>
                    </label>
                </div>
            </div>
            <div class="flex justify-between mt-6">
                <button type="submit" class="bg-green-600 hover:bg-green-700 text-white px-4 py-2 rounded shadow font-medium">
                    Simpan
                </button>
                <a href="index.php" class="bg-gray-300 hover:bg-gray-400 text-gray-800 px-4 py-2 rounded shadow font-medium">
                    Kembali
                </a>
            </div>
        </form>
    </div>
</body>
</html>
