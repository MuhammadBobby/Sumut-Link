<?php
// Pastikan ada setidaknya satu parameter yang terisi
if (
    (!empty($tgl_mulai) && !empty($tgl_berakhir)) ||
    !empty($nasabah_id) ||
    !empty($jenis_transaksi)
) {
    // Mulai query dasar
    $query = "SELECT transaksi.*, nasabah.* 
              FROM transaksi 
              JOIN nasabah ON transaksi.nasabah_id = nasabah.nik_ktp 
              WHERE 1=1"; // Mempermudah penambahan kondisi berikutnya

    // Tambahkan filter berdasarkan tanggal jika ada
    if (!empty($tgl_mulai) && !empty($tgl_berakhir)) {
        $query .= " AND transaksi.tgl_transaksi BETWEEN '$tgl_mulai' AND '$tgl_berakhir'";
    }

    // Tambahkan filter berdasarkan nasabah_id jika ada
    if (!empty($nasabah_id)) {
        $query .= " AND transaksi.nasabah_id = '$nasabah_id'";
    }

    // Tambahkan filter berdasarkan jenis_transaksi jika ada
    if (!empty($jenis_transaksi)) {
        $query .= " AND transaksi.jenis_transaksi = '$jenis_transaksi'";
    }

    // Eksekusi query
    $result = $conn->query($query);

    $transaksi_report = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $transaksi_report[] = $row;
        }
    }
} else {
    // Redirect jika tidak ada parameter yang valid
    header('Location: ../../index.php?page=transaksi&error=parameter_not_found');
    exit;
}
