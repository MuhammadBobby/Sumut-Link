<?php
// Pastikan ada setidaknya satu parameter yang terisi
if (
    (!empty($tgl_mulai) && !empty($tgl_berakhir))
) {
    // Mulai query dasar
    $query = "SELECT * 
              FROM nasabah 
              WHERE 1=1"; // Mempermudah penambahan kondisi berikutnya

    // Tambahkan filter berdasarkan tanggal jika ada
    if (!empty($tgl_mulai) && !empty($tgl_berakhir)) {
        $query .= " AND tgl_bergabung BETWEEN '$tgl_mulai' AND '$tgl_berakhir'";
    }


    // Eksekusi query
    $result = $conn->query($query);

    $total_nasabah_report = $result->num_rows;
    $transaksi_report = [];
    if ($result && $result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $transaksi_report[] = $row;
        }
    }
} else {
    // Redirect jika tidak ada parameter yang valid
    header('Location: ../../index.php?page=nasabah&error=parameter_not_found');
    exit;
}
