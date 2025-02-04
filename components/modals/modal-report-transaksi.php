<?php
// get all nasabah
include 'functions/nasabah/getAll.php';
?>

<!-- Main modal -->
<div id="transaksi-report-modal" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">
                    Export Laporan Transaksi
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="transaksi-report-modal">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="report-transaksi.php" method="POST">
                <label for="" class="block mb-2 text-sm font-medium text-gray-900">Masukkan Parameter Laporan</label>

                <hr class="h-px my-3 bg-transparent bg-gradient-to-r from-transparent via-black to-transparent">

                <div class="grid gap-4 mb-4 grid-cols-2">
                    <!-- tgl mulai -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tgl_mulai" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Mulai</label>
                        <input type="date" name="tgl_mulai" id="tgl_mulai" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                    </div>
                    <!-- tgl berakhir -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="tgl_berakhir" class="block mb-2 text-sm font-medium text-gray-900">Tanggal Berakhir</label>
                        <input type="date" name="tgl_berakhir" id="tgl_berakhir" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5">
                    </div>
                    <!-- jenis transaksi -->
                    <div class="col-span-2">
                        <label for="jenis_transaksi" class="block mb-2 text-sm font-medium text-gray-900">Jenis Transaksi</label>
                        <select id="jenis_transaksi" name="jenis_transaksi" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option selected disabled>SELECT JENIS</option>
                            <option value="debit" class="text-green-700 bg-green-100 font-semibold">DEBIT</option>
                            <option value="kredit" class="text-red-700 bg-red-100 font-semibold">KREDIT</option>
                        </select>
                    </div>
                    <!-- nasabah -->
                    <div class="col-span-2">
                        <label for="nasabah_id" class="block mb-2 text-sm font-medium text-gray-900">Nasabah</label>
                        <select id="nasabah_id" name="nasabah_id" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5 max-h-32 overflow-y-auto">
                            <option selected disabled>SELECT NASABAH</option>
                            <?php foreach ($nasabah as $nas) : ?>
                                <option value="<?= $nas['nik_ktp'] ?>" class="capitalize"><?= $nas['nama_lengkap'] ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center">
                    <svg class="w-6 h-6 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M8 3a2 2 0 0 0-2 2v3h12V5a2 2 0 0 0-2-2H8Zm-3 7a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h1v-4a1 1 0 0 1 1-1h10a1 1 0 0 1 1 1v4h1a2 2 0 0 0 2-2v-5a2 2 0 0 0-2-2H5Zm4 11a1 1 0 0 1-1-1v-4h8v4a1 1 0 0 1-1 1H9Z" clip-rule="evenodd" />
                    </svg>

                    Print
                </button>
            </form>
        </div>
    </div>
</div>