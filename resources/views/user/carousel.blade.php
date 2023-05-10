@extends('user.layout.main')

@section('container')
<div @click.away="open = false" class="relative" x-data="{ open: false }">
    <button @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 text-left bg-transparent rounded-lg md:w-auto md:inline md:mt-0 md:ml-4 hover:bg-gray-200 focus:bg-gray-200 focus:outline-none focus:shadow-outline">
      <svg xmlns="http://www.w3.org/2000/svg" class="inline h-6 w-6 mr-1" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
      </svg>
      <span class="mr-auto">{{ Auth::user()->nama }}</span>
      <svg fill="currentColor" viewBox="0 0 20 20" :class="{'rotate-180': open, 'rotate-0': !open}" class="inline w-4 h-4 mt-1 ml-1 transition-transform duration-200 transform md:-mt-1"><path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
    </button>
    <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute  w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
      <div class="px-2 py-2 bg-white rounded-md shadow">
        @if (Auth::user()->role == '1')
          <a class="block px-4 py-2 text-base text-dark rounded-md hover:bg-gray-200" href="/admin/list-ruangan">
            Ke Halaman Admin
          </a>
        @endif
        <a class="block px-4" href="#">
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();" class="text-base text-dark px-4 py-2 flex rounded-md hover:bg-gray-200">
              Logout
            </a>
          </form>
        </a>
        <a class="block px-4" href="#">
          
            @csrf
            <a class="block px-4 py-2 text-base text-dark rounded-md hover:bg-gray-200" href="/profile/{{Auth::user()->id}}">
              Profil
            </a>
          
        </a>
      </div>
    </div>
</div>



      
        
@endsection