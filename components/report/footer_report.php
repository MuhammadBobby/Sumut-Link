<div class="flex justify-between mt-8 text-gray-700 mb-10">
    <div class="text-center">
        <p class="font-semibold">Pimpinan</p>
        <p>Bapak Pimpinan Bank Sumut</p>
        <div class="h-16"></div>
        <p class="font-bold">_________________</p>
    </div>
    <div class="text-center">
        <p class="font-semibold">Admin</p>
        <p class="capitalize"><?= $user['username'] ?></p>
        <div class="h-16"></div>
        <p class="font-bold">_________________</p>
    </div>
</div>

</div>
<script>
    const previousPage = document.referrer || '/index.php'; // Ganti dengan halaman yang diinginkan
    setTimeout(() => {
        window.location.href = previousPage; // Redirect ke halaman sebelumnya atau halaman tertentu
    }, 1000); // Tunggu sebentar setelah print
    window.print();
</script>
</body>

</html>