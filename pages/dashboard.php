<?php
// fun dashboard
require 'functions/dashboard-data.php';
// connection
include 'functions/connection.php';

// get all any
include 'functions/transaksi/getAll.php';
include 'functions/nasabah/getAll.php';

// get data from function
$jumlahTransaksi = getJumlahTransaksi();
$totalDebit = getTotalTransaksiDebit();
$totalKredit = getTotalTransaksiKredit();
?>

<!-- cards -->
<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- Total Nasabah -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Total Nasabah By System</p>
                                <h5 class="mb-2 font-bold"><?= number_format($totalNasabah) ?> Nasabah</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <div class="leading-none text-orange-500 text-lg relative top-3.5">
                                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M12 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8Zm-2 9a4 4 0 0 0-4 4v1a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2v-1a4 4 0 0 0-4-4h-4Z" clip-rule="evenodd" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- jumlah transaksi -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Jmlh Transaksi (1 hari)</p>
                                <h5 class="mb-2 font-bold"><?= number_format($jumlahTransaksi) ?> Transaksi</h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-blue-800"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Total transaksi debit (1 hari) -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Total Transaksi Debit (1 hari)</p>
                                <h5 class="mb-2 font-bold">Rp <?= number_format($totalDebit) ?></h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <div class="leading-none text-lg relative top-3.5 text-emerald-500">
                                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v13m0-13 4 4m-4-4-4 4" />
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- total transaksi kredit (1 hari) -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Total Transaksi Kredit (1 hari)</p>
                                <h5 class="mb-2 font-bold">Rp <?= number_format($totalKredit) ?></h5>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                <div class="leading-none text-lg relative top-3.5 text-red-500">
                                    <svg class="w-7 h-7" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19V5m0 14-4-4m4 4 4-4" />
                                    </svg>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- cards row 2 -->
    <div class="flex flex-wrap mt-6 -mx-3">
        <div class="w-full max-w-full px-3 mt-0 mb-6 lg:mb-0 lg:w-7/12 lg:flex-none">
            <div class="relative flex flex-col min-w-0 break-words bg-white border-0 border-solid shadow-xl  border-black-125 rounded-2xl bg-clip-border">
                <div class="p-4 pb-0 mb-0 rounded-t-4">
                    <div class="flex justify-between">
                        <h6 class="mb-2">Transaksi Terbaru</h6>
                    </div>
                </div>

                <?php if (!empty($transaksi)) : ?>
                    <div class="overflow-x-auto">
                        <table class="items-center w-full mb-4 align-top border-collapse border-gray-200 ">
                            <tbody>
                                <?php foreach ($transaksi as $trx) : ?>
                                    <tr>
                                        <td class="p-2 align-middle bg-transparent border-b w-3/10 whitespace-nowrap ">
                                            <div class="flex items-center px-2 py-1">
                                                <div>
                                                    <div class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" style="background-color: <?php echo sprintf("#%06X", mt_rand(0, 0xFFFFFF)); ?>;"><?= strtoupper($trx['nama_lengkap'][0]) ?></div>
                                                </div>
                                                <div class="ml-6">
                                                    <p class="mb-0 text-xs font-semibold leading-tight">Nasabah:</p>
                                                    <h6 class="mb-0 text-sm leading-normal"><?= $trx['nama_lengkap'] ?></h6>
                                                </div>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight">Jenis Trx:</p>
                                                <h6 class="mb-0 text-sm leading-normal capitalize <?= $trx['jenis_transaksi'] === 'kredit' ? 'text-red-500' : 'text-emerald-500' ?>"><?= $trx['jenis_transaksi'] ?></h6>
                                            </div>
                                        </td>
                                        <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap ">
                                            <div class="text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight">Jumlah:</p>
                                                <h6 class="mb-0 text-sm leading-normal">Rp <?= number_format($trx['jumlah']) ?></h6>
                                            </div>
                                        </td>
                                        <td class="p-2 text-sm leading-normal align-middle bg-transparent border-b whitespace-nowrap ">
                                            <div class="flex-1 text-center">
                                                <p class="mb-0 text-xs font-semibold leading-tight">Tanggal:</p>
                                                <h6 class="mb-0 text-sm leading-normal"><?= formatDate($trx['tgl_transaksi']) ?></h6>
                                            </div>
                                        </td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                <?php else : ?>
                    <div class="flex items-center justify-center h-full">
                        <div class="text-center">
                            <p class="mb-0 text-sm font-semibold leading-tight">Belum ada transaksi</p>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <footer class="pt-4">
        <div class="w-full px-6 mx-auto">
            <div class="flex flex-wrap items-center -mx-3 lg:justify-between">
                <div class="w-full max-w-full px-3 mt-0 mb-6 shrink-0 lg:mb-0 lg:w-1/2">
                    <div class="text-sm leading-normal text-center text-slate-500 lg:text-left">
                        ©
                        <script>
                            document.write(new Date().getFullYear() + ",");
                        </script>
                        made from
                        <a href="https://github.com/MuhammadBobby" class="font-semibold text-slate-700" target="_blank">Creative Tim</a>
                        for <span class="text-orange-500">Bank <span class="text-blue-800">Sumut</span></span>
                    </div>
                </div>
            </div>
    </footer>
</div>
<!-- end cards -->