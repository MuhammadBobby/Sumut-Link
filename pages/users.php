<?php
// import all functions
require 'functions/all-functions.php';

// Get Data
include 'functions/connection.php';
include 'functions/users/getAll.php';

// header table
$header_table = ['Username', 'Jabatan', 'Role', 'Bergabung', 'Action'];
$title = 'Test';

// role styles
$roleStyles = [
    'cs' => 'from-pink-500 to-red-400',       // Warna gradasi untuk Customer Service
    'teller' => 'from-blue-500 to-cyan-400',  // Warna gradasi untuk Teller
    'admin' => 'from-green-500 to-teal-400',  // Warna gradasi untuk Admin
];

?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border">
            <div class="p-6 pb-0 mb-0 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center mb-3">
                <h6 class="text-lg font-semibold text-orange-500">Users <span class="text-blue-800">Table</span></h6>
                <span class="text-xs text-slate-400"><?= $totalUsers ?> Users</span>
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
                            <?php foreach ($users as $user) : ?>
                                <tr>
                                    <!-- username -->
                                    <td class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <div class="flex px-2 py-1">
                                            <div>
                                                <div class="inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl" style="background-color: <?php echo sprintf("#%06X", mt_rand(0, 0xFFFFFF)); ?>;"><?= strtoupper($user['username'][0]) ?></div>
                                            </div>
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
                                        <span class="bg-gradient-to-tl <?= $roleStyles[$user['role']] ?> px-2.5 text-xs rounded-1.8 py-1.4 inline-block whitespace-nowrap text-center align-baseline font-bold uppercase leading-none text-white"><?= ucwords(str_replace('_', ' ', strtolower($user['role']))) ?></span>
                                    </td>
                                    <!-- created -->
                                    <td class="p-2 text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <span class="text-xs font-semibold leading-tight text-slate-400"><?= formatDate($user['created_at']) ?></span>
                                    </td>
                                    <!-- action -->
                                    <td class="p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent">
                                        <a href="javascript:;" class="text-xs font-semibold leading-tight text-slate-400 mx-2"> Edit </a>
                                        <a href="javascript:;" class="text-xs font-semibold leading-tight text-red-400 mx-2"> Hapus </a>
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
</div>