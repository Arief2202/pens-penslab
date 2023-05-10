@extends('user.layout.main')

@section('container')
<div class="h-[70px] mx-auto mb-5 sm:mb-10 rounded-tr-2xl rounded-bl-2xl bg-color1 text-white flex items-center px-4">
  <a href="/ruangan" class="rounded-full p-1 hover:bg-blue-900">
    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
      <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
    </svg>
  </a>
  <span class="font-medium mx-auto text-sm sm:text-xl">Lab. {{$ruangan->nama_ruangan }}</span>
</div>
{{-- <a href="/ruangan" type="button" name="submit" class="px-3 py-2 bg-color1 rounded-md text-white hover:bg-blue-900 cursor-pointer">Kembali</a> --}}
<div class="lg:flex lg:flex-row-reverse">
  <div class="lg:w-3/4 lg:ml-12">
    {{-- @if ($ruangan->gambar_ruangan )
      <img src="http://{{$_SERVER['HTTP_HOST']}}/storage/{{$ruangan->gambar_ruangan}}" class="w-full aspect-video object-cover rounded-xl">
    @else
      <div class="bg-cover w-full aspect-[4/3] bg-[url('/img/1.jpg')]"></div>
    @endif --}}

    {{-- carousel start --}}
    <div class="w-full aspect-video rounded-xl overflow-hidden">
      <div class="glide">
        <div class="glide__track" data-glide-el="track">
          <ul class="glide__slides" id="tetap">
            @foreach ($gambar as $gambars)
            <li class="glide__slide">
              {{-- <img src="https://source.unsplash.com/900x600?technology" alt="" class="w-full object-cover"> --}}
                  <img src="http://{{$_SERVER['HTTP_HOST']}}/storage/{{ $gambars->gambar }}" class="w-full object-cover" title="Carousel" alt=""> <br>
                </li>
                @endforeach
              </ul>
        </div>
        <div class="glide__arrows" data-glide-el="controls">
          <button class="glide__arrow glide__arrow--left top-[43%]" data-glide-dir="<">prev</button>
          <button class="glide__arrow glide__arrow--right top-[43%]" data-glide-dir=">">next</button>
        </div>
      </div>
    </div>
    {{-- carousel end --}}

    {{-- jadwal start --}}
    <div class="text-lg text-center font-semibold mt-20 mb-3">Jadwal Pemakaian Lab</div>
    @if(Auth::user()->role != 0)
      <div class="flex justify-end mt-5">
        <a href="/ruangan/jadwal" class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900">Edit</a>
      </div></br>
    @else
    @endif
    <details class="border shadow rounded group mb-0">
      <summary class="list-none flex flex-wrap items-center cursor-pointer">
        <h3 class="flex flex-1 p-4 font-semibold">Senin</h3>
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
                <td class="px-2 py-3">Rekayasa Perangkat Lunak</td>
                <td class="px-2 py-3">Andhik Ampuh Yunanto</td>
                <td class="px-2 py-3">2 ITA D3</td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3">10:30</td>
                <td class="px-2 py-3">Praktikum Konsep Pemrograman</td>
                <td class="px-2 py-3">Tita Karlita</td>
                <td class="px-2 py-3"></td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3">08.00</td>
                <td class="px-2 py-3">Data Warehouse</td>
                <td class="px-2 py-3">Ahmad Syauqi Ahsan</td>
                <td class="px-2 py-3">3 ITA D4</td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3">08.00</td>
                <td class="px-2 py-3">Praktikum Pemograman Lanjut</td>
                <td class="px-2 py-3">Yanuar Risah Prayogi</td>
                <td class="px-2 py-3">3 ITB D3</td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3">08:00</td>
                <td class="px-2 py-3">Workshop Produksi Perangkat Lunak
                </td>
                <td class="px-2 py-3">Umi Sa'adah</td>
                <td class="px-2 py-3">2 ITB D3</td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3">13:50</td>
                <td class="px-2 py-3">Workshop Administrasi Basis data</td>
                <td class="px-2 py-3">Rengga Asmara</td>
                <td class="px-2 py-3">2 ITA D3</td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3">18:30</td>
                <td class="px-2 py-3">Data Warehouse</td>
                <td class="px-2 py-3">Ahmad Syauqi Ahsan</td>
                <td class="px-2 py-3">3 ITB D4</td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3"></td>
                <td class="px-2 py-3"></td>
                <td class="px-2 py-3"></td>
                <td class="px-2 py-3"></td>
              </tr>
              <tr class="border-b odd:bg-white even:bg-gray-50">
                <td class="px-2 py-3"></td>
                <td class="px-2 py-3"></td>
                <td class="px-2 py-3"></td>
                <td class="px-2 py-3"></td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </details>
    <details class="border shadow rounded group mb-0">
      <summary class="list-none flex flex-wrap items-center cursor-pointer">
        <h3 class="flex flex-1 p-4 font-semibold">Selasa</h3>
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
    <details class="border shadow rounded group mb-0">
      <summary class="list-none flex flex-wrap items-center cursor-pointer">
        <h3 class="flex flex-1 p-4 font-semibold">Rabu</h3>
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
    <details class="border shadow rounded group mb-0">
      <summary class="list-none flex flex-wrap items-center cursor-pointer">
        <h3 class="flex flex-1 p-4 font-semibold">Kamis</h3>
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
    <details class="border shadow rounded group mb-0">
      <summary class="list-none flex flex-wrap items-center cursor-pointer">
        <h3 class="flex flex-1 p-4 font-semibold">Jum'at</h3>
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
    {{-- jadwal end --}}

    {{-- denah start --}}
    <div class="text-lg text-center font-semibold mt-20 mb-3">Denah Lokasi</div>
    {{-- TODO denah pop up --}}
    <div class="border rounded-xl p-4 max-w-2xl"> 
      @if ($ruangan->denah )
      <a href="http://{{$_SERVER['HTTP_HOST']}}/storage/{{$ruangan->denah}}">
        <img src="http://{{$_SERVER['HTTP_HOST']}}/storage/{{$ruangan->denah}}">
      </a>
      @else
      {{-- Maaf denah belum tersedia 🙃 --}}
      <div class="bg-cover w-full aspect-[4/3] bg-[url('/img/denah-c303.png')]"></div>
      @endif
    </div>
    {{-- denah end --}}
  </div>
  
  <div class="lg:w-1/4">
    {{-- informasi ruangan start --}}
    <div class="text-lg font-semibold mt-6 mb-3 lg:mt-0">Informasi Ruangan</div>
    <div class="py-5 px-10 flex flex-col rounded-lg shadow-md border mx-4 my-5">
      <span class="mx-auto mb-1 font-semibold">Fasilitas</span>
      <ul class="list-disc"> 
        @foreach (explode(",", $ruangan->fasilitas) as $item)
        <li>{{$item}}</li>
        @endforeach
      </ul>
    </div>
    <div class="py-5 px-5 flex flex-col rounded-lg shadow-md border mx-4 my-5">
      <span class="mx-auto mb-1 font-semibold">Kepala Lab.</span>
      <span class="mx-auto">{{$ruangan->kepala_lab}}</span>
    </div>
    <div class="py-5 px-5 flex flex-col rounded-lg shadow-md border mx-4 my-5">
      <span class="mx-auto mb-1 font-semibold">Lokasi</span>
      <span class="mx-auto">Gedung <span class="uppercase">{{$ruangan->gedung}}</span> lantai {{$ruangan->lantai}}</span>
    </div>
    {{-- informasi ruangan end --}}
    
    {{-- jadwal versi gambar--}}
    {{-- <div class="flex">
      @if ($ruangan->jadwal )
      <a href="http://{{$_SERVER['HTTP_HOST']}}/storage/{{$ruangan->jadwal}}" data-lightbox="whatever">
        <img src="http://{{$_SERVER['HTTP_HOST']}}/storage/{{$ruangan->jadwal}}">
      </a>
      @else
      Maaf jadwal belum tersedia 🙃
      @endif
    </div> --}}
  </div>

</div>
@endsection
