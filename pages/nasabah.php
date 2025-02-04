<?php
// Get Data
include 'functions/connection.php';
include 'functions/nasabah/getAll.php';

// header table
$header_table = ['Nama Lengkap', 'NIK KTP', 'No CIF',  'Alamat', 'Jenis Kelamin', 'Action'];
$title = 'Nasabah';

// jenis kelamin styles
$jenisKelaminStyles = [
    'laki-laki' => 'bg-blue-100 text-blue-800 ',  // Warna gradasi untuk Laki-laki
    'perempuan' => 'bg-red-100 text-red-800 ',  // Warna gradasi untuk Perempuan
];
?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
            <!-- <div class="relative flex flex-wrap items-stretch justify-sel w-fit transition-all rounded-lg ease lg:me-2">
                <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                    <svg class="w-auto h-full" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21-3.5-3.5M17 10a7 7 0 1 1-14 0 7 7 0 0 1 14 0Z" />
                    </svg>
                </span>
                <input type="text" id="search" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Cari nasabah..." />
            </div> -->
            <div>
                <!-- Button Add -->
                <button type="button" data-modal-target="add-nasabah-modal" data-modal-toggle="add-nasabah-modal" class="w-fit text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 ms-6 me-2 mt-6 focus:outline-none">Tambah Data</button>
                <!-- Button report -->
                <button type="button" data-modal-target="nasabah-report-modal" data-modal-toggle="nasabah-report-modal" class="w-fit text-white bg-orange-500 hover:bg-orange-600 focus:ring-4 focus:ring-orange-300 font-medium rounded-lg text-sm px-5 py-2.5 ms-2 me-2 mt-6 focus:outline-none">Export Laporan</button>
            </div>

            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center mb-3">
                <h6 class="text-lg font-semibold text-orange-500">Nasabah <span class="text-blue-800">Table</span></h6>
                <span class="text-xs text-slate-400"><?= $totalNasabah ?> Nasabah</span>
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
                        <tbody id="nasabah-table">
                            <?php foreach ($nasabah as $nas) : ?>
                                <tr>
                                    <!-- nama -->
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <div class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" style="background-color: <?php echo sprintf("#%06X", mt_rand(0, 0xFFFFFF)); ?>;"><?= strtoupper($nas['nama_lengkap'][0]) ?></div>
                                            </div>
                                            <div class="flex flex-col justify-center">
                                                <h6 class="mb-0 text-base leading-normal font-semibold capitalize"><?= $nas['nama_lengkap'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- nik ktp -->
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= $nas['nik_ktp'] ?></span>
                                    </td>
                                    <!-- no cif -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= $nas['no_CIF'] ?></span>
                                    </td>
                                    <!-- alamat -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= $nas['alamat'] ?></span>
                                    </td>
                                    <!-- jenis_kelamin -->
                                    <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="<?= $jenisKelaminStyles[$nas['jenis_kelamin']] ?> text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm uppercase"><?= $nas['jenis_kelamin'] ?></span>
                                    </td>
                                    <!-- action -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="?page=detail_nasabah&id=<?= $nas['nik_ktp'] ?>" class="text-xs font-semibold leading-tight text-orange-400 mx-2"> Detail </a>
                                        <a href="?page=edit_nasabah&id=<?= $nas['nik_ktp'] ?>" class="text-xs font-semibold leading-tight text-slate-400 mx-2"> Edit </a>
                                        <a href="./functions/nasabah/delete.php?id=<?= $nas['nik_ktp'] ?>" class="text-xs font-semibold leading-tight text-red-400 mx-2" onclick=" return confirm ('Apakah Anda Yakin Ingin Menghapus data Ini ?');">Hapus</a>
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
        $page = 'nasabah';
        include 'components/pagination.php';
        ?>
    </div>

    <!-- MODAL -->
    <?php include 'components/modals/modal-add-nasabah.php'; ?>
    <?php include 'components/modals/modal-report-nasabah.php'; ?>
</div>



<script>
    $(document).ready(function() {
        $("#search").on("keyup", function() {
            let keyword = $(this).val(); // Ambil input pencarian
            console.log(keyword);

            $.ajax({
                url: "functions/nasabah/search.php", // File PHP untuk mengambil data
                method: "POST",
                data: {
                    search: keyword
                },
                success: function(response) {
                    $("#nasabah-table").html(response); // Update tabel dengan hasil pencarian
                },
            });
        });
    });
</script>

<!-- JS Custom -->
<script src="./assets/js/custom/nasabah-page.js"></script>
<!-- close conn -->
<?php $conn->close(); ?>