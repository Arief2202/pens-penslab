@extends('admin.layout.main')

@section('container')
<div class="h-[70px] mx-auto mb-3 rounded-tr-2xl rounded-bl-2xl bg-color1 text-white flex justify-between px-9">
    <span class="my-auto font-medium">Laboratorium dan Ruangan</span>
    <a href="/admin/create"
        class="px-2 py-1 my-auto border rounded-tr-xl rounded-bl-xl hover:bg-white hover:text-blue-800">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
            stroke="currentColor" stroke-width="2">
            <path stroke-linecap="round" stroke-linejoin="round" d="M12 4v16m8-8H4" />
        </svg>
    </a>
</div>

{{-- TODO cek responsivitas tabel --}}
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-6 py-3">
                Nama Ruangan
            </th>
            <th scope="col" class="px-6 py-3">
                Gedung
            </th>
            <th scope="col" class="px-6 py-3">
                Lantai
            </th>
            <th scope="col" class="px-6 py-3">
                Kepala. Lab
            </th>
            <th scope="col" class="px-6 py-3">
                Fasilitas
            </th>
            <th scope="col" class="px-6 py-3">
                Action
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ruangan as $ruangan)           
        <tr class="border-b odd:bg-white even:bg-gray-50">
            <td class="px-6 py-4">
                {{$loop->iteration}}
            </td>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                Lab. {{$ruangan->nama_ruangan}}
            </th>
            <td class="px-6 py-4 uppercase">
                {{$ruangan->gedung}}
            </td>
            <td class="px-6 py-4">
                {{$ruangan->lantai}}
            </td>
            <td class="px-6 py-4">
                {{$ruangan->kepala_lab}}
            </td>
            <td class="px-6 py-4">
                {{$ruangan->fasilitas}}
            </td>
            {{-- @foreach ($fasilitas as $item)
            <td class="px-6 py-4">
                {{$item->nama}}
            </td>
            @endforeach --}}
            <td class="px-6 py-4 flex">
                <a href="/admin/edit/{{ $ruangan->id }}" class="font-medium text-blue-600 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                <a href="/admin/gambar/{{ $ruangan->id }}" class="font-medium text-blue-600 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                </a>
                <form action="/admin/{{ $ruangan->id }}" method="post">
                    @method('delete')
                    @csrf
                    <button class="font-medium text-pink-600 hover:underline">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                        d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                        </svg>
                    </button>
                </form>
                
                {{-- <a href="/admin/gambar/{{ $ruangan->id }}" class="font-medium text-pink-600 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                      </svg>
                </a> --}}
                  
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection