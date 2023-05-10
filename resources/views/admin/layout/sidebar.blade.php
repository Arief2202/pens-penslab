{{-- FIXME width-nya gak konsisten --}}
<nav class="absolute inset-0 transform lg:transform-none lg:opacity-100 duration-200 -translate-x-full lg:relative z-20 w-72 bg-color1 text-white min-h-full p-3" :class="{'translate-x-0 ease-in opacity-100':nav_open === true, '-translate-x-full ease-out opacity-0':nav_open === false}">
    <div class="flex justify-between items-center">
        <span class="font-semibold text-xl sm:text-2xl p-2">Admin Menu</span>
        <button class="p-2 focus:outline-none focus:bg-blue-900 hover:bg-blue-900 rounded-md lg:hidden"
            @click="nav_open = false">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor" stroke-width="2">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19l-7-7 7-7" />
            </svg>
        </button>
    </div>
    <ul class="mt-8">
        <li class="mb-1">
            <a href="/admin/list-ruangan" class="flex px-4 py-2 hover:bg-blue-900 rounded-md {{ (Route::current()->getName()==="List Ruangan") ? 'bg-blue-800' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4" />
                </svg>
                <span class="ml-3">Data Ruangan</span>
            </a>
        </li>
        <li class="mb-1">
            <a href="/admin/list-user" class="flex px-4 py-2 hover:bg-blue-900 rounded-md {{ (Route::current()->getName()==="List User") ? 'bg-blue-800' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
                </svg>
                <span class="ml-3">Data User</span>
            </a>
        </li>
        <li class="mb-1">
            <a href="/jadwal" class="flex px-4 py-2 hover:bg-blue-900 rounded-md {{ (Route::current()->getName()==="Jadwal") ? 'bg-blue-800' : '' }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                <span class="ml-3">Data Jadwal</span>
            </a>
        </li>
		<li class="mb-7">
            <a href="/ruangan" class="flex px-4 py-2 hover:bg-blue-900 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                </svg>
                <span class="ml-3">Preview Tampilan User</span>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}">
            @csrf
                        
            <a href="route('logout')" onclick="event.preventDefault();
                        this.closest('form').submit();" class="flex px-4 py-2 hover:bg-blue-900 rounded-md">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                </svg>
                <span class="ml-3">Logout</span>
            </a>
        </form>
        </li>
    </ul>
</nav>
