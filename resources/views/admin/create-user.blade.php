@extends('admin.layout.main')
@section('container')
    <div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-14 py-10 shadow-md">
      <form action="/admin/create-user/store" method="post" enctype="multipart/form-data">
        @csrf
        <label for="nama_ruangan" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit NRP</span>
          <input type="text" id="nrp" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nrp" >
        </label>

        <label for="nama_ruangan" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Edit Nama</span>
            <input type="text" id="nama" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="nama" >
          </label>

        <label for="kepala_lab" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit Email</span>
          <input type="text" id="email" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="email" >
        </label>

        <label for="kepala_lab" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">New Password (Optional)</span>
            <input type="password" id="password" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="password">
          </label>

          <label for="role" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Ubah Role</span>
            <select name="role" id="role" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1">
              <option selected disabled>-- pilih --</option>
              {{-- @foreach ( explode(",", $user->role) as $item) --}}
                <option value="0">0</option>
                <option value="1">1</option>
              {{-- @endforeach --}}
            </select>
            {{-- <input type="text" id="fasilitas" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="fasilitas"> --}}
          </label>

          {{-- <label for="kepala_lab" class="block mb-3">
            <span class="block font-semibold mb-1 text-gray-900">Edit Role</span>
            <input type="text" id="role" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="role" value="{{$user->role}}">
          </label> --}}
          <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Tambahkan Data</button>
      </form>
  </div>
  @endsection