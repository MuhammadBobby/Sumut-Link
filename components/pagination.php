<!-- pagination -->
<nav aria-label="<?= $page ?> Navigation">
    <ul class="inline-flex -space-x-px text-sm">
        <!-- Tombol Previous -->
        <li>
            <a
                href="<?php echo $number > 1 ? '?page=' . $page . '&number=' . ($number - 1) : '#'; ?>"
                class="flex items-center justify-center px-3 h-8 ms-0 leading-tight text-gray-500 bg-white border border-e-0 border-gray-300 rounded-s-lg hover:bg-gray-100 hover:text-gray-700  <?php echo $number == 1 ? 'cursor-not-allowed opacity-50' : ''; ?>">
                Previous
            </a>
        </li>

        <!-- Nomor Halaman -->
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <li>
                <a
                    href="?page=<?= $page; ?>&number=<?php echo $i; ?>"
                    class="flex items-center justify-center px-3 h-8 leading-tight <?php echo $i == $number ? 'text-blue-600 border border-gray-300 bg-blue-50 hover:bg-blue-100 hover:text-blue-700' : 'text-gray-500 bg-white border border-gray-300 hover:bg-gray-100 hover:text-gray-700 '; ?>">
                    <?php echo $i; ?>
                </a>
            </li>
        <?php endfor; ?>

        <!-- Tombol Next -->
        <li>
            <a
                href="<?php echo $number < $totalPages ? '?page=' . $page . '&number=' . ($number + 1) : '#'; ?>"
                class="flex items-center justify-center px-3 h-8 leading-tight text-gray-500 bg-white border border-gray-300 rounded-e-lg hover:bg-gray-100 hover:text-gray-700  <?php echo $number == $totalPages ? 'cursor-not-allowed opacity-50' : ''; ?>">
                Next
            </a>
        </li>
    </ul>
</nav>