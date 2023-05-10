@extends('admin.layout.main')
@section('container')
    <div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
      <form action="/admin/create/store" method="post" enctype="multipart/form-data">
        @csrf
        <label for="gedung" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Gedung</span>
          <select name="gedung" id="gedungDropDown" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" required>
            <option value="#" selected disabled>-- Select --</option>
            <option @if($request->gedung == "d3") selected @endif value="d3">D3</option>
            <option @if($request->gedung == "d4") selected @endif value="d4">D4</option>
            <option @if($request->gedung == "ps") selected @endif value="ps">Pascasarjana</option>
          </select>
        </label>
        <label for="lantai" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Lantai</span>
          <select name="lantai" class="ps box px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" @if($request->gedung == "") disabled @endif required>
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
        {{-- FIXME ini input nama ruangan knp gak diatas? --}}
        <label for="nama_ruangan" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Nama Ruangan</span>
          <input type="text" id="nama_ruangan" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nama_ruangan" required>
        </label>
        <label for="kepala_lab" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Kepala Lab</span>
          <input type="text" id="kepala_Lab" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="kepala_lab" required>
        </label>
        {{-- TODO styling input fasilitas, terutama pas tampilan mobile coy --}}
        <label for="fasilitas" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Fasilitas</span>
          <input name="fasilitas" id="input-tags" class=""/>
          {{-- <input type="text" id="fasilitas" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="fasilitas"> --}}
        </label>
        {{-- <label for="gambar_ruangan" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Gambar Ruangan</span>
          <input type="file" id="gambar_ruangan1" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="gambar_ruangan1"></br>
          <input type="file" id="gambar_ruangan2" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="gambar_ruangan2"></br>
          <input type="file" id="gambar_ruangan3" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="gambar_ruangan3">
        </label> --}}
        {{-- <label for="jadwal" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Jadwal</span>
          <input type="file" id="jadwal" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="jadwal">
        </label> --}}
        <label for="denah" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Denah</span>
          <input type="file" id="denah" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="denah">
        </label>
        <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Tambahkan</button>
      </form>
  </div>
  @endsection