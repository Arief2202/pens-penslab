@extends('user.layout.main')

@section('container')
<div class="flex">
  <div class="rounded-md border-2 shadow-md p-5 m-auto sm:min-w-[400px] max-w-md">
    <div class="flex" >
      <img src="/img/avatar.jpg" class="w-24 h-24 mr-5 rounded">
      <div class="ml-2">
        <p class="text-lg font-semibold mb-1">{{$user->nama}}</p>
        <p class="block text-sm font-medium mt-2 text-slate-500">NRP</p>
        <p class="my-1">{{$user->nrp}}</p>
        <p class="block text-sm font-medium mt-2 text-slate-500">Email</p>
        <p>{{$user->email}}</p>
      </div>
    </div>
    <div class="flex justify-end mt-5">
      <a href="/profile/{{ $user->id }}/edit" class="block px-3 py-1 rounded border-2 border-color1 text-color1 hover:bg-color1 hover:text-white">Edit</a>
    </div>
  </div>
</div>
@endsection