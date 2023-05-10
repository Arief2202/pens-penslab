@extends('user.layout.main')

@section('container')

@if(Auth::check() && (Auth::user()->role == 1))
@elseif(Auth::check() && (Auth::user()->role == 2))
    <div class="flex justify-end mt-5">
      <a href="/ruangan" class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900">Edit</a>
    </div>
@else
@endif
<details class="border shadow rounded group mb-5" open>
  <summary class="list-none flex flex-wrap items-center cursor-pointer">
    <h3 class="flex flex-1 p-4 font-semibold">Jadwal hari Senin</h3>
    <div class="flex w-10 items-center justify center">
      <div class="border-8 border-transparent border-l-gray-600 ml-2 group-open:rotate-90 transition-transform origin-left"></div>
    </div>
  </summary>
  <div class="p-4 border-t">
    <div class="overflow-x-auto">
      <table class="w-full text-sm text-left text-gray-500">
        <thead class="text-xs text-gray-700 uppercase bg-gray-100">
          <tr>
            <th class="px-2 py-3">Jam</th>
            <th class="px-2 py-3">Matkul</th>
            <th class="px-2 py-3">Dosen</th>
            <th class="px-2 py-3">Kelas</th>
          </tr>
        </thead>
        <tbody>
          <tr class="border-b odd:bg-white even:bg-gray-50">
            <td class="px-2 py-3">08:00</td>
            <td class="px-2 py-3">Praktikum Konsep Jaringan</td>
            <td class="px-2 py-3">Fitri Setyorini</td>
            <td class="px-2 py-3">2 ITB D3</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</details>

<details class="bg-slate-100 shadow rounded group mb-5" open>
  <summary class="list-none flex flex-wrap items-center cursor-pointer">
    <h3 class="flex flex-1 p-4 font-semibold">Jadwal hari Senin</h3>
    <div class="flex w-10 items-center justify center">
      <div class="border-8 border-transparent border-l-gray-600 ml-2 group-open:rotate-90 transition-transform origin-left"></div>
    </div>
  </summary>
  <div class="p-4">
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sit consequatur iure vel ullam illo inventore ab esse, quo voluptate aut!</p>
  </div>
</details>
@if(Auth::check() && (Auth::user()->role == 1))
    @elseif(Auth::check() && (Auth::user()->role == 2))
      <div class="flex justify-end mt-5">
        <a href="/ruangan" class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900">Edit</a>
      </div>
    @else
    @endif

  


{{-- <div class="glide">
  <div class="glide__track" data-glide-el="track">
    <ul class="glide__slides">
      <li class="glide__slide">
        <img src="https://source.unsplash.com/1200x900?technology" alt="">
      </li>
      <li class="glide__slide">
        <img src="https://source.unsplash.com/1200x900?gadget" alt="">
      </li>
      <li class="glide__slide">
        <img src="https://source.unsplash.com/1200x900?future" alt="">
      </li>
    </ul>
  </div>
  <div class="glide__arrows" data-glide-el="controls">
    <button class="glide__arrow glide__arrow--left" data-glide-dir="<">prev</button>
    <button class="glide__arrow glide__arrow--right" data-glide-dir=">">next</button>
  </div>
</div> --}}
@endsection