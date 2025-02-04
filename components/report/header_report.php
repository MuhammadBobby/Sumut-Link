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
            <p><strong>Exported By:</strong> <?= $user['role'] ?> - <?= $user['username'] ?></p>
            <p><strong>Rentang:</strong> <?= formatDate($tgl_mulai) ?> - <?= formatDate($tgl_berakhir) ?></p>
            <p><strong>Export Time:</strong> <?= date('Y-m-d H:i:s') ?></p>
        </div>