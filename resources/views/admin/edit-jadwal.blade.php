@extends('admin.layout.main')
@section('container')
    <div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
      <form action="/ruangan/jadwal/{{ $jadwal->id }}" method="post" enctype="multipart/form-data">
        @method('put')
        @csrf
        <input type="hidden" name="id" id="id" value="{{ $jadwal->id }}">
        <label for="jam" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit Jam</span>
          <input type="text" id="jam" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="jam" value="{{$jadwal->jam}}">
        </label>

        <label for="matkul" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Edit Mata Kuliah</span>
            <input type="text" id="matkul" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="matkul" value="{{$jadwal->matkul}}">
          </label>

        <label for="dosen" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit Dosen</span>
          <input type="text" id="dosen" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="dosen" value="{{$jadwal->dosen}}">
        </label>
        <label for="kelas" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Edit Kelas</span>
            <input type="text" id="kelas" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="kelas" value="{{$jadwal->kelas}}">
          </label>



          <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Simpan Perubahan</button>
      </form>
  </div>
  @endsection