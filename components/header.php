<?php
// get Title
if (isset($_GET['page']) && $_GET['page'] === 'dashboard') {
    $title = 'Solusi Aplikasi Pencatatan Transaksi by Bank Sumut';
} else {
    // Default title untuk halaman lainnya
    $title = isset($_GET['page']) ? htmlspecialchars(ucfirst($_GET['page'])) : 'Solusi Aplikasi Pencatatan Transaksi by Bank Sumut';
}


?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sumut Link - <?= $title ?></title>

    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <!-- Nucleo Icons -->
    <link href="./assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Popper -->
    <script src="https://unpkg.com/@popperjs/core@2"></script>
    <!-- Main Styling -->
    <link href="./assets/css/argon-dashboard-tailwind.css" rel="stylesheet" />
    <!-- tailwind -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="m-0 font-sans text-base antialiased font-normal leading-default bg-gray-50 text-slate-500">
    <div class="absolute w-full bg-blue-800 min-h-75"></div>

    <?php include 'sidenav.php' ?>

    <main class="relative h-full max-h-screen transition-all duration-200 ease-in-out xl:ml-68 rounded-xl">

        <?php include 'navbar.php' ?>

        <!-- start card -->
        <div class="w-full px-6 py-6 mx-auto">

            <!-- end card to FOOTER -->