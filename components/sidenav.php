<?php
$nav_items = [
    [
        'page' => 'dashboard',
        'label' => 'Dashboard',
        'icon' => 'ni ni-tv-2',
        'color_icon' => 'text-blue-500',
    ],
    [
        'page' => 'users',
        'label' => 'Users',
        'icon' => 'ni ni-single-copy-04',
        'color_icon' => 'text-orange-500',
    ],
    [
        'page' => 'nasabah',
        'label' => 'Nasabah',
        'icon' => 'ni ni-collection',
        'color_icon' => 'text-green-500',
    ],
    [
        'page' => 'transaksi',
        'label' => 'Transaksi',
        'icon' => 'ni ni-credit-card',
        'color_icon' => 'text-red-500',
    ]
];

// Ambil halaman aktif dari parameter URL
$current_page = $_GET['page'] ?? 'dashboard';

?>


<!-- sidenav  -->
<aside id="sidenav" class="fixed inset-y-0 flex-wrap items-center justify-between block w-full p-0 my-4 overflow-y-auto antialiased transition-transform duration-200 -translate-x-full bg-white border-0 shadow-xl  max-w-64 ease-nav-brand z-990 xl:ml-6 rounded-2xl xl:left-0 xl:translate-x-0" aria-expanded="false">
    <div class="h-19">
        <i class="absolute text-white top-0 right-10 p-4 opacity-50 cursor-pointer fas fa-times text-slate-400" sidenav-close></i>
        <a class="block px-8 py-6 m-0 text-sm whitespace-nowrap text-slate-700" href="index.php?page=dashboard">
            <img src="./assets/img/logos/bank_sumut.png" class="inline h-full max-w-full transition-all duration-200  ease-nav-brand max-h-8" alt="main_logo" />
            <p class="inline ml-1 font-semibold transition-all duration-200 ease-nav-brand text-orange-500 text-lg">Sumut<span class="text-blue-800">Link</span></p>
        </a>
    </div>

    <hr class="h-px mt-0 bg-transparent bg-gradient-to-r from-transparent via-black/40 to-transparent " />

    <div class="items-center block w-auto overflow-auto max-h-screen grow basis-full">

        <!-- menu -->
        <ul class="flex flex-col pl-0 mb-0">
            <?php foreach ($nav_items as $item):
                // Cek apakah halaman saat ini aktif
                $is_active = ($current_page === $item['page']);
            ?>
                <li class="mt-0.5 w-full">
                    <a
                        class="py-2.7 text-sm ease-nav-brand my-0 mx-2 flex items-center whitespace-nowrap px-4 transition-colors 
                <?= $is_active ? 'bg-blue-500/13 font-semibold text-slate-700 rounded-lg' : ''; ?>"
                        href="index.php?page=<?= $item['page'] ?>">
                        <div
                            class="mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-center stroke-0 text-center xl:p-2.5
                    <?= $item['color_icon'] ?>">
                            <i class="relative top-0 text-sm leading-normal <?= $item['icon']; ?>"></i>
                        </div>
                        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease">
                            <?= $item['label']; ?>
                        </span>
                    </a>
                </li>
            <?php endforeach; ?>

            <!-- logout -->
            <li class="mt-2.5 px-3">
                <a href="functions/auth/logout.php" target="_blank" class="inline-block w-full px-8 py-2 mb-4 text-xs font-bold leading-normal text-center text-white capitalize transition-all ease-in rounded-lg shadow-md bg-orange-600 bg-150 hover:shadow-xs hover:-translate-y-px flex justify-center items-center" onclick="return confirm('Apakah Anda yakin ingin keluar?')">
                    <i class="ni ni-key-25 me-2"></i>
                    <span>Logout</span>
                </a>
            </li>
        </ul>
    </div>
</aside>
<!-- end sidenav -->