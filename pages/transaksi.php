<?php
// Get Data
include 'functions/connection.php';
include 'functions/transaksi/getAll.php';

// header table
$header_table = ['Nama Nasabah', 'Jenis Transaksi', 'Jumlah', 'Keterangan', 'Action'];
$title = 'Transaksi';
?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
            <!-- Button Add -->
            <button type="button" data-modal-target="add-transaksi-modal" data-modal-toggle="add-transaksi-modal" class="w-fit text-white bg-blue-800 hover:bg-blue-900 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mx-6 mt-6 focus:outline-none">Tambah Data</button>

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
                                                <h6 class="mb-0 text-base leading-normal font-semibold"><?= $user['username'] ?></h6>
                                            </div>
                                        </div>
                                    </td>
                                    <!-- jabatan -->
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <p class="mb-0 text-xs font-semibold leading-tight  dark:opacity-80"><?= ucwords(str_replace('_', ' ', strtolower($user['jabatan']))) ?></p>
                                        <p class="mb-0 text-xs leading-tight text-orange-500">Bank <span class="text-blue-800">Sumut</span></p>
                                    </td>
                                    <!-- role -->
                                    <td class="p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="<?= $roleStyles[$user['role']] ?> text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm uppercase"><?= ucwords(str_replace('_', ' ', strtolower($user['role']))) ?></span>
                                    </td>
                                    <!-- created -->
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= formatDate($user['created_at']) ?></span>
                                    </td>
                                    <!-- action -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="?page=edit_user&id=<?= $user['user_id'] ?>" class="text-xs font-semibold leading-tight text-slate-400 mx-2">Edit</a>
                                        <a href="./functions/users/delete.php?id=<?= $user['user_id'] ?>" class="text-xs font-semibold leading-tight text-red-400 mx-2" onclick=" return confirm ('Apakah Anda Yakin Ingin Menghapus data Ini ?');">Hapus</a>
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
        $page = 'users';
        include 'components/pagination.php';
        ?>
    </div>


    <!-- MODAL -->
    <?php include 'components/modals/modal-add-users.php'; ?>
</div>


<!-- close conn -->
<?php $conn->close(); ?>