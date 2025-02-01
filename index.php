<?php
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

// Default page
$page = isset($_GET['page']) ? $_GET['page'] : 'dashboard';

// Validate the page
$allowed_pages = ['dashboard', 'users', 'edit_user',  'nasabah', 'edit_nasabah', 'detail_nasabah', 'transaksi', 'edit_transaksi'];
if (!in_array($page, $allowed_pages)) {
    $page = 'dashboard'; // Fallback to default
}

// Include header
include 'components/header.php';

// Include the requested page
include "pages/{$page}.php";

// Include footer
include 'components/footer.php';
