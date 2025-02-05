<!-- Main modal -->
<div id="change-password" tabindex="-1" aria-hidden="true" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-999 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
    <div class="relative p-4 w-full max-w-md max-h-full">
        <!-- Modal content -->
        <div class="relative bg-white rounded-lg shadow-sm">
            <!-- Modal header -->
            <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t border-gray-200">
                <h3 class="text-lg font-semibold text-gray-900">
                    Perbarui Password
                </h3>
                <button type="button" class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center" data-modal-toggle="change-password">
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                    <span class="sr-only">Close modal</span>
                </button>
            </div>
            <!-- Modal body -->
            <form class="p-4 md:p-5" action="functions/auth/update-password.php" method="POST">
                <input type="hidden" name="user_id" id="user_id" value="<?= $user['user_id'] ?>">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <!-- password lama -->
                    <div class="col-span-2">
                        <label for="old_pass" class="block mb-2 text-sm font-medium text-gray-900">Password Lama</label>
                        <input type="text" name="old_pass" id="old_pass" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Masukan Password Lama" minlength="8" required="">
                    </div>
                    <!-- password -->
                    <div class="col-span-2 relative">
                        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password Baru</label>
                        <input type="password" name="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" minlength="8" placeholder="********" required="">
                    </div>
                    <!-- verif password -->
                    <div class="col-span-2 relative">
                        <label for="password_verif" class="block mb-2 text-sm font-medium text-gray-900">Verifikasi Password</label>
                        <input type="password" name="password_verif" id="password_verif" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" minlength="8" placeholder="********" required="">
                    </div>
                </div>
                <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center" onclick="return confirm('Apakah anda yakin ingin merubah password?')">
                    Simpan Perubahan
                </button>
            </form>
        </div>
    </div>
</div>