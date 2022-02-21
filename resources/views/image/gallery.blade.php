@extends('layouts.index')
@section('content')
<div class="flex  justify-center items-center  dark:bg-gray-800 dark:border-gray-700">
    @forelse ($data as $item )
    <div class="border-8 border-white-500 m-2 flex flex-col items-center">
        <img   class=" test  w-3/6	" src={{asset("img/".$item->img)}} alt="image" />
        <div class="p-5">
             <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Nom personnage : {{$item->description}}</p>
             <p class="mb-3 font-normal text-gray-700 dark:text-gray-400">Catégorie : {{$item->categorie->categorie}}</p>
        </div>
    </div>
    @empty
<h1>Aucune image dans ma gallerie</h1>
    @endforelse
</div>
<div class="flex justify-center py-5">
    Images de ma gallerie
</div>
<div class="flex justify-center">
<button class="bg-green-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
    <a href={{route('dashboard')}}>RETURN ACCEUIL</a>
  </button>
</div>
@endsection
<style>
    .test {
        width: 100px;
        height:150px
    }
</style>
