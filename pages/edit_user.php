<?php
// connection
require 'functions/connection.php';

// get id
$id = htmlspecialchars($_GET['id']);

// check id
if (empty($id)) {
    header('Location: ../index.php?page=users&error=id_not_found');
    exit;
}

// get data
include 'functions/users/getById.php';
?>

<div class="flex flex-wrap -mx-3">
    <div class="flex-none w-full max-w-full px-3">
        <div class="relative flex flex-col min-w-0 mb-6 break-words bg-white border-0 border-transparent border-solid shadow-xl rounded-2xl bg-clip-border min-h-96">
            <div class="px-6 pt-6 border-b-0 border-b-solid rounded-t-2xl border-b-transparent flex justify-between items-center mb-0">
                <h6 class="text-lg font-semibold text-orange-500">Edit <span class="text-blue-800">User</span></h6>
            </div>

            <!-- form -->
            <form class="p-6" action="functions/users/update.php" method="POST">
                <input type="hidden" name="user_id" id="user_id" value="<?= $user['user_id'] ?>">
                <div class="grid gap-4 mb-4 grid-cols-2">
                    <!-- username -->
                    <div class="col-span-2">
                        <label for="username" class="block mb-2 text-sm font-medium text-gray-900">Username</label>
                        <input type="text" name="username" id="username" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5" placeholder="Jhon Doe" required="" value="<?= $user['username'] ?>">
                    </div>
                    <!-- jabatan -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="jabatan" class="block mb-2 text-sm font-medium text-gray-900">Jabatan</label>
                        <select id="jabatan" name="jabatan" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option value="pimpinan" <?= $user['jabatan'] == 'pimpinan' ? 'selected' : '' ?>>Pimpinan</option>
                            <option value="admin" <?= $user['jabatan'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="teller" <?= $user['jabatan'] == 'teller' ? 'selected' : '' ?>>Teller</option>
                            <option value="customer_service" <?= $user['jabatan'] == 'customer_service' ? 'selected' : '' ?>>Customer Service</option>
                        </select>
                    </div>
                    <!-- role -->
                    <div class="col-span-2 sm:col-span-1">
                        <label for="role" class="block mb-2 text-sm font-medium text-gray-900">Role</label>
                        <select id="role" name="role" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-primary-500 focus:border-primary-500 block w-full p-2.5">
                            <option value="admin" <?= $user['jabatan'] == 'admin' ? 'selected' : '' ?>>Admin</option>
                            <option value="teller" <?= $user['jabatan'] == 'teller' ? 'selected' : '' ?>>Teller</option>
                            <option value="cs" <?= $user['jabatan'] == 'cs' ? 'selected' : '' ?>>CS</option>
                        </select>
                    </div>
                </div>
                <div class="flex justify-end gap-3">
                    <a href="../index.php?page=users" class="text-red-700 hover:text-white border border-red-700 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center me-2 mb-2 h-fit">Cancel</a>

                    <button type="submit" class="text-white inline-flex items-center bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center h-fit">
                        <svg class="me-1 -ms-1 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd" d="M10 5a1 1 0 011 1v3h3a1 1 0 110 2h-3v3a1 1 0 11-2 0v-3H6a1 1 0 110-2h3V6a1 1 0 011-1z" clip-rule="evenodd"></path>
                        </svg>
                        Update
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>