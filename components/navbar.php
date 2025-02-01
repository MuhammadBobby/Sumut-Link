<?php
$active_page = isset($_GET['page']) ? formatPageName(htmlspecialchars($_GET['page'])) : 'Dashboard';
?>

<!-- Navbar -->
<nav class="relative flex flex-wrap items-center justify-between px-0 py-2 mx-6 transition-all ease-in shadow-none duration-250 rounded-2xl lg:flex-nowrap lg:justify-start" navbar-main navbar-scroll="false">
    <div class="flex items-center justify-between w-full px-4 py-1 mx-auto flex-wrap-inherit">
        <nav>
            <!-- breadcrumb -->
            <ol class="flex flex-wrap pt-1 mr-12 bg-transparent rounded-lg sm:mr-16">
                <li class="text-sm leading-normal">
                    <a class="text-white opacity-50" href="javascript:;">Sumut Link</a>
                </li>
                <li class="text-sm pl-2 capitalize leading-normal text-white before:float-left before:pr-2 before:text-white before:content-['/']" aria-current="page"><?= $active_page ?></li>
            </ol>
            <h6 class="mb-0 font-bold text-white capitalize"><?= $active_page ?> Page</h6>
        </nav>

        <!-- <div class="relative flex flex-wrap items-stretch w-full transition-all rounded-lg ease">
            <span class="text-sm ease leading-5.6 absolute z-50 -ml-px flex h-full items-center whitespace-nowrap rounded-lg rounded-tr-none rounded-br-none border border-r-0 border-transparent bg-transparent py-2 px-2.5 text-center font-normal text-slate-500 transition-all">
                <i class="fas fa-search"></i>
            </span>
            <input type="text" class="pl-9 text-sm focus:shadow-primary-outline ease w-1/100 leading-5.6 relative -ml-px block min-w-0 flex-auto rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding py-2 pr-3 text-gray-700 transition-all placeholder:text-gray-500 focus:border-blue-500 focus:outline-none focus:transition-shadow" placeholder="Type here..." />
        </div> -->

        <!-- Triger sidebar in small screens -->
        <ul class="flex items-center justify-end pl-0 mb-0 list-none">
            <li class="relative">
                <button id="mega-menu-dropdown-button" data-dropdown-toggle="mega-menu-dropdown" class="flex items-center justify-between w-full py-2 px-3 font-medium text-white md:w-auto hover:bg-transparent md:hover:text-orange-400 md:p-0">
                    <i class="fas fa-user-circle scale-150"></i>
                </button>
                <div id="mega-menu-dropdown" class="absolute z-10 hidden w-auto min-w-52 text-sm bg-white border border-gray-100 rounded-lg shadow-md">
                    <div class="p-4 pb-0 text-gray-900 md:pb-4 w-full">
                        <!-- Username from getMe -->
                        <h1 class="text-slate-800 font-semibold tracking-tight max-w-20 truncate"><?= formatPageName($user['username']) ?></h1>

                        <hr class="h-0.5 my-3 bg-transparent bg-gradient-to-r from-transparent via-black to-transparent">

                        <!-- Jabatan -->
                        <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:text-blue-400 border border-blue-400 capitalize"><?= $user['jabatan'] ?></span>

                        <div>
                            <p class="mt-2">Role : <span class="bg-pink-100 text-pink-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-full"><?= $user['role'] ?></span></p>
                        </div>

                        <!-- Perbarui Password -->
                        <button type="button" data-modal-target="change-password" data-modal-toggle="change-password" class="block mt-8 w-full h-fit text-orange-400 hover:text-white border border-orange-400 hover:bg-orange-500 focus:ring-4 focus:outline-none focus:ring-orange-300 font-medium rounded-lg text-xs px-2 py-1 text-center me-2 mb-2">Perbarui Password</button>

                        <p class="text-[10px] text-slate-400 text-center"> Bergabung Sejak <?= formatDate($user['created_at']) ?></p>
                    </div>
                </div>
            </li>

            <li class="flex items-center pl-4 xl:hidden">
                <a href="javascript:;" class="block p-0 text-sm text-white transition-all ease-nav-brand" sidenav-trigger>
                    <div class="w-4.5 overflow-hidden">
                        <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                        <i class="ease mb-0.75 relative block h-0.5 rounded-sm bg-white transition-all"></i>
                        <i class="ease relative block h-0.5 rounded-sm bg-white transition-all"></i>
                    </div>
                </a>
            </li>
        </ul>
    </div>

    <!-- MODAL -->
    <?php include 'components/modals/modal-change-password.php'; ?>
</nav>
<!-- end Navbar -->

<!-- JS Custom -->
<script src="./assets/js/custom/change-password.js"></script>