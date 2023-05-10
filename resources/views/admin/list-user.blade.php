@extends('admin.layout.main')

@section('container')
<div class="h-[70px] mx-auto mb-3 rounded-tr-2xl rounded-bl-2xl bg-color1 text-white flex justify-between px-9">
    <span class="my-auto font-medium">List User</span>
</div>

<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
<table class="w-full text-sm text-left text-gray-500">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50">
        <tr>
            <th scope="col" class="px-6 py-3">
                No
            </th>
            <th scope="col" class="px-6 py-3">
                NRP
            </th>
            <th scope="col" class="px-6 py-3">
                Nama
            </th>
            <th scope="col" class="px-6 py-3">
                Email
            </th>
            {{-- <th scope="col" class="px-6 py-3">
                Password
            </th> --}}
            <th scope="col" class="px-6 py-3">
                Role
            </th>
            <th scope="col" class="px-6 py-3">
                <span class="sr-only">Action</span>
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($user as $user    )           
        <tr class="border-b odd:bg-white even:bg-gray-50">
            <td class="px-6 py-4">
                {{$loop->iteration}}
            </td>
            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                {{$user->nrp}}
            </th>
            <td class="px-6 py-4">
                {{$user->nama}}
            </td>
            <td class="px-6 py-4">
                {{$user->email}}
            </td>
            {{-- <td class="px-6 py-4">
                {{$user->password}}
            </td> --}}
            <td class="px-6 py-4">
                {{$user->role}}
            </td>
            <td class="px-6 py-4 flex">
                <a href="/admin/{{ $user->id }}/edit-user" class="font-medium text-blue-600 hover:underline">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                    </svg>
                </a>
                <form action="/admin/{{ $user->id }}/delete-user" method="post">
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
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection