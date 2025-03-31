<x-app-layout>
    <div class="flex">
        <!-- Sidebar and TopNav are already included in the layout -->
        
        <div class="flex-1 p-6">
            <h2 class="text-xl font-semibold mb-4">Supplier List</h2>

            <!-- Supplier Table -->
            <table class="min-w-full table-auto bg-white shadow-md rounded">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-left">Name</th>
                        <th class="px-4 py-2 text-left">Email</th>
                        <th class="px-4 py-2 text-left">Phone</th>
                        <th class="px-4 py-2 text-left">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    {{-- @foreach ($suppliers as $supplier) --}}
                        <tr>
                            <td class="px-4 py-2">Kevin</td>
                            <td class="px-4 py-2">k@gmail.com</td>
                            <td class="px-4 py-2">0702327328</td>
                            <td class="px-4 py-2">
                                <a href="" class="text-blue-500 hover:text-blue-700">Edit</a>
                                <form action="" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="text-red-500 hover:text-red-700">Delete</button>
                                </form>
                            </td>
                        </tr>
                    {{-- @endforeach --}}
                </tbody>
            </table>
        </div>
    </div>
</x-app-layout>

