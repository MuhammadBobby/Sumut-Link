<?php
// connection
include 'functions/connection.php';

// get all transaksi
include 'functions/transaksi/getAll.php';
?>

<!-- cards -->
<div>
    <!-- row 1 -->
    <div class="flex flex-wrap -mx-3">
        <!-- card1 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Today's Money</p>
                                <h5 class="mb-2 font-bold">$53,000</h5>
                                <p class="mb-0">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+55%</span>
                                    since yesterday
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-blue-500 to-violet-500">
                                <i class="ni leading-none ni-money-coins text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card2 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Today's Users</p>
                                <h5 class="mb-2 font-bold">2,300</h5>
                                <p class="mb-0">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+3%</span>
                                    since last week
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-red-600 to-orange-600">
                                <i class="ni leading-none ni-world text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card3 -->
        <div class="w-full max-w-full px-3 mb-6 sm:w-1/2 sm:flex-none xl:mb-0 xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">New Clients</p>
                                <h5 class="mb-2 font-bold">+3,462</h5>
                                <p class="mb-0">
                                    <span class="text-sm font-bold leading-normal text-red-600">-2%</span>
                                    since last quarter
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-emerald-500 to-teal-400">
                                <i class="ni leading-none ni-paper-diploma text-lg relative top-3.5 text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- card4 -->
        <div class="w-full max-w-full px-3 sm:w-1/2 sm:flex-none xl:w-1/4">
            <div class="relative flex flex-col min-w-0 break-words bg-white shadow-xl rounded-2xl bg-clip-border">
                <div class="flex-auto p-4">
                    <div class="flex flex-row -mx-3">
                        <div class="flex-none w-2/3 max-w-full px-3">
                            <div>
                                <p class="mb-0 font-sans text-sm font-semibold leading-normal uppercase">Sales</p>
                                <h5 class="mb-2 font-bold">$103,430</h5>
                                <p class="mb-0">
                                    <span class="text-sm font-bold leading-normal text-emerald-500">+5%</span>
                                    than last month
                                </p>
                            </div>
                        </div>
                        <div class="px-3 text-right basis-1/3">
                            <div class="inline-block w-12 h-12 text-center rounded-circle bg-gradient-to-tl from-orange-500 to-yellow-500">
                                <i class="ni leading-none ni-cart text-lg relative top-3.5 text-white"></i>
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