@extends('admin.layout.main')
@section('container')
    <div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
      <form action="/admin/{{ $ruangan->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $ruangan->id }}">
        <label for="nama_ruangan" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Nama Ruangan</span>
          <input type="text" id="nama_ruangan" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nama_ruangan" value="{{$ruangan->nama_ruangan}}">
        </label>


        <label for="gedung" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Gedung</span>
          <select name="gedung" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1">
            <option value="#" selected disabled>-- Select --</option>
            <option @if($ruangan->gedung == "d3") selected @endif value="d3">D3</option>
            <option @if($ruangan->gedung == "d4") selected @endif value="d4">D4</option>
            <option @if($ruangan->gedung == "ps") selected @endif value="ps">Pascasarjana</option>
          </select>
        </label>
    <label for="lantai">Lantai</label>
    
    <select name="lantai" class="ps box px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1">
      <option value="0" selected disabled>-- Select --</option>
      <option  @if($ruangan->lantai == "1") selected @endif value="1">1</option>
      <option  @if($ruangan->lantai == "2") selected @endif value="2">2</option>
      <option  @if($ruangan->lantai == "3") selected @endif value="3">3</option>
      @if($ruangan->gedung == "ps")
        <option @if($ruangan->lantai == "4") selected @endif value="4">4</option>
        <option @if($ruangan->lantai == "5") selected @endif value="5">5</option>
        <option @if($ruangan->lantai == "6") selected @endif value="6">6</option>
        <option @if($ruangan->lantai == "7") selected @endif value="7">7</option>
        <option @if($ruangan->lantai == "8") selected @endif value="8">8</option>
        <option @if($ruangan->lantai == "9") selected @endif value="9">9</option>
        <option @if($ruangan->lantai == "10") selected @endif value="10">10</option>
        <option @if($ruangan->lantai == "10") selected @endif value="11">11</option>
      @endif
    </select>

        <label for="kepala_lab" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Kepala Lab</span>
          <input type="text" id="kaLab" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="kepala_lab" value="{{$ruangan->kepala_lab}}">
        </label>
        {{-- <label for="fasilitas" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Fasilitas</span>
          <input type="text" id="fasilitas" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="fasilitas" value="{{$ruangan->fasilitas}}">
        </label> --}}

        <label for="fasilitas" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Fasilitas</span>
          <input name="fasilitas" id="input-tags" style="" value="{{$ruangan->fasilitas}}"/>
          {{-- <input type="text" id="fasilitas" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="fasilitas"> --}}
        </label>

        <label for="gambar_ruangan" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">gambar_ruangan</span>
          <input type="file" id="gambar_ruangan" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="gambar_ruangan" value="{{$ruangan->gambar_ruangan}}">
        </label>

        <label for="jadwal" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Jadwal</span>
          <input type="file" id="jadwal" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="jadwal" value="{{$ruangan->jadwal}}">
        </label>
        <label for="denah" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Denah</span>
          <input type="file" id="denah" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="denah" value="{{$ruangan->denah}}">
        </label>
        <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Simpan Perubahan</button>
      </form>
  </div>
  @endsection