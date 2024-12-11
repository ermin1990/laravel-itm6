

<nav class="bg-white shadow-md">
    <div class="container mx-auto px-4 py-2 flex items-center justify-between">
        <!-- Logo -->
        <a href="/" class="text-xl font-bold text-gray-800">Projekat Ocjene</a>

        <!-- Desktop Navigation -->
        <ul class="hidden md:flex space-x-6">
            <li>
                <a href="/" class="text-gray-600 hover:text-indigo-500">Početna</a>
            </li>
            <li>
                <a href="/dodaj-ocjenu" class="text-gray-600 hover:text-indigo-500">Dodaj ocjenu</a>
            </li>
        </ul>

        <!-- Mobile Menu Button -->
        <button
            id="menu-toggle"
            class="md:hidden text-gray-600 hover:text-indigo-500 focus:outline-none"
        >
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
            </svg>
        </button>
    </div>

    <!-- Mobile Navigation -->
    <div id="mobile-menu" class="hidden md:hidden bg-gray-50 border-t border-gray-200">
        <ul class="flex flex-col space-y-2 p-4">
            <li>
                <a href="/" class="text-gray-600 hover:text-indigo-500">Početna</a>
            </li>
            <li>
                <a href="/dodaj-ocjenu" class="text-gray-600 hover:text-indigo-500">Dodaj ocjenu</a>
            </li>
        </ul>
    </div>
</nav>



<script>
    const menuToggle = document.getElementById('menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu');

    menuToggle.addEventListener('click', () => {
        mobileMenu.classList.toggle('hidden');
    });
</script>

