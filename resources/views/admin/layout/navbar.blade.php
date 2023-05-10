<nav class="flex items-center px-3 shadow-md">
    <button class="p-2 focus:outline-none text-color1 focus:bg-slate-200 hover:bg-slate-200 rounded-md lg:hidden" @click="nav_open = true">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
        </svg>
    </button>
    <img src={{ asset('img/logo-main.png') }} alt="logo" class="p-3">
</nav>
