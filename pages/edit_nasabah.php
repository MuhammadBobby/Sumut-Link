<?php
// connection
require 'functions/connection.php';

// get id
$id = htmlspecialchars($_GET['id']);

// check id
if (empty($id)) {
    header('Location: ../../index.php?page=users&error=id_not_found');
    exit;
}

// get data
include 'functions/nasabah/getById.php';
?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border min-h-96">
            <div class="px-6 pt-6 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center mb-0">
                <h6 class="text-lg font-semibold text-orange-500">Edit <span class="text-blue-800">Nasabah</span></h6>
            </div>

            <!-- form -->
            <form class="p-4 md:p-5" action="functions/nasabah/update.php" method="POST">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <!-- nik -->
                    <div class="col-span-2">
                        <label for="nik_ktp" class="block mb-2 text-sm font-medium text-gray-900">NIK KTP</label>
                        <input type="text" name="nik_ktp" id="nik_ktp" class="bg-gray-300 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" minlength="16" maxlength="16" required="" value="<?= $nasabah['nik_ktp'] ?>" readonly>
                    </div>
                    <!-- nama -->
                    <div class="col-span-2">
                        <label for="nama" class="block mb-2 text-sm font-medium text-gray-900">Nama Lengkap</label>
                        <input type="text" name="nama" id="nama" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Jhon Doe" required="" value="<?= $nasabah['nama_lengkap'] ?>">
                    </div>
                    <!-- alamat -->
                    <div class="col-span-2 relative">
                        <label for="alamat" class="block mb-2 text-sm font-medium text-gray-900">Alamat</label>
                        <input type="text" name="alamat" id="alamat" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="" value="<?= $nasabah['alamat'] ?>">
                    </div>
                    <!-- Nama Ibu Kandung-->
                    <div class="col-span-2 relative">
                        <label for="nama_ibu_kandung" class="block mb-2 text-sm font-medium text-gray-900">Nama Ibu Kandung</label>
                        <input type="text" name="nama_ibu_kandung" id="nama_ibu_kandung" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" minlength="8" placeholder="********" required="" value="<?= $nasabah['nama_ibu_kandung'] ?>">
                    </div>
                    <!-- no telp -->
                    <div class="col-span-1">
                        <label for="no_telp" class="block mb-2 text-sm font-medium text-gray-900">No Telepon</label>
                        <input type="text" name="no_telp" id="no_telp" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="........" minlength="10" maxlength="15" required="" value="<?= $nasabah['no_telepon'] ?>">
                    </div>
                    <!-- Jenis Kelamin -->
                    <div class="col-span-1">
                        <label for="jenis_kelamin" class="block mb-2 text-sm font-medium text-gray-900">Jenis Kelamin</label>
                        <select id="jenis_kelamin" name="jenis_kelamin" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5" required>
                            <option selected disabled>SELECT JENIS KELAMIN</option>
                            <option value="laki-laki" <?= $nasabah['jenis_kelamin'] == 'laki-laki' ? 'selected' : '' ?>>Laki-Laki</option>
                            <option value="perempuan" <?= $nasabah['jenis_kelamin'] == 'perempuan' ? 'selected' : '' ?>>Perempuan</option>
                        </select>
                    </div>
                    <!-- tgl Lahir -->
                    <div class="col-span-1">
                        <label for="tgl_lahir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="tgl_lahir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" required="" value="<?= $nasabah['tgl_lahir'] ?>">
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <a href="../../index.php?page=nasabah" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 h-fit">Cancel</a>

                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center h-fit">
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