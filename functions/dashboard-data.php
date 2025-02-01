<?php

// jumlah transaksi hari ini
function getJumlahTransaksi()
{
    // connection
    include 'connection.php';

    $query = "SELECT COUNT(*) as jumlah_transaksi FROM transaksi WHERE DATE(tgl_transaksi) = CURDATE()";
    $result = $conn->query($query);
    $row = $result->fetch_assoc();
    return $row['jumlah_transaksi'] ?? 0;
}


// total transaksi debit (1 hari)
function getTotalTransaksiDebit()
{
    // connection
    include 'connection.php';

    $query_debit = "SELECT COUNT(jumlah) as jumlah_debit FROM transaksi WHERE jenis_transaksi = 'debit' AND DATE(tgl_transaksi) = CURDATE()";
    $result_debit = $conn->query($query_debit);
    $row_debit = $result_debit->fetch_assoc();
    return $row_debit['jumlah_debit'] ?? 0;
}


// total transaksi kredit (1 hari)
function getTotalTransaksiKredit()
{
    // connection
    include 'connection.php';

    $query_kredit = "SELECT COUNT(jumlah) as jumlah_kredit FROM transaksi WHERE jenis_transaksi = 'kredit' AND DATE(tgl_transaksi) = CURDATE()";
    $result_kredit = $conn->query($query_kredit);
    $row_kredit = $result_kredit->fetch_assoc();
    return $row_kredit['jumlah_kredit'] ?? 0;
}
