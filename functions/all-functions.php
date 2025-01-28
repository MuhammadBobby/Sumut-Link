<?php
// formatted date
function formatDate($date)
{
    $formatted_date = date("d F Y", strtotime($date));
    $months = [
        "January" => "Januari",
        "February" => "Februari",
        "March" => "Maret",
        "April" => "April",
        "May" => "Mei",
        "June" => "Juni",
        "July" => "Juli",
        "August" => "Agustus",
        "September" => "September",
        "October" => "Oktober",
        "November" => "November",
        "December" => "Desember"
    ];

    return str_replace(array_keys($months), array_values($months), $formatted_date);
}


// Generate user id
function generateUserId($prefix = 'USR', $length = 9)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $userId = $prefix; // Awali dengan prefix
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $userId .= $characters[random_int(0, $maxIndex)];
    }

    return $userId;
}
