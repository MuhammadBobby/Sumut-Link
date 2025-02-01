<?php
session_start();
// connection
include '../connection.php';

// hapus session dan cookie
session_destroy();
setcookie("access_token", "", time() + 60 * 60 * 24 * 7, '/');
unset($_COOKIE["access_token"]);

header('location: ../../login.php');
