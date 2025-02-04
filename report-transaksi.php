<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Report Transaksi</title>

    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.css" />
</head>

<body class="p-10 bg-blue-100">
    <div class="bg-white p-8 rounded-lg shadow-lg max-w-4xl mx-auto">
        <h1 class="text-3xl font-bold text-center text-gray-800 mb-4 text-orange-500">Laporan <span class="text-blue-800">Transaksi</span></h1>

        <div class="mb-6 text-gray-700">
            <p><strong>Exported By:</strong> Admin</p>
            <p><strong>Tanggal:</strong> <span id="tanggal"></span></p>
            <p><strong>Waktu:</strong> <span id="waktu"></span></p>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-sm text-left text-gray-500 border border-gray-200">
                <thead class="text-xs text-gray-700 uppercase bg-orange-200">
                    <tr>
                        <th class="px-4 py-3 border">Nama Nasabah</th>
                        <th class="px-4 py-3 border">Jenis Transaksi</th>
                        <th class="px-4 py-3 border">Jumlah</th>
                        <th class="px-4 py-3 border">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border">
                        <td class="px-4 py-2 border">John Doe</td>
                        <td class="px-4 py-2 border">Deposit</td>
                        <td class="px-4 py-2 border">Rp 5.000.000</td>
                        <td class="px-4 py-2 border">Berhasil</td>
                    </tr>
                    <tr class="bg-gray-50 border">
                        <td class="px-4 py-2 border">Jane Smith</td>
                        <td class="px-4 py-2 border">Withdraw</td>
                        <td class="px-4 py-2 border">Rp 2.500.000</td>
                        <td class="px-4 py-2 border">Berhasil</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <div class="flex justify-between mt-8 text-gray-700 mb-10">
            <div class="text-center">
                <p class="font-semibold">Pimpinan</p>
                <p>Bapak Pimpinan Bank Sumut</p>
                <div class="h-16"></div>
                <p class="font-bold">_________________</p>
            </div>
            <div class="text-center">
                <p class="font-semibold">Admin</p>
                <p>Test</p>
                <div class="h-16"></div>
                <p class="font-bold">_________________</p>
            </div>
        </div>

    </div>

    <script>
        const previousPage = document.referrer || "/index.php?page=transaksi"; // Ganti dengan halaman yang diinginkan
        setTimeout(() => {
            window.location.href = previousPage; // Redirect ke halaman sebelumnya atau halaman tertentu
        }, 1000); // Tunggu sebentar setelah print
        window.print();
    </script>
</body>

</html>