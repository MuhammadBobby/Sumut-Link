<?php
// Get Data
include 'functions/connection.php';
include 'functions/transaksi/getAll.php';

// header table
$header_table = ['Nama Nasabah', 'Jenis Transaksi', 'Jumlah', 'Keterangan', 'Tanggal', 'Action'];
$title = 'Transaksi';

// jenis kelamin styles
$jenisTrxStyles = [
    'debit' => 'bg-green-100 text-green-800 ',  // Warna gradasi untuk Laki-laki
    'kredit' => 'bg-red-100 text-red-800 ',  // Warna gradasi untuk Perempuan
];

?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
            <div>
                <!-- Button Add -->
                <button type="button" data-modal-target="add-transaksi-modal" data-modal-toggle="add-transaksi-modal" class="w-fit text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 ms-6 me-2 mt-6 focus:outline-none">Masukkan Transaksi</button>
                <!-- Button report -->
                <button type="button" data-modal-target="transaksi-report-modal" data-modal-toggle="transaksi-report-modal" class="w-fit text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 ms-2 me-2 mt-6 focus:outline-none">Export Laporan</button>
            </div>

            <div class="p-6 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center mb-0">
                <h6 class="text-lg font-semibold text-orange-500">Transaksi <span class="text-blue-800">Table</span></h6>
                <span class="text-xs text-slate-400"><?= $totalTransaksi ?> Transaksi</span>
            </div>
            <div class="flex-auto px-0 pt-0 pb-2">
                <div class="p-0 overflow-x-auto">
                    <table class="items-center w-full mb-0 align-top border-collapse text-slate-500">
                        <!-- HEADER -->
                        <thead class="align-bottom">
                            <tr>
                                <?php foreach ($header_table as $header) : ?>
                                    <th class="px-6 py-3 font-bold text-left uppercase align-middle text-center bg-transparent border-b border-collapse shadow-none  text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70"><?= $header ?></th>
                                <?php endforeach; ?>
                            </tr>
                        </thead>
                        <!-- BODY -->
                        <tbody>
                            <?php foreach ($transaksi as $trx) : ?>
                                <tr>
                                    <!-- nama nasabah -->
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 ps-6 text-sm leading-normal font-semibold text-slate-600"><?= $trx['nama_lengkap'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- jenis trx -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="<?= $jenisTrxStyles[$trx['jenis_transaksi']] ?> text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm uppercase"><?= $trx['jenis_transaksi'] ?></span>
                                    </td>
                                    <!-- jumlah -->
                                    <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="font-semibold font-semibold leading-tight text-slate-900">Rp <?= number_format($trx['jumlah']) ?></span>
                                    </td>
                                    <!-- Keterangan -->
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= $trx['keterangan'] ?></span>
                                    </td>
                                    <!-- tanggal -->
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= formatDate($trx['tgl_transaksi']) ?></span>
                                    </td>
                                    <!-- action -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="?page=edit_transaksi&id=<?= $trx['transaksi_id'] ?>" class="text-xs font-semibold leading-tight text-slate-400 mx-2">Edit</a>
                                        <a href="./functions/transaksi/delete.php?id=<?= $trx['transaksi_id'] ?>" class="text-xs font-semibold leading-tight text-red-400 mx-2" onclick=" return confirm ('Apakah Anda Yakin Ingin Menghapus transaksi Ini ?');">Hapus</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

        <!-- PAGINATION -->
        <?php
        $page = 'transaksi';
        include 'components/pagination.php';
        ?>
    </div>


    <!-- MODAL-->
    <?php
    include 'components/modals/modal-add-transaksi.php';
    include 'components/modals/modal-report-transaksi.php';
    ?>
</div>


<!-- close conn -->
<?php $conn->close(); ?>

<!-- JS Custom -->
<script src="./assets/js/custom/transaksi-page.js"></script>