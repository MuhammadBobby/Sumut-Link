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
