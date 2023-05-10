@extends('user.layout.main')
@section('container')
    <div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
      <form action="/profile/{{ $user->id }}/edit-profile/" method="get" enctype="multipart/form-data">
        @method('put')
        @csrf
        <label for="nrp" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit NRP</span>
          <input type="text" id="nrp" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nrp" value="{{$user->nrp}}">
        </label>

          
        <label for="nama_user=" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Nama</span>
            <input type="text" id="nama" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nama" value="{{$user->nama}}">
          </label>
        {{-- <label for="nama_ruangan" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Nama Belakang</span>
            <input type="text" id="nama" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nama" value="{{$user->nama}}">
          </label> --}}

        <label for="email" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit Email</span>
          <input type="text" id="email" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="email" value="{{$user->email}}">
        </label>
        
          <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Simpan Perubahan</button>
      </form>
  </div>
  @endsection