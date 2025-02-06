<!-- ALERT -->
<?php if (isset($_GET['add']) && $_GET['add'] === "true") : ?>
    <script>
        swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil ditambahkan!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php elseif (isset($_GET['add']) && $_GET['add'] === "false") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data gagal ditambahkan! Silahkan coba lagi.',
        })
    </script>
<?php elseif (isset($_GET['update']) && $_GET['update'] === "true") : ?>
    <script>
        swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil diupdate!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php elseif (isset($_GET['update']) && $_GET['update'] === "false") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data gagal diupdate! Silahkan coba lagi.',
        })
    </script>
<?php elseif (isset($_GET['delete']) && $_GET['delete'] === "true") : ?>
    <script>
        swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Data berhasil dihapus!',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php elseif (isset($_GET['delete']) && $_GET['delete'] === "false") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Data gagal dihapus! Silahkan coba lagi.',
        })
    </script>


    <!-- ERROR -->
<?php elseif (isset($_GET['error']) && $_GET['error'] === "password_not_match") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password yang dimasukkan tidak sama.',
            footer: 'Silahkan coba lagi.'
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "id_not_found") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'ID tidak ada atau tidak ditemukan.',
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "id_used") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'ID masih terdata di transaksi.',
            footer: 'Silahkan coba lagi setelah menghapus transaksi.'
        })
    </script>


    <!-- REPORT ERROR -->
<?php elseif (isset($_GET['error']) && $_GET['error'] === "parameter_not_found") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Silahkan masukkan parameter terlebih dahulu.',
        })
    </script>


    <!-- AUTH ERROR -->
<?php elseif (isset($_GET['error']) && $_GET['error'] === "empty") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Mohon masukkan data terlebih dahulu.',
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "incorect_username") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'username tidak ditemukan!',
            footer: 'Silahkan coba lagi dengan username yang benar.'
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "nik_ktp_used") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'NIK KTP sudah terdaftar!',
            footer: 'Silahkan gunakan NIK KTP lain.'
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "incorect_password") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password salah! Silahkan coba lagi.',
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "old_pass_not_match") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password lama tidak sesuai.',
            footer: 'Silahkan coba lagi.'
        })
    </script>
<?php elseif (isset($_GET['error']) && $_GET['error'] === "password_update_failed") : ?>
    <script>
        swal.fire({
            icon: 'error',
            title: 'Oops...',
            text: 'Password gagal diupdate. Silahkan coba lagi.',
        })
    </script>
<?php elseif (isset($_GET['success']) && $_GET['success'] === "password_updated") : ?>
    <script>
        swal.fire({
            icon: 'success',
            title: 'Berhasil',
            text: 'Password berhasil diubah! Mohon login dengan password baru.',
            showConfirmButton: false,
            timer: 2500
        })
    </script>
<?php endif; ?>