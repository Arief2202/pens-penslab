@extends('user.layout.main')

@section('container')
  <form action="/ruangan" method="GET" class="mb-7">
    @csrf
    {{-- <div class="flex"> --}}
      <label for="gedung" class="inline-block mb-3 mr-3">
        <span class="block font-semibold mb-1 text-gray-900">Gedung</span>
        <select name="gedung" id="gedungDropDown" class=" pl-4 py-2 border shadow rounded-xl  block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1">
          <option selected disabled>-- Select --</option>
          <option @if($request->gedung == "d3") selected @endif value="d3">D3</option>
          <option @if($request->gedung == "d4") selected @endif value="d4">D4</option>
          <option @if($request->gedung == "ps") selected @endif value="ps">Pascasarjana</option>
        </select>
      </label>
      <label for="lantai" class="inline-block mb-3 mr-3">
        <span class="block font-semibold mb-1 text-gray-900">Lantai</span>
        <select name="lantai" id="lantaiDropdown" class=" ps box pl-4 py-2 border shadow rounded-xl block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1 @if($request->gedung == "") disabled @endif">
          <option value="0" selected disabled>-- Select --</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
        @if($request->gedung == "ps")
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
          <option value="10">10</option>
          <option value="11">11</option>
        @endif
        </select>
      </label>
      <input type="submit" value="Filter" name="submit" class="px-3 py-2 bg-color1 rounded-md text-white hover:bg-blue-900 cursor-pointer">
      {{-- <input type="submit" value="Filter" name="refresh" class="px-3 py-2 bg-color1 rounded-md text-white hover:bg-blue-900"> --}}
    {{-- </div> --}}
  </form>

  <div class="sm:flex sm:flex-wrap sm:gap-5">
    @foreach ($ruangan as $ruangan)
    <div class="p-4 rounded-tr-xl rounded-bl-xl bg-color1 text-white mb-3 sm:w-64 sm:mb-0">
      <div>
        {{-- @foreach ($ruangan->ruangans as $ruangan)
          <h1>{{ $ruangan->gambar }}</h1>
        @endforeach --}}
          <img src="http://{{$_SERVER['HTTP_HOST']}}/storage/{{$ruangan->gambar()->first()->gambar}}" class="w-full aspect-[4/3] object-cover rounded-tr-xl rounded-bl-xl">
          {{-- Maaf denah belum tersedia 🙃 --}}
          {{-- <div class="bg-cover w-full aspect-[4/3] bg-[url('/img/denah-c303.png')]"></div> --}}
      </div>
      <p class="block mt-2 uppercase font-semibold">Lab. {{$ruangan->nama_ruangan}}</p>
      <p class="text-sm">Gedung <span class="uppercase">{{$ruangan->gedung}}</span> Lantai <span>{{$ruangan->lantai}}</span></p>
      <div class="flex justify-end mt-5">
        {{-- <a href="/detail/{{$ruangan->id}}" class="block px-2 py-1 rounded bg-blue-500 hover:bg-blue-400">Detail</a> --}}
        <a href="/detail/{{$ruangan->id}}" class="block px-2 py-1 rounded border border-white text-white hover:bg-color1 hover:-translate-x-1 hover:-translate-y-1 transition">Detail</a>
      </div>
    </div>  
    @endforeach
    
    {{-- <div class="p-4 rounded-xl bg-blue-900 text-white mb-3 sm:w-64 sm:mb-0">
      <div class="bg-cover w-full aspect-[4/3] rounded-xl bg-[url('/img/1.jpg')]"></div>
      <p class="block mt-2 uppercase font-semibold">Lab. Sistem Informasi</p>
      <span class="text-sm">Gedung D4 Lantai 2</span>
      <div class="flex justify-end mt-5">
        <a href="/detail" class="block px-2 py-1 rounded bg-blue-500 hover:bg-blue-400">Detail</a>
      </div>
    </div>
    <div class="p-4 rounded-xl bg-blue-900 text-white mb-3 sm:w-64 sm:mb-0">
      <div class="bg-cover w-full aspect-[4/3] rounded-xl bg-[url('/img/1.jpg')]"></div>
      <p class="block mt-2 uppercase font-semibold">Lab. Sistem Informasi</p>
      <span class="text-sm">Gedung D4 Lantai 2</span>
      <div class="flex justify-end mt-5">
        <a href="/detail" class="block px-2 py-1 rounded bg-blue-500 hover:bg-blue-400">Detail</a>
      </div>
    </div> --}}
  </div>
</div>

<div class="container">
</div>
@endsection