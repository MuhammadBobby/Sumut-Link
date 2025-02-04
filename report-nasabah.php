<?php
// connection
include 'functions/connection.php';
// import all functions
require 'functions/all-functions.php';
session_start();

// check if user is logged in
if (!isset($_SESSION['access_token']) || empty($_SESSION['access_token'])) {
    header('location: login.php');
    exit();
} else {
    // Get access token from session or cookie
    $access_token = $_SESSION['access_token'] ?? $_COOKIE['access_token'];
    // Get user data
    $user = getMe($access_token);
}


// get data Post
$tgl_mulai = htmlspecialchars($_POST['tgl_mulai'] ?? "");
$tgl_berakhir = htmlspecialchars($_POST['tgl_berakhir'] ?? "");

// get data
include 'functions/reports/nasabah.php';


// header table
$header_table = ['Nasabah', 'NIK', 'CIF', 'No Telp', 'Alamat', 'Jenis Kelamin', 'Tanggal Lahir', 'Nama Ibu'];
?>


<?php
$title_report = 'Nasabah';
include 'components/report/header_report.php'
?>

<div>
    <p class="text-sm text-gray-500">Total Nasabah: <?= $total_nasabah_report ?> Orang</p>
    <table class="w-full table-auto text-sm text-left text-gray-500 border border-gray-200">
        <thead class="text-xs text-gray-700 uppercase bg-orange-200">
            <tr>
                <?php foreach ($header_table as $header) : ?>
                    <th class="px-1 py-3 border whitespace-nowrap"><?= $header ?></th>
                <?php endforeach; ?>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($transaksi_report as $trx_report) : ?>
                <tr class="bg-white border">
                    <td class="px-1 py-2 border whitespace-nowrap font-semibold text-black capitalize"><?= $trx_report['nama_lengkap'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['nik_ktp'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['no_CIF'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['no_telepon'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= $trx_report['alamat'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap capitalize font-semibold <?= $trx_report['jenis_kelamin'] === 'perempuan' ? 'text-red-500' : 'text-blue-500' ?>"><?= $trx_report['jenis_kelamin'] ?></td>
                    <td class="px-1 py-2 border whitespace-nowrap"><?= formatDate($trx_report['tgl_lahir']) ?></td>
                    <td class="px-1 py-2 border max-w-32 truncate whitespace-nowrap"><?= $trx_report['nama_ibu_kandung'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?php include 'components/report/footer_report.php' ?>