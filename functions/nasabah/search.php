<?php
// connection
require '../connection.php';

$search = isset($_POST['search']) ? $_POST['search'] : '';

$query = "SELECT * FROM nasabah WHERE nama_lengkap LIKE ? OR nik_ktp LIKE ? OR no_CIF LIKE ?";
$stmt = $conn->prepare($query);
$searchTerm = "%$search%";
$stmt->bind_param("sss", $searchTerm, $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows > 0) {
    while ($nas = $result->fetch_assoc()) {
        echo "
        <tr>
            <td class='p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent'>
                <div class='flex px-2 py-1'>
                    <div>
                        <div class='inline-flex items-center justify-center mr-4 text-sm text-white transition-all duration-200 ease-in-out h-9 w-9 rounded-xl' style='background-color: " . sprintf("#%06X", mt_rand(0, 0xFFFFFF)) . ";'>" . strtoupper($nas['nama_lengkap'][0]) . "</div>
                    </div>
                    <div class='flex flex-col justify-center'>
                        <h6 class='mb-0 text-base leading-normal font-semibold capitalize'>" . $nas['nama_lengkap'] . "</h6>
                    </div>
                </div>
            </td>
            <td class='p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent'>
                <span class='text-xs font-semibold leading-tight text-slate-400'>" . $nas['nik_ktp'] . "</span>
            </td>
            <td class='p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent'>
                <span class='text-xs font-semibold leading-tight text-slate-400'>" . $nas['no_CIF'] . "</span>
            </td>
            <td class='p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent'>
                <span class='text-xs font-semibold leading-tight text-slate-400'>" . $nas['alamat'] . "</span>
            </td>
            <td class='p-2 text-sm leading-normal text-center align-middle bg-transparent border-b whitespace-nowrap shadow-transparent'>
                <span class='text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm uppercase'>" . $nas['jenis_kelamin'] . "</span>
            </td>
            <td class='p-2 align-middle text-center bg-transparent border-b whitespace-nowrap shadow-transparent'>
                <a href='?page=detail_nasabah&id=" . $nas['nik_ktp'] . "' class='text-xs font-semibold leading-tight text-orange-400 mx-2'> Detail </a>
                <a href='?page=edit_nasabah&id=" . $nas['nik_ktp'] . "' class='text-xs font-semibold leading-tight text-slate-400 mx-2'> Edit </a>
                <a href='./functions/nasabah/delete.php?id=" . $nas['nik_ktp'] . "' class='text-xs font-semibold leading-tight text-red-400 mx-2' onclick='return confirm(\"Apakah Anda Yakin Ingin Menghapus data Ini ?\");'>Hapus</a>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='6' class='text-center p-4 text-gray-500'>Tidak ada data ditemukan</td></tr>";
}
