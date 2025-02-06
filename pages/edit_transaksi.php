<?php
// connection
require 'functions/connection.php';

// get id
$id = htmlspecialchars($_GET['id']);

// check id
if (empty($id)) {
    header('Location: ../index.php?page=transaksi&error=id_not_found');
    exit;
}

// get data
include 'functions/transaksi/getById.php';
// get all nasabah
include 'functions/nasabah/getAll.php';
?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border min-h-96">
            <div class="px-6 pt-6 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center mb-0">
                <h6 class="text-lg font-semibold text-orange-500">Edit <span class="text-blue-800">Transaksi</span></h6>
            </div>

            <!-- form -->
            <form class="p-4 md:p-5" action="functions/transaksi/update.php" method="POST">
                <input type="hidden" name="transaksi_id" id="transaksi_id" value="<?= $transaksi['transaksi_id'] ?>">
                <input type="hidden" name="created_by" id="created_by" value="<?= $user['user_id'] ?>">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <!-- username -->
                    <div class="col-span-2">
                        <label for="nasabah_id" class="block mb-2 text-sm font-medium text-gray-900">Nasabah</label>
                        <select id="nasabah_id" name="nasabah_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 max-h-32 overflow-y-auto">
                            <?php foreach ($nasabah as $nas) : ?>
                                <option value="<?= $nas['nik_ktp'] ?>" <?= $transaksi['nasabah_id'] == $nas['nik_ktp'] ? 'selected' : '' ?> class="capitalize"><?= $nas['nama_lengkap'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <!-- jenis_transaksi -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jenis_transaksi" class="block mb-2 text-sm font-medium text-gray-900">Jenis Transaksi</label>
                        <select id="jenis_transaksi" name="jenis_transaksi" class="bg-gray-50 border border-gray-300 <?= $transaksi['jenis_transaksi'] == 'debit' ? 'text-green-700 bg-green-100' : 'text-red-700 bg-red-100' ?> text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option value="debit" <?= $transaksi['jenis_transaksi'] == 'debit' ? 'selected' : '' ?> class="text-green-700 bg-green-100 font-semibold">DEBIT</option>
                            <option value="kredit" <?= $transaksi['jenis_transaksi'] == 'kredit' ? 'selected' : '' ?> class="text-red-700 bg-red-100 font-semibold">KREDIT</option>
                        </select>
                    </div>
                    <!-- jumlah -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jumlah" class="block mb-2 text-sm font-medium text-gray-900">Jumlah</label>
                        <input type="number" name="jumlah" id="jumlah" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" min="1" value="<?= $transaksi['jumlah'] ?>" required="">
                    </div>
                    <!-- keterangan -->
                    <div class="col-span-2 relative">
                        <label for="keterangan" class="block mb-2 text-sm font-medium text-gray-900">Keterangan</label>
                        <input type="text" name="keterangan" id="keterangan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" value="<?= $transaksi['keterangan'] ?>">
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <a href="../index.php?page=transaksi" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 h-fit">Cancel</a>

                    <button type="submit" class="h-fit text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>