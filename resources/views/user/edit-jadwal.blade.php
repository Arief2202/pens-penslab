@extends('user.layout.main')

@section('container')
<div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
    <form action="/admin/edit-jadwal/" method="get" enctype="multipart/form-data">
      @method('put')
      @csrf
      <a href="/ruangan" class="rounded-full p-1 hover:bg-blue-900">
      <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
        <path stroke-linecap="round" stroke-linejoin="round" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
      </svg>
      <label for="jam" class="block mb-3">
        <span class="block font-semibold mb-1 text-gray-900">Edit Jam</span>
        <input type="text" id="jam" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="jam" >
      </label>
      
      <label for="matkul=" class="block mb-3">
          <span class="block font-semibold mb-1 text-gray-900">Edit Mata Kuliah</span>
          <input type="text" id="matkul" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="matkul" >
        </label>

      <label for="dosen" class="block mb-3">
        <span class="block font-semibold mb-1 text-gray-900">Edit Dosen</span>
        <input type="text" id="dosen" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" name="dosen" >
      </label>

      <label for="kelas" class="block mb-3">
        <span class="block font-semibold mb-1 text-gray-900">Edit Kelas</span>
        <select name="gedung" id="gedungDropDown" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" required>
            <option value="#" selected disabled>-- Select --</option>
            {{-- <option @if($request->kelas == "d3") selected @endif value="d3">D3</option>
            <option @if($request->kelas == "d4") selected @endif value="d4">D4</option>
            <option @if($request->kelas == "ps") selected @endif value="ps">Pascasarjana</option> --}}
          </select>
      </label>
      <label for="kelas" class="block mb-3">
        <select name="gedung" id="gedungDropDown" class="px-3 py-2 border shadow rounded-xl w-full block text-sm bg-white border-gray-400 focus:outline-none focus:ring-1 focus:ring-color1 focus:border-color1" required>
            <option value="#" selected disabled>-- Select --</option>
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            {{-- @if($request->kelas == "d4")
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option>
            @if($request->kelas == "ps")
            <option value="1">Semester 1</option>
            <option value="2">Semester 2</option>
            <option value="3">Semester 3</option>
            <option value="4">Semester 4</option>
            <option value="5">Semester 5</option>
            <option value="6">Semester 6</option>
            <option value="7">Semester 7</option>
            <option value="8">Semester 8</option> --}}
          </select>
      </label>
      
        <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-8 block mx-auto hover:bg-blue-900" type="submit">Simpan Perubahan</button>
    </form>
</div>
@endsection