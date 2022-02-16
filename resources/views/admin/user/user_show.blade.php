@extends('layouts.index')
@section('content')
<div class="mx-auto max-w-sm rounded overflow-hidden shadow-lg">
    <img class="w-full" src={{asset('img/'.$data->avatar->img)}} alt="Sunset in the mountains">
    <div class="px-6 py-4">
      <div class="font-bold text-xl mb-2">{{$data->name}}</div>
      <div class="font-bold text-xl mb-2">Email : {{$data->email}}</div>
      <div class="font-bold text-xl mb-2">Inscription : {{$data->created_at}}</div>
      <div class="font-bold text-xl mb-2">Avatar : {{$data->avatar->nom}}</div>

    </div>
    <div class="px-6 pt-4 pb-2">
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#photography</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#travel</span>
      <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">#winter</span>
    </div>
  </div>

  <div class="flex justify-center">
    <button class=" m-3 bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
        <a href={{route('dashboard')}}>RETURN</a>
      </button>
  </div>
@endsection
