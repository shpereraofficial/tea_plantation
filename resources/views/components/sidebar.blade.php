<div class="h-screen w-64 bg-gray-900 text-white p-4">
    <h2 class="text-lg font-semibold mb-4">Dashboard</h2>
    <ul>
        <!-- Supplier Management with Submenu -->
        <li class="mb-2">
            <button onclick="toggleDropdown('supplier-menu')" class="flex items-center justify-between w-full p-2 rounded hover:bg-gray-700">
                <span><i class="fas fa-box mr-2"></i> Supplier Management</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <ul id="supplier-menu" class="hidden pl-4 mt-2 space-y-1">
                <li>
                    <a href="{{ route('supplier.list') }}" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-list mr-2"></i> Supplier List
                    </a>
                </li>
                <li>
                    <a href="{{ route('supplier.add') }}" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-plus-circle mr-2"></i> Add Supplier
                    </a>
                </li>
            </ul>
        </li>

          <!-- User Management with Submenu -->
          <li class="mb-2">
            <button onclick="toggleDropdown('user-menu')" class="flex items-center justify-between w-full p-2 rounded hover:bg-gray-700">
                <span><i class="fas fa-users mr-2"></i> User Management</span>
                <i class="fas fa-chevron-down"></i>
            </button>
            <ul id="user-menu" class="hidden pl-4 mt-2 space-y-1">
                <li>
                    <a href="" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-user-plus mr-2"></i> Add User
                    </a>
                </li>
                <li>
                    <a href="" class="flex items-center p-2 rounded hover:bg-gray-700">
                        <i class="fas fa-users mr-2"></i> View Users
                    </a>
                </li>
            </ul>
        </li>

        <!-- Other Menu Items -->
        <li class="mb-2">
            <a href="{{ route('supplier.index') }}" class="flex items-center p-2 rounded hover:bg-gray-700">
                <i class="fas fa-file-invoice-dollar mr-2"></i> Billing
            </a>
        </li>
    
        <li class="mb-2">
            <a href="{{ route('supplier.index') }}" class="flex items-center p-2 rounded hover:bg-gray-700">
                <i class="fas fa-cog mr-2"></i> Settings
            </a>
        </li>
    </ul>
</div>

<script>
    function toggleDropdown(id) {
        let menu = document.getElementById(id);
        menu.classList.toggle('hidden');
    }
</script>
