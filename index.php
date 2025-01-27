<?php
// Default page
$page = $_GET['page'] ?? 'dashboard';

// Validate the page
$allowed_pages = ['dashboard', 'test'];
if (!in_array($page, $allowed_pages)) {
    $page = 'dashboard'; // Fallback to default
}

// Include header
include 'components/header.php';

// Include the requested page
include "pages/{$page}.php";

// Include footer
include 'components/footer.php';
