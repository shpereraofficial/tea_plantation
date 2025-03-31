<x-app-layout>
    <div class="p-6 text-gray-900 dark:text-gray-100">
        <h2 class="text-xl font-semibold mb-4">Add Supplier</h2>
        {{-- <p class="mb-6">+ new supplier.</p> --}}

        <!-- Card for the Form -->
        <div class="bg-white dark:bg-gray-800 shadow-lg sm:rounded-lg p-6">
            <!-- Supplier Registration Form -->
            <form action="" method="POST">
                @csrf

                <!-- Supplier ID (disabled) -->
                <div class="mb-4">
                    <label for="supplier_id" class="block text-sm font-medium text-gray-700">Supplier ID</label>
                    <input type="text" name="supplier_id" id="supplier_id" value="" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" disabled />
                </div>

                <!-- Supplier Name (disabled) -->
                <div class="mb-4">
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" value="" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" disabled />
                </div>

                <!-- NIC (disabled) -->
                <div class="mb-4">
                    <label for="nic" class="block text-sm font-medium text-gray-700">NIC</label>
                    <input type="text" name="nic" id="nic" value="" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" disabled />
                </div>

                <!-- Address (textarea) -->
                <div class="mb-4">
                    <label for="address" class="block text-sm font-medium text-gray-700">Address</label>
                    <textarea name="address" id="address" rows="4" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
                </div>

                <!-- Telephone (disabled) -->
                <div class="mb-4">
                    <label for="telephone" class="block text-sm font-medium text-gray-700">Telephone</label>
                    <input type="text" name="telephone" id="telephone" value="" class="mt-1 block w-full px-4 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500" disabled />
                </div>

                <!-- Register Button with Font Awesome Icon -->
                <div class="mt-6">
                    <button type="submit" class="inline-flex items-center px-4 py-2 bg-blue-600 text-white font-medium text-sm rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                        <i class="fas fa-user-plus mr-2"></i> <!-- Font Awesome Icon -->
                        Register Supplier
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
