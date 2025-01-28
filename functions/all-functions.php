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


// header capitalize
function formatPageName($page)
{
    // Hapus underscore dan ubah menjadi spasi
    $page = str_replace('_', ' ', $page);
    // Ubah setiap kata menjadi huruf kapital
    return ucwords(strtolower($page));
}


// Generate user id
function generateId($prefix = 'USR', $length = 9)
{
    $characters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    $userId = $prefix; // Awali dengan prefix
    $maxIndex = strlen($characters) - 1;

    for ($i = 0; $i < $length; $i++) {
        $userId .= $characters[random_int(0, $maxIndex)];
    }

    return $userId;
}

// generate no CIF
function generateCIF()
{
    // Generate 6 digit angka acak
    return str_pad(random_int(0, 999999), 6, '0', STR_PAD_LEFT);
}
