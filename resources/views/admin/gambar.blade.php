@extends('admin.layout.main')
@section('container')
<div class="w-full sm:max-w-md md:max-w-lg h-auto bg-gray-200 rounded-xl m-auto px-10 sm:px-14 py-10 shadow-md">
    <form action="{{ route('gambar_add') }}" method="post" enctype="multipart/form-data">
      @csrf
      <label for="gambar" class="block mb-3">
        <span class="block font-semibold mb-4 text-gray-900">Gambar Ruangan</span>
        <input type="hidden" name="ruangan_id" value="{{ $ruangan }}">
        <input type="file" id="gambar" class="block w-full text-sm text-slate-500 file:mr-4 file:py-1 file:px-4 file:text-sm file:font-medium file:text-color1 file:rounded-2xl file:border-none file:bg-slate-300 hover:file:bg-slate-400" name="gambar" @if($gambar->count() > 2) disabled @else required @endif>
      </label>
      @if($gambar->count() > 2)
      <p class="text-xs text-red-700">*jumlah gambar sudah mencapai batas maksimal</p>
      @endif
      <button class="px-5 py-2 bg-color1 rounded-lg text-sm text-white font-medium mt-4 mb-5 block mx-auto hover:bg-blue-900" type="submit">Tambahkan</button>
    </form> <br>
    
    @foreach ($gambar as $gambars)
    <div class="relative w-fit group">
      <img src="http://{{$_SERVER['HTTP_HOST']}}/storage/{{ $gambars->gambar }}" class="mb-4" title="Carousel" alt="">
      <div class="absolute inset-0 bg-black bg-opacity-50 hidden group-hover:flex">
        <form action="/admin/gambar/{{ $gambars->id }}" method="post" class="m-auto">
          @method('delete')
          @csrf
          <button class="px-5 py-2 bg-red-700 rounded-lg shadow-md text-sm text-white font-medium hover:bg-red-800" type="submit">Hapus</button>
        </form>
        </div>
      </div>

    @endforeach
    
</div>
@endsection