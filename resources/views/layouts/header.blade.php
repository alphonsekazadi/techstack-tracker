<header class="bg-blue-400 shadow-sm border-b">
    <div class="flex items-center justify-between px-6 py-4">
        <div class="flex items-center space-x-4">
            <button id="toggleSidebar" class="lg:hidden text-gray-900 hover:text-blue-400">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            <h1 class="text-xl font-semibold text-gray-900">@yield('page-title', 'Dashboard')</h1>
        </div>
        <button class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-blue-500 transition">
            <span class="hidden sm:inline">Add Tech</span>
            <span class="sm:hidden">+</span>
        </button>
    </div>
</header>
