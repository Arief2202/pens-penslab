@extends('admin.layout.main')
@section('container')
    <div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
      <form action="/jadwal/create/store" method="post" enctype="multipart/form-data">
        @csrf
        {{-- FIXME ini input nama ruangan knp gak diatas? --}}
        <label for="jam" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Jam</span>
          <input type="text" id="jam" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="jam" required>
        </label>
        <label for="matkul" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Mata Kuliah</span>
          <input type="text" id="matkul" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="matkul" required>
        </label>
        {{-- TODO styling input fasilitas, terutama pas tampilan mobile coy --}}
        <label for="dosen" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Dosen</span>
            <input type="text" id="dosen" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="dosen" required>
          </label>
          <label for="kelas" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Kelas</span>
            <input type="text" id="kelas" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="kelas" required>
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
        {{-- <label for="denah" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Denah</span>
          <input type="file" id="denah" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="denah">
        </label> --}}
        <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Tambahkan</button>
      </form>
  </div>
  @endsection