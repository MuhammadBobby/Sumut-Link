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
    <!-- flowbite -->
    <link href="https://cdn.jsdelivr.net/npm/flowbite@3.0.0/dist/flowbite.min.css" rel="stylesheet" />
</head>


<!-- start body for dashboard pages -->
<?php include 'start-body.php' ?>